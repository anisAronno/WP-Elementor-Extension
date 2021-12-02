<?php
/**
 * Elementor Services Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Services_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Services widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'services';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Services widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Services', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Services widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-cog';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Services widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'atl-category' ];
	}

	/**
	 * Register Services widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'services_column',
			[
				'label' => __( 'Select Services Column', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'columnThree',
				'options' => [
					'columnFour'  => __( '4 Column', 'atl-extension' ),
					'columnThree' => __( '3 Column', 'atl-extension' ),
					'columnTwo' => __( '2 Column', 'atl-extension' ),
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'feature_link',
			[
				'label' => __( 'Services Page Link', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Write Linke Here', 'atl-extension' ),
			
			]
        );
        

		$repeater->add_control(
			'feature_target',
			[
				'label' => __( 'Open With New Page', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default'=>'off',
			]
        );
        



		$repeater->add_control(
			'feature_media_type',
			[
				'label' => __( 'Media Type', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'feature_icon' => [
						'title' => __( 'Icon', 'atl-extension' ),
						'icon' => 'eicon-call-to-action',
					],
					'feature_image' => [
						'title' => __( 'Image', 'atl-extension' ),
						'icon' => 'eicon-image-box',
					],
					'feature_number' => [
						'title' => __( 'Number', 'atl-extension' ),
						'icon' => 'eicon-number-field',
					],
				],
				'default' => 'feature_icon',
				'toggle' => true,
			]
		);

		$repeater->add_control(
			'feature_icon', [
				'label' => __( 'Icon', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'label_block' => true,
				'condition' => [
					'feature_media_type' => 'feature_icon'
				]
			]
		);

		$repeater->add_control(
			'feature_image', [
				'label' => __( 'Image', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
				'condition' => [
					'feature_media_type' => 'feature_image'
				]
			]
		);
		

		$repeater->add_control(
			'feature_number', [
				'label' => __( 'Number', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'label_block' => true,
				'condition' => [
					'feature_media_type' => 'feature_number'
				]
			]
		);

		$repeater->add_control(
			'service_title', [
				'label' => __( 'Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Software Development' , 'atl-extension' ),
				'label_block' => true,
                'separator' => 'before'
			]
		);

		$repeater->add_control(
			'service_desc',
			[
				'label' => __( 'Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' , 'atl-extension' ),
				'label_block' => true,
                'separator' => 'before'
			]
		);

		$this->add_control(
			'services_list',
			[
				'label' => __( 'Services List', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ service_title }}}',
			]
		);
       
        $this->end_controls_section();

        // Style Tab
        $this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Styles', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

		// icon Options
		$this->add_control(
			'feature_icon_style',
			[
				'label' => __( 'Icon', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		// icon Background Color
		$this->add_control(
			'feature_icon_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'default' => '#000',
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .featured i' => 'color: {{VALUE}}',
				],
			]
		);

	

  
     
        
        // Title Options
		$this->add_control(
			'service_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

        // Title Color
        $this->add_control(
			'service_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .featured .card-title' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'service_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .featured .card-title',
			]
        );
        
        // Description Options
		$this->add_control(
			'desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

        // Description Color
        $this->add_control(
			'desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .featured .card-text' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Description Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .featured .card-text',
			]
        );
  

        $this->end_controls_section();
	}

	/**
	 * Render Services widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
        $services_column = $settings['services_column'];

		if($services_column == 'columnThree'){
			$services_column_class = 'row-cols-md-3';
		} elseif ($services_column == 'columnFour') {
			$services_column_class = 'row-cols-md-4';
		} else {
			$services_column_class = 'row-cols-md-2';
		}
    ?>
   


	<section id="featured" class="featured">
		
                <div class="container">
                    
                        <div  class="row row-cols-1 <?php echo $services_column_class;?> g-5 text-center" data-aos="fade-up">
						<?php
							if ( $settings['services_list'] ) {
								foreach (  $settings['services_list'] as $key=> $item ) {
								$link=$item['feature_link']['url']?  $item['feature_link']['url'] : '#';
								$target='';
								if($item['feature_target'] == 'yes'){
									$target='_blank';
								}else if ($item['feature_target'] == 'off'){
									$target='_self';
								}
						?>
						<a href="<?php  echo $link;?>" target="<?php echo $target;?>">
                                <div class="col animated-up">
                                  <div class="card h-100 shadow">
								  <?php
										if(!empty($item['feature_icon']['value'])){
									?>
										<i  class="<?php echo $item['feature_icon']['value'];?> services-icon"></i>
									<?php
										} elseif (!empty($item['feature_image']['url'])){
									?>
										<img src="<?php echo $item['feature_image']['url']; ?>" alt="">
									<?php
										} elseif ($item['feature_number']){
									?>
										<span><?php echo $item['feature_number']; ?></span>
									<?php
										}
									?>
                                    <div class="card-body">
                                      <h5 class="card-title"><?php echo $item['service_title'];?></h5>
                                      <p class="card-text"><?php echo $item['service_desc'];?></p>
                                    </div>
                                    <div class="card-footer-circle">
                                        <span><?php echo $key+1; ?></span>
                                      </div>
                                  </div>
                                </div>
							</a>    
								<?php
										}
									}
								?>
                        </div>
                        
                </div>
				 
        </section> 
<?php
	}

}