<?php
/**
 * Elementor Features Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Features_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Features widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'features';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Features widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Features', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Features widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-product-categories';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Features widget belongs to.
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
	 * Register Features widget controls.
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

		// Features Style
		$this->add_control(
			'features_style',
			[
				'label' => __( 'Features Style', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'features1',
				'options' => [
					'features1'  => __( 'Feature Style 1', 'atl-extension' ),
					'features2' => __( 'Feature Style 2', 'atl-extension' ),
				],
			]
		);

        // Features Sub Title
		$this->add_control(
			'features_sub_title',
			[
				'label' => __( 'Features Sub Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
				'placeholder' => __( 'Write Features Sub Title Here', 'atl-extension' ),
                'separator'=> 'before',
			]
        );
        
        // Features Title
		$this->add_control(
			'features_title',
			[
				'label' => __( 'Features Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
				'placeholder' => __( 'Write Features Title Here', 'atl-extension' ),
			]
        );

		$repeater = new \Elementor\Repeater();

		// Feature Box Icon
		$repeater->add_control(
			'feature_box_icon',
			[
				'label' => __( 'Feature Box Icon', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		// Feature Box Title
		$repeater->add_control(
			'feature_box_title', [
				'label' => __( 'Feature Box Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Feature Box Title' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		// Feature Box Description
		$repeater->add_control(
			'feature_box_desc', [
				'label' => __( 'Feature Box Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Feature Box Description' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'features_list',
			[
				'label' => __( 'Features List', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ feature_box_title }}}',
			]
		);

		// Feature Image
		$this->add_control(
			'feature_image',
			[
				'label' => __( 'Choose Feature Image', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Choose Feature Image', 'atl-extension' ),
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

		// Feature Area Background Options
		$this->add_control(
			'feature_area_back_heading',
			[
				'label' => __( 'Feature Background Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		// Feature Area Background Color
        $this->add_control(
			'feature_area_back',
			[
				'label' => __( 'Background Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#f8f9fa',
				'selectors' => [
					'{{WRAPPER}} .features' => 'background-color: {{VALUE}}',
				],
			]
        );

        // Sub Title Options
		$this->add_control(
			'feature_subtitle_heading',
			[
				'label' => __( 'Sub Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

        // Sub Title Color
        $this->add_control(
			'feature_subtitl_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#777',
				'selectors' => [
					'{{WRAPPER}} .single-feature h6' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Sub Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_subtitl_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .single-feature h6',
			]
        );
        
        // Title Options
		$this->add_control(
			'title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

        // Title Color
        $this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => 'tomato',
				'selectors' => [
					'{{WRAPPER}} .single-feature h4' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .single-feature h4',
			]
        );

		// Title Separator Color
        $this->add_control(
			'title_separator_color',
			[
				'label' => __( 'Separator Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => 'tomato',
				'selectors' => [
					'{{WRAPPER}} .single-feature h4::before' => 'background-color: {{VALUE}}',
				],
			]
        );
        
        // Features Options
		$this->add_control(
			'features_heading',
			[
				'label' => __( 'Features', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

        // Feature Icon Color
        $this->add_control(
			'feature_icon_color',
			[
				'label' => __( 'Icon Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .feature-box i' => 'color: {{VALUE}}',
				],
			]
        );

		// Feature Icon Size
		$this->add_control(
			'feature_icon_size',
			[
				'label' => __( 'Icon Size', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => 'px',
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 100,
						'step' => 5,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 26,
				],
				'selectors' => [
					'{{WRAPPER}} .feature-box i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// Features Title Options
		$this->add_control(
			'features_title_options',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

		// Features Title Color
        $this->add_control(
			'feature_title_color',
			[
				'label' => __( 'Title Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .feature-box h5' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Features Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .feature-box h5',
			]
        );

		// Features Description Options
		$this->add_control(
			'features_desc',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

		// Features Description Color
        $this->add_control(
			'feature_desc_color',
			[
				'label' => __( 'Description Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .single-feature p' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Features Description Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .single-feature p',
			]
        );

		// Image Options
		$this->add_control(
			'image_options',
			[
				'label' => __( 'Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

		// Image Background Color
        $this->add_control(
			'image_background',
			[
				'label' => __( 'Background Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .features-1::after, .features-2::after' => 'background-color: {{VALUE}}',
				],
			]
        );

		// Image Opacity
        $this->add_control(
			'image_opacity',
			[
				'label' => __( 'Opacity', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => 1,
				],
				'range' => [
					'px' => [
						'max' => 1,
						'min' => 0.10,
						'step' => 0.01,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-image img' => 'opacity: {{SIZE}};',
				],
			]
		);

        $this->end_controls_section();
	}

	/**
	 * Render Features widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
        $features_style = $settings['features_style'];
        $features_sub_title = $settings['features_sub_title'];
        $features_title = $settings['features_title'];
        $feature_image = $settings['feature_image']['url'];

		if($features_style == 'features1'){
			$feature_class = '';
			$margin_left = '';
			
		}else{
			$feature_class = 'order-0 order-md-1';
			$margin_left = 'ml-auto';
		}
    ?>
	<style>
		.features-1::before, .features-2::before{
			background-image:url('');
		}
	</style>
    <div class="features row">
		<div class="col-md-6 <?php echo  $feature_class ;?>">
				<img src="<?php echo $feature_image; ?>" alt="">
		</div>
		<div class="col-md-6 <?php echo $margin_left; ?>">
			<div class="single-feature text-center">
				<h6><?php echo $features_sub_title; ?></h6>
				<h4><?php echo $features_title; ?></h4>
				
				<div class="row">
					<?php
						if ( $settings['features_list'] ) {
							foreach (  $settings['features_list'] as $item ) {
					?>
					<div class="col-xl-6">
						<div class="feature-box">
							<i class="<?php echo $item['feature_box_icon']['value']; ?>"></i>
							<h5><?php echo $item['feature_box_title']; ?></h5>
							<p><?php echo $item['feature_box_desc']; ?></p>
						</div>
					</div>
					<?php
							}
						}
					?>
				</div>
			</div>
		</div>
	  </div>
<?php
	}

}