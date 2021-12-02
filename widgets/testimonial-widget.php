<?php
/**
 * Elementor Testimonial Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Testimonial_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Testimonial widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Testimonial';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Testimonial widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Testimonial', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Testimonial widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return ' eicon-testimonial';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Testimonial widget belongs to.
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
	 * Register Testimonial widget controls.
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
			'testimonial_sub_title', [
				'label' => __( 'Testimonial Sub Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Latest Testimonial' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);


		$this->add_control(
			'testimonial_title', [
				'label' => __( 'Testimonial Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'What They Say About Our Company?' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'testimonial_desc', [
				'label' => __( 'Testimonial Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

	
		$repeater = new \Elementor\Repeater();

        // testimonial Options
        $this->add_control(
            'testimonial_list_heading',
            [
                'label' => __( 'Testimonial', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


		$repeater->add_control(
			'testimonial_image', [
                'label' => __( 'Profile Picture', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);


		$repeater->add_control(
			'testimonial_list_name', [
				'label' => __( 'Name', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Ani Gomez' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'testimonial_list_designation', [
				'label' => __( 'Designation', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Web Developer' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'testimonial_list_title', [
				'label' => __( 'Testimonial Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Words From Our Clients' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'testimonial_list_desc', [
				'label' => __( 'Testimonial Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Lorem ipsum dolor sit amet, consetetur 
				sadipscing elitr, sed diam nonumy eirmod 
				tempor invidunt ut labore et dolore magna 
				aliquyam erat, sed diam voluptua.' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'testimonial_lists',
			[
				'label' => __( 'Testimonial Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ testimonial_list_title }}}',
			]
		);
       
     
        $this->end_controls_section();





        // Title & Description Style Tab
        $this->start_controls_section(
			'title_style_section',
			[
				'label' => __( 'Title & Description', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

     

        // Title Options
		$this->add_control(
			'sub_title_heading',
			[
				'label' => __( 'Sub Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

        // Sub  Title Color
        $this->add_control(
			'sub_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#006AB2',
				'selectors' => [
					'{{WRAPPER}} #testimonials .display-2--start' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Sub Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sub_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} #testimonials .display-2--start',
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
                'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} #testimonials .display-2--intro' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} #testimonials .display-2--intro',
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
                'default' => '#7B7B7B',
				'selectors' => [
					'{{WRAPPER}} #testimonials p' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} #testimonials p',
			]
        );

		
        $this->end_controls_section();

	
	}

	/**
	 * Render Testimonial widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
		$testimonial_sub_title = $settings['testimonial_sub_title'];
		$testimonial_title = $settings['testimonial_title'];
		$testimonial_desc = $settings['testimonial_desc'];
    ?>
   


	<section id="testimonials" class="testimonials">
                <div class="container">
                        <div class="row" style="padding:10px;">
                                 <!-- START THE CONTENT FOR THE Graphics -->
                                 <div class="col-md-6  illutration order-1 order-md-0" style="background-image: url('<?php echo plugin_dir_url( dirname( __FILE__ ) ).'images/testimonials/testimonial.png';?>');    background-repeat: no-repeat; background-position: center; ">
								 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                               
											   <div class="carousel-inner">
													   <!-- CAROUSEL ITEM 1 -->
													   <?php
                    									    if ( $settings['testimonial_lists'] ) {
                    									    foreach (  $settings['testimonial_lists'] as $key=>$item ) {
																$active=" ";
																if($key==0){
																	$active="active";
																}
																
                    									?>
													   <div class="carousel-item <?php echo $active; ?> ">
															   <!-- testimonials card  -->
															   <div class="testimonials__card">
																	   <div class="testimonials__card--header">

																	   <?php echo $item['testimonial_list_title']; ?>

																	   </div>
																	   <div class="testimonials__card--body">
																	   <?php echo $item['testimonial_list_desc']; ?> 
																	   </div>
																	  

																	   <div class="testimonials__card--footer">
																			   
																			   <img src=" <?php echo  $item['testimonial_image']['url']; ?> " alt="">
																			   <div class="person">
																					   <span class="name"><?php echo  $item['testimonial_list_name']; ?></span>
																					   <span class="designation"><?php echo  $item['testimonial_list_designation']; ?></span>
																			   </div>
																			  
																			   
																	   </div>


																	   
															   </div>    
													   </div>
													   <?php
																}
															}
															?>
							
													  
													   
											   </div>
											   <div class="carousel-indicators">
													   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
													   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
													   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
											   </div>
									   </div>
                                </div>
                                <!-- START THE CONTENT FOR THE Description  -->
                                <div class="col-md-6 intros text-start">
                                        <h1 class="display-2 p-lg-5">
                                                <span class="display-2--start"><?php echo $testimonial_sub_title; ?></span>
                                                <span class="display-2--intro"><?php echo $testimonial_title; ?></span>
                                                <span class="display-2--description">
                                                        <p><?php echo $testimonial_desc; ?></p>
                                                </span>
                                        </h1>
                                       
                                       
                                       
                                </div>
                               
                        </div>
                </div>
               
        </section>  
<?php
	}

}



































