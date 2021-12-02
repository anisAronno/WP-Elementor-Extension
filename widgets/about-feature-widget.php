<?php
/**
 * Elementor About Feature Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class About_Feature_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve About Feature widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'About Feature';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve About Feature widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl About Feature', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve About Feature widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-preferences';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the About Feature widget belongs to.
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
	 * Register About Feature widget controls.
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
			'about_feature_sub_title', [
				'label' => __( 'About Feature Sub Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'About us' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'about_feature_title', [
				'label' => __( 'About Feature Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Business Agency That Helps You Succeed' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

	
		$this->add_control(
			'about_feature_desc', [
				'label' => __( 'About Feature Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'about_feature_image', [
                'label' => __( 'About Feature Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

	
		$repeater = new \Elementor\Repeater();

        // about_feature Options
        $this->add_control(
            'about_feature_list_heading',
            [
                'label' => __( 'Left About Feature', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


	

		$repeater->add_control(
			'about_feature_list_icon',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'about_feature_list_title', [
				'label' => __( 'About Feature Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'We’re the leaders in web and App based.' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'about_feature_list_desc', [
				'label' => __( 'About Feature Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni dolore magnam iusto neque facere vero eveniet sit, fugiat, praesentium quam, fugit ab blanditiis! Minima officia pariatur, provident iusto autem porro.' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'about_feature_lists',
			[
				'label' => __( 'About Feature Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ about_feature_list_title }}}',
			]
		);
       

		$this->end_controls_section();


		// About Feature Style Tab
        $this->start_controls_section(
			'about_feature_intro_style_section',
			[
				'label' => __( 'About Feature Heading', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        






	// About Intro Icon
	$this->add_control(
		'about_feature_intro_sub_title_heading',
		[
			'label' => __( 'Sub Title', 'atl-extension' ),
			'type' => \Elementor\Controls_Manager::HEADING,
			'separator' => 'before'
		]
	);

	 // About Intro Title Color
	 $this->add_control(
		'about_feature_intro_sub_title_color',
		[
			'label' => __( 'Color', 'atl-extension' ),
			'type' => \Elementor\Controls_Manager::COLOR,
			'scheme' => [
				'type' => \Elementor\Core\Schemes\Color::get_type(),
				'value' => \Elementor\Core\Schemes\Color::COLOR_1,
			],
			'default' => '#fff',
			'selectors' => [
				'{{WRAPPER}} .history .display-2--start' => 'color: {{VALUE}}',
			],
		]
	);
	
	//  About Intro Title Typography 
	$this->add_group_control(
		\Elementor\Group_Control_Typography::get_type(),
		[
			'name' => 'about_feature_intro_sub_title_typography',
			'label' => __( 'Typography', 'atl-extension' ),
			'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
			'selector' => '{{WRAPPER}} .history .display-2--start',
		]
	);




		// About Intro Icon
		$this->add_control(
			'about_feature_intro_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Intro Title Color
         $this->add_control(
			'about_feature_intro_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .history .display-2--intro ' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Intro Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_feature_intro_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .history .display-2--intro  ',
			]
        );








		// About Intro Icon
		$this->add_control(
			'about_feature_intro_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Intro Title Color
         $this->add_control(
			'about_feature_intro_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .history .about-sub-title ' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Intro Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_feature_intro_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .history .about-sub-title ',
			]
        );

		
        $this->end_controls_section();


		// About Feature Style Tab
        $this->start_controls_section(
			'about_feature_style_section',
			[
				'label' => __( 'About Feature', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// icon Options
		$this->add_control(
			'about_feature_icon_style',
			[
				'label' => __( 'Icon', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		// icon Background Color
		$this->add_control(
			'about_feature_icon_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'default' => '#21299C',
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .history .address i' => 'color: {{VALUE}}',
				],
			]
		);









		// About Feature Title
		$this->add_control(
			'about_feature_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Feature Title Color
         $this->add_control(
			'about_feature_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .history .address h5' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Feature Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_feature_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .history .address h5',
			]
        );




		// About Feature Description
		$this->add_control(
			'about_feature_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Feature Description Color
         $this->add_control(
			'about_feature_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .history .address p' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Feature Description Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_feature_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .history .address p',
			]
        );



        $this->end_controls_section();
	}

	/**
	 * Render About Feature widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
		$about_feature_title = $settings['about_feature_title'];
		$about_feature_sub_title = $settings['about_feature_sub_title'];
		$about_feature_desc = $settings['about_feature_desc'];
		$about_feature_image = $settings['about_feature_image']['url'];
		$about_featureImages= $about_feature_image ? $about_feature_image: plugin_dir_url( dirname( __FILE__ ) ) .'/images/about/history.png';

    ?>
   
   <div id="history" class="history">
                <div class="container">
                        <div class="row ">
                                 <!-- START THE CONTENT FOR THE Graphics -->
                                 <div class="col-md-6  illutration">
                                  
                                        <img src="<?php echo $about_featureImages; ?>" alt="video illutration"
                                                class="img-fluid">        
                                        
                                               
                                        </div>
                                 <!-- START THE CONTENT FOR THE Description  -->
                                 <div class="col-md-6  text-start" >
                                        <h1 class="display-2">
                                                <span class="display-2--start"><?php echo $about_feature_sub_title; ?></span>
                                                <span class="display-2--intro"><?php echo $about_feature_title; ?></span>
                                                <div class="display-2--description lh-base about-sub-title">
													<?php echo $about_feature_desc; ?>
                                                </div>
                                        </h1>

                                        <div class="info">
										<?php
												if ( $settings['about_feature_lists'] ) {
												foreach (  $settings['about_feature_lists'] as $item ) {
											?>
                                                <div class="address">
                                                        <div class="left d-flex justify-content-center align-items-center">
                                                            
																<i class="<?php echo $item['about_feature_list_icon']['value']; ?>"></i>
                                                        </div>        
                                                        <div class="right ">
                                                        <h5><?php echo $item['about_feature_list_title']; ?></h5>
                                                        <p><?php echo $item['about_feature_list_desc']; ?></p>
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
               
        </div> 





   


<?php
	}

}














