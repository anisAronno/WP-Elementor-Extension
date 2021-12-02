<?php
/**
 * Elementor Solution Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Solutions_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Solution widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Solutions';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Solution widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Solutions', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Solution widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-search-results';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Solution widget belongs to.
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
	 * Register Solution widget controls.
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
			'solution_title', [
				'label' => __( 'Solution Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Solution Title' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'solution_desc', [
				'label' => __( 'Solution Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Solution Description' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'solution_image', [
                'label' => __( 'Solution Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
				'solution_top_image', [
					'label' => __( 'Solution Top Image', 'atl-extension' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'label_block' => true,
					'separator'=> 'before',
				]
			);

		$repeater = new \Elementor\Repeater();

        // solution Options
        $this->add_control(
            'solution_list_heading',
            [
                'label' => __( 'Left Solution', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


	

		$repeater->add_control(
			'solution_list_image', [
                'label' => __( 'Solution Icon Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$repeater->add_control(
			'solution_list_title', [
				'label' => __( 'Solution List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'SOFTWARE DEVELOPMENT' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'solution_list_desc', [
				'label' => __( 'Solution List Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Our panel of Experienced teachers
                and their zenon certified teaching
                method will will compel you to' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'solution_lists',
			[
				'label' => __( 'Solution Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ solution_list_title }}}',
			]
		);
       
     







        //Right Solution List

        $repeater = new \Elementor\Repeater();

        // solution Options
        $this->add_control(
            'solution_list_right_heading',
            [
                'label' => __( 'Right Solution', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


		$repeater->add_control(
			'solution_list_right_image', [
                'label' => __( 'Solution Icon Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

		$repeater->add_control(
			'solution_list_right_title', [
				'label' => __( 'Solution List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'SOFTWARE DEVELOPMENT' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'solution_list_right_desc', [
				'label' => __( 'Solution List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Our panel of Experienced teachers
                and their zenon certified teaching
                method will will compel you to' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'solution_lists_right',
			[
				'label' => __( 'Solution Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ solution_list_right_title }}}',
			]
		);
       
        $this->end_controls_section();













		// Solution Style Tab
        $this->start_controls_section(
			'solution_intro_style_section',
			[
				'label' => __( 'Solution Heading', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// Solution Icon
		$this->add_control(
			'solution_intro_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Solution Title Color
         $this->add_control(
			'solution_intro_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .our-solution-title' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Solution Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'solution_intro_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .our-solution-title',
			]
        );




		// Solution Icon
		$this->add_control(
			'solution_intro_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Solution Title Color
         $this->add_control(
			'solution_intro_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .our-solution-desc' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Solution Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'solution_intro_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .our-solution-desc',
			]
        );



		
        $this->end_controls_section();







		// Solution Style Tab
        $this->start_controls_section(
			'solution_style_section',
			[
				'label' => __( 'Solution', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// Solution Icon
		$this->add_control(
			'solution_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Solution Title Color
         $this->add_control(
			'solution_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .solution-list-title' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Solution Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'solution_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .solution-list-title',
			]
        );




		// Solution Icon
		$this->add_control(
			'solution_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Solution Title Color
         $this->add_control(
			'solution_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .solution-list-desc' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Solution Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'solution_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .solution-list-desc',
			]
        );



        $this->end_controls_section();
	}

	/**
	 * Render Solution widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
		$solution_title = $settings['solution_title'];
		$solution_desc = $settings['solution_desc'];
		$solution_image = $settings['solution_image']['url'];
		$solution_top_image = $settings['solution_top_image']['url'];
    ?>
   



	<div id="services" class="services text-white " >
		<div class="container">
						<div class="row ">
								
								<!-- START THE CONTENT FOR THE Description  -->
								<img class="shape-orange animated-topup" 
                                         src="<?php echo $solution_top_image; ?>" alt="">
								<div class="col-12 pb-5">
										<h1 class="display-2" id="custom-css">
												<span class="display-2--start our-solution-title" ><?php echo $solution_title; ?></span>
												<span class="display-2--intro our-solution-desc"><?php echo $solution_desc; ?> </span>
											
										</h1>       
								</div> 
						</div>
						
						<div class="row">

								<!-- solution__leftbox is the main class -->
								<div class="col-12 col-lg-4 services_box services__leftbox d-flex flex-column justify-content-around ">
								<?php
									if ( $settings['solution_lists'] ) {
									foreach (  $settings['solution_lists'] as $item ) {
								?>
									

										<div class="solution__leftbox__content d-flex justify-content-between  align-items-center align-items-md-start scale-up">
										<img src="<?php echo $item['solution_list_image']['url']; ?>" alt="">    
											<div class="description">
													<div class="title services-list-title"><?php echo $item['solution_list_title']; ?>
														</div>
													<div class="detail services-list-desc"><?php echo $item['solution_list_desc']; ?></div>
											</div>    
										</div>
									
										<?php
									}
								}
								?>
								</div>

								<!-- middle image -->
								<div class="col-12 col-lg-4 ">
										<img class="img-fluid"  data-aos="zoom-in" data-aos-duration="1500"  src="<?php echo $solution_image; ?>" alt="">
								</div>


								<!-- solution__right is the main class -->
								<div class="col-12 col-lg-4 services_box services__rightbox d-flex flex-column justify-content-around">
									
								<?php
									if ( $settings['solution_lists_right'] ) {
									foreach (  $settings['solution_lists_right'] as $item ) {
								?>
										<div class="services__rightbox__content d-flex justify-content-between align-items-center align-items-md-start scale-up ">
										<img src="<?php echo $item['solution_list_right_image']['url']; ?>" alt="">    
											<div class="description">
													<div class="title services-list-title"> <?php echo $item['solution_list_right_title']; ?></div>
													<div class="detail services-list-desc"><?php echo $item['solution_list_right_desc']; ?></div>
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














