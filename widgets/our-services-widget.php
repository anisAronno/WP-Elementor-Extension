<?php
/**
 * Elementor Services Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Our_services_Widget extends \Elementor\Widget_Base {

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
		return 'Our Services';
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
		return __( 'Atl Our Services', 'atl-extension' );
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
			'services_title', [
				'label' => __( 'Services Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Services Title' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'services_desc', [
				'label' => __( 'Services Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Services Description' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'services_image', [
                'label' => __( 'Services Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
				'services_top_image', [
					'label' => __( 'Services Top Image', 'atl-extension' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'label_block' => true,
					'separator'=> 'before',
				]
			);

		$repeater = new \Elementor\Repeater();

        // services Options
        $this->add_control(
            'services_list_heading',
            [
                'label' => __( 'Left Services', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


	

		$repeater->add_control(
			'services_list_image', [
                'label' => __( 'Services Icon Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$repeater->add_control(
			'services_list_title', [
				'label' => __( 'Services List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'SOFTWARE DEVELOPMENT' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'services_list_desc', [
				'label' => __( 'Services List Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Our panel of Experienced teachers
                and their zenon certified teaching
                method will will compel you to' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'services_lists',
			[
				'label' => __( 'Services Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ services_list_title }}}',
			]
		);
       
     







        //Right Services List

        $repeater = new \Elementor\Repeater();

        // services Options
        $this->add_control(
            'services_list_right_heading',
            [
                'label' => __( 'Right Services', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


		$repeater->add_control(
			'services_list_right_image', [
                'label' => __( 'Services Icon Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$repeater->add_control(
			'services_list_right_title', [
				'label' => __( 'Services List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'SOFTWARE DEVELOPMENT' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'services_list_right_desc', [
				'label' => __( 'Services List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Our panel of Experienced teachers
                and their zenon certified teaching
                method will will compel you to' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'services_lists_right',
			[
				'label' => __( 'Services Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ services_list_right_title }}}',
			]
		);
       
        $this->end_controls_section();













		// Services Style Tab
        $this->start_controls_section(
			'services_intro_style_section',
			[
				'label' => __( 'Services Heading', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// Services Icon
		$this->add_control(
			'services_intro_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Services Title Color
         $this->add_control(
			'services_intro_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .our-services-title' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Services Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'services_intro_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .our-services-title',
			]
        );




		// Services Icon
		$this->add_control(
			'services_intro_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Services Title Color
         $this->add_control(
			'services_intro_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .our-services-desc' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Services Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'services_intro_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .our-services-desc',
			]
        );



		
        $this->end_controls_section();







		// Services Style Tab
        $this->start_controls_section(
			'services_style_section',
			[
				'label' => __( 'Services', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// Services Icon
		$this->add_control(
			'services_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Services Title Color
         $this->add_control(
			'services_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .services-list-title' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Services Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'services_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .services-list-title',
			]
        );




		// Services Icon
		$this->add_control(
			'services_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Services Title Color
         $this->add_control(
			'services_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .services-list-desc' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Services Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'services_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .services-list-desc',
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
		$services_title = $settings['services_title'];
		$services_desc = $settings['services_desc'];
		$services_image = $settings['services_image']['url'];
		$services_top_image = $settings['services_top_image']['url'];
    ?>
   



	<div id="services" class="services text-white " >
		<div class="container">
						<div class="row ">
								
								<!-- START THE CONTENT FOR THE Description  -->
								<div class="col-12 pb-5">
										<img class="shape-orange" src="<?php echo $services_top_image; ?>" alt="">
										<h1 class="display-2" id="custom-css">
												<span class="display-2--start our-services-title" ><?php echo $services_title; ?></span>
												<span class="display-2--intro our-services-desc"><?php echo $services_desc; ?> </span>
											
										</h1>       
								</div> 
						</div>
						
						<div class="row">

								<!-- services__leftbox is the main class -->
								<div class="col-12 col-lg-4 services_box services__leftbox d-flex flex-column justify-content-around">
								<?php
									if ( $settings['services_lists'] ) {
									foreach (  $settings['services_lists'] as $item ) {
								?>
									

										<div class="services__leftbox__content d-flex justify-content-between  ">
										<img src="<?php echo $item['services_list_image']['url']; ?>" alt="">    
											<div class="description">
													<div class="title services-list-title"><?php echo $item['services_list_title']; ?>
														</div>
													<div class="detail services-list-desc"><?php echo $item['services_list_desc']; ?></div>
											</div>    
										</div>
									
										<?php
									}
								}
								?>
								</div>

								<!-- middle image -->
								<div class="col-12 col-lg-4 ">
										<img class="img-fluid" src="<?php echo $services_image; ?>" alt="">
								</div>


								<!-- services__right is the main class -->
								<div class="col-12 col-lg-4 services_box services__rightbox d-flex flex-column justify-content-around">
									
								<?php
									if ( $settings['services_lists_right'] ) {
									foreach (  $settings['services_lists_right'] as $item ) {
								?>
										<div class="services__rightbox__content d-flex justify-content-between  ">
										<img src="<?php echo $item['services_list_right_image']['url']; ?>" alt="">    
											<div class="description">
													<div class="title services-list-title"> <?php echo $item['services_list_right_title']; ?></div>
													<div class="detail services-list-desc"><?php echo $item['services_list_right_desc']; ?></div>
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














