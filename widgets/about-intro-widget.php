<?php
/**
 * Elementor About Intro Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class About_Intro_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve About Intro widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'About Intro';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve About Intro widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl About Intro', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve About Intro widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-kit-details';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the About Intro widget belongs to.
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
	 * Register About Intro widget controls.
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
			'about_intro_sub_title', [
				'label' => __( 'About Intro Sub Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'About Us' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'about_intro_title', [
				'label' => __( 'About Intro Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Business Agency That Helps You Succeed' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'about_intro_desc', [
				'label' => __( 'About Intro Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'about_intro_image', [
                'label' => __( 'About Intro Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'btn_text',
			[
				'label' => __( 'Button Text', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'default' => 'Read More ',
			]
        );
        
        // Button  Link
		$this->add_control(
			'btn_link',
			[
				'label' => __( 'Button  Link', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Write Button Linke Here', 'atl-extension' ),
			]
        );
	
		$repeater = new \Elementor\Repeater();

        // about_intro Options
        $this->add_control(
            'about_intro_list_heading',
            [
                'label' => __( 'Left About Intro', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


	

		$repeater->add_control(
			'about_intro_list_icon',
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
			'about_intro_list_title', [
				'label' => __( 'About Intro Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'We’re the leaders in web and App based.' , 'atl-extension' ),
				'label_block' => true,
			]
		);

	

		$this->add_control(
			'about_intro_lists',
			[
				'label' => __( 'About Intro Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ about_intro_list_title }}}',
			]
		);
       

		$this->end_controls_section();


		// About Intro Style Tab
        $this->start_controls_section(
			'about_intro_intro_style_section',
			[
				'label' => __( 'About Intro Heading', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        





	// About Intro Icon
	$this->add_control(
		'about_intro_intro_sub_title_heading',
		[
			'label' => __( 'Sub Title', 'atl-extension' ),
			'type' => \Elementor\Controls_Manager::HEADING,
			'separator' => 'before'
		]
	);

	 // About Intro Title Color
	 $this->add_control(
		'about_intro_intro_sub_title_color',
		[
			'label' => __( 'Color', 'atl-extension' ),
			'type' => \Elementor\Controls_Manager::COLOR,
			'scheme' => [
				'type' => \Elementor\Core\Schemes\Color::get_type(),
				'value' => \Elementor\Core\Schemes\Color::COLOR_1,
			],
			'default' => '#000',
			'selectors' => [
				'{{WRAPPER}} .aboutIntro .display-2--start' => 'color: {{VALUE}}',
			],
		]
	);
	
	//  About Intro Title Typography 
	$this->add_group_control(
		\Elementor\Group_Control_Typography::get_type(),
		[
			'name' => 'about_intro_intro_sub_title_typography',
			'label' => __( 'Typography', 'atl-extension' ),
			'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
			'selector' => '{{WRAPPER}} .aboutIntro .display-2--start',
		]
	);




		// About Intro Icon
		$this->add_control(
			'about_intro_intro_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Intro Title Color
         $this->add_control(
			'about_intro_intro_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#1714e0',
				'selectors' => [
					'{{WRAPPER}} .aboutIntro .display-2--intro ' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Intro Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_intro_intro_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .aboutIntro .display-2--intro  ',
			]
        );








		// About Intro Icon
		$this->add_control(
			'about_intro_intro_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Intro Title Color
         $this->add_control(
			'about_intro_intro_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .aboutIntro .about-sub-title ' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Intro Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_intro_intro_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .aboutIntro .about-sub-title ',
			]
        );



		
        $this->end_controls_section();







		// About Intro Style Tab
        $this->start_controls_section(
			'about_intro_style_section',
			[
				'label' => __( 'About Intro', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// icon Options
		$this->add_control(
			'about_intro_icon_style',
			[
				'label' => __( 'Icon', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		// icon Background Color
		$this->add_control(
			'about_intro_icon_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'default' => '#1714e0',
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .aboutIntro .address i' => 'color: {{VALUE}}',
				],
			]
		);









		// About Intro Title
		$this->add_control(
			'about_intro_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // About Intro Title Color
         $this->add_control(
			'about_intro_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .aboutIntro .address p' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  About Intro Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_intro_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .aboutIntro .address p',
			]
        );




        $this->end_controls_section();
	}

	/**
	 * Render About Intro widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
		$about_intro_title = $settings['about_intro_title'];
		$about_intro_sub_title = $settings['about_intro_sub_title'];
		$about_intro_desc = $settings['about_intro_desc'];
		$btn_text = $settings['btn_text'];
		$btn_link = $settings['btn_link'];
		$about_intro_image = $settings['about_intro_image']['url'];
		$about_introImages= $about_intro_image ? $about_intro_image: plugin_dir_url( dirname( __FILE__ ) ) .'/images/about/about.png';

    ?>


		<div id="about" class="about">
                <div class="container">
                        <div class="row aboutIntro">
                                 <!-- START THE CONTENT FOR THE Description  -->
                                 <div class="col-md-6  text-start" >
                                        <h1 class="display-2">
                                                <span class="display-2--start"><?php echo $about_intro_sub_title; ?></span>
                                                <span class="display-2--intro"><?php echo $about_intro_title; ?></span>
                                                <div class="display-2--description lh-base about-sub-title">
					
													<?php echo $about_intro_desc; ?>
                                                </div>
                                        </h1>

                                        <div class="info">

										<?php
												if ( $settings['about_intro_lists'] ) {
												foreach (  $settings['about_intro_lists'] as $item ) {
											?>
                                                <div class="address">
                                                        <div class="left d-flex justify-content-center align-items-center">
														<i class="<?php echo $item['about_intro_list_icon']['value']; ?>"></i>
                                                        </div>        
                                                        <div class="right d-flex  align-items-center">
                                                        <p><?php echo $item['about_intro_list_title']; ?></p>
                                                        </div>
                                                        
                                                </div>       

                                               
												<?php
												}
											}
											?> 
                                               
                                        </div>
                                        
                                         <div class="about__action">
                                                 <a href="<?php echo $btn_link;?>" type="button" class="btn btn-primary rounded pt-3 pb-3"><?php echo $btn_text." " ;?><i class="fas fa-paper-plane"></i>
                                                        
                                                </a>
                                        </div>
                                       
                                       
                                </div>
                                <!-- START THE CONTENT FOR THE Graphics -->
                                <div class="col-md-6  illutration">
                                  
                                <img src="<?php echo $about_introImages; ?>" alt="video illutration"
                                        class="img-fluid">        
                                
                                       
                                </div>
                               
                                
                        </div>
                </div>
               
        </div>  



   


<?php
	}

}














