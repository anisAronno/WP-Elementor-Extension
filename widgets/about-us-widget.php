<?php
/**
 * Elementor Bannar Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class About_us_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bannar widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'About Content';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bannar widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl About Content', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bannar widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-image';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bannar widget belongs to.
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
	 * Register Bannar widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'about_content_section',
			[
				'label' => __( 'Content', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        // Sub Heading
		$this->add_control(
			'about_image',
			[
				'label' => __( 'About Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
			]
        );
        
        // Sub Heading
		$this->add_control(
			'about_sub_heading',
			[
				'label' => __( 'Sub Heading', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
				'placeholder' => __( 'Write Sub Heading Here', 'atl-extension' ),
				'default' => 'IT Consulting & Desig',
			]
        );
        
        // Heading
		$this->add_control(
			'about_heading',
			[
				'label' => __( 'Heading', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Heading Here', 'atl-extension' ),
				'default' => 'Digital Ecosystem is the Future Life',
			]
        );
        
        // Description
		$this->add_control(
			'about_description',
			[
				'label' => __( 'Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Description Here', 'atl-extension' ),
				'default' => 'Change your business to a ecosystem that grows naturall',
			]
        );
        
        // Video  Title
		$this->add_control(
			'about_video_title',
			[
				'label' => __( 'Video Text', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'default' => 'See how we work',
			]
        );
        
        // Video  Link
		$this->add_control(
			'about_video_link',
			[
				'label' => __( 'Video  Link', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Write Video Linke Here', 'atl-extension' ),
			]
        );
        
    

        $this->end_controls_section();

        // Style Tab
        $this->start_controls_section(
			'about_style_section',
			[
				'label' => __( 'Styles', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

        // Subtitle Options
		$this->add_control(
			'about_subtitle_heading',
			[
				'label' => __( 'Sub Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        // Sub Title Color
        $this->add_control(
			'about_subtitle_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#316AB2',
				'selectors' => [
					'{{WRAPPER}}  #who_we_are .aboutSubheading' => 'color: {{VALUE}} !important',
				],
			]
        );
        
        // Subtitle Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_subtitle_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} #who_we_are .aboutSubheading',
			]
        );
        
        // Title Options
		$this->add_control(
			'about_title_heading',
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
					'{{WRAPPER}} #who_we_are .aboutHeading' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} #who_we_are .aboutHeading',
			]
        );
        
        // Description Options
		$this->add_control(
			'about_desc_heading',
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
					'{{WRAPPER}}  #who_we_are .aboutDescription' => 'color: {{VALUE}}',
				],
			]
        );
        
        // Description Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}}  #who_we_are .aboutDescription',
			]
        );
        
        // Video  Options
		$this->add_control(
			'about_video_heading',
			[
				'label' => __( 'Video', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
        );
        
        $this->start_controls_tabs(
			'about_video_style_tabs'
        );
        
     

        // Video  Color
        $this->add_control(
			'about_video_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#006AB2',
				'selectors' => [
					'{{WRAPPER}}   #who_we_are .video-link ' => 'color: {{VALUE}} !important',
				],
			]
        );

        // Video  Background Color
        $this->add_control(
			'about_video_background',
			[
				'label' => __( 'Background Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} #who_we_are .video-link ' => 'background-color: {{VALUE}} !important',
				],
			]
        );
        
  


        $this->end_controls_tab();

      
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
	}

	/**
	 * Render Bannar widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
        $aboutImage = $settings['about_image']['url'];
        $aboutSub_heading = $settings['about_sub_heading'];
        $aboutHeading = $settings['about_heading'];
        $aboutDescription = $settings['about_description'];
        $video_title = $settings['about_video_title'];
        $video_link = $settings['about_video_link']['url'];
    ?>
 

 <section id="who_we_are" class="who_we_are">
                <div class="container">
                        <div class="row align-items-center text-white">
                                <!-- START THE CONTENT FOR THE Description  -->
                                <div class="col-md-6 intros text-start">
                                        <h1 class="display-2">
                                                <span class="display-2--start aboutSubheading"><?php echo $aboutSub_heading; ?></span>
                                                <span class="display-2--intro aboutHeading"><?php echo $aboutHeading; ?></span>
                                                <span class="display-2--description lh-base aboutDescription">
												<?php echo $aboutDescription; ?>
                                                </span>
                                        </h1>
                                       
                                        <div class="video-box">
                                                
                                                <a href="<?php echo $video_link; ?>"
                                                        class="glightbox d-none d-md-block ">
                                                        
                                                        <span>
                                                                <i class="fas fa-play-circle"></i>
                                                        </span>
                                                        <span class="border-animation border-animation--border-1"></span>
                                                        <span class="border-animation border-animation--border-2"></span>
                                                        <span class=" video-link "><?php echo $video_title; ?></span>
                                                </a>
                                        </div>

									
										
                                       
                                </div>
                                <!-- START THE CONTENT FOR THE Graphics -->
                                <div class="col-md-6 intros text-end illutration">
                                        <div class="video-box">
										<?php 
										
										$aboutImages=$aboutImage ? $aboutImage: plugin_dir_url( dirname( __FILE__ ) ) .'/images/about_us_image.svg';
									?>
                                                <img src="<?php echo $aboutImages; ?>" alt="video illutration"
                                                        class="img-fluid animated-topup">
                                                        <a href="<?php echo $video_link; ?>"
                                                        class="glightbox position-absolute start-50 top-50 d-block d-md-none">
                                                        
                                                        <span >
                                                                <i class="far fa-play-circle text-primary "></i>
                                                        </span>
                                                        <span class="border-animation border-animation--border-1 border-primary "></span>
                                                        <span class="border-animation border-animation--border-2 border-primary"></span>
                                                        <span class=" video-link d-none ">See how we work</span>
                                                </a>
                                                
                                        </div>
                                </div>
                        </div>
                </div>
               
        </section> 
        

<?php
	}

}