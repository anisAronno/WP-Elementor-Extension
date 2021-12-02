<?php
/**
 * Elementor Bannar Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Bannar_Widget extends \Elementor\Widget_Base {

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
		return 'bannar';
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
		return __( 'Atl Bannar', 'atl-extension' );
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
			'content_section',
			[
				'label' => __( 'Content', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        // Sub Heading
		$this->add_control(
			'banner_image',
			[
				'label' => __( 'Banner Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
			]
        );
        
        // Sub Heading
		$this->add_control(
			'sub_heading',
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
			'heading',
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
			'description',
			[
				'label' => __( 'Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Description Here', 'atl-extension' ),
				'default' => 'Change your business to a ecosystem that grows naturall',
			]
        );
        
        // Button  Title
		$this->add_control(
			'btn1_title',
			[
				'label' => __( 'Button Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Button Title Here ', 'atl-extension' ),
				'default' => 'Click Here',
			]
        );
        
        // Button  Link
		$this->add_control(
			'btn1_link',
			[
				'label' => __( 'Button  Link', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Write Button Linke Here', 'atl-extension' ),
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

        // Subtitle Options
		$this->add_control(
			'subtitle_heading',
			[
				'label' => __( 'Sub Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

        // Sub Title Color
        $this->add_control(
			'subtitle_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}}  #home  h1 .display-2--start' => 'color: {{VALUE}} !important',
				],
			]
        );
        
        // Subtitle Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}}  #home .display-2--start',
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
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}}  #home  .display-2--intro' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}}  #home  .display-2--intro',
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
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}}  #home  .display-2--description' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}}  #home  display-2--description',
			]
        );
        
        // Button  Options
		$this->add_control(
			'btn1_heading',
			[
				'label' => __( 'Button ', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
        );
        
        $this->start_controls_tabs(
			'btn1_style_tabs'
        );
        
        // Normal Style Tab
        $this->start_controls_tab(
			'btn1_style_normal_tab',
			[
				'label' => __( 'Normal', 'atl-extension' ),
			]
        );

        // Button  Color
        $this->add_control(
			'btn1_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}}  #home .box-btn' => 'color: {{VALUE}}',
				],
			]
        );

        // Button  Background Color
        $this->add_control(
			'btn1_background',
			[
				'label' => __( 'Background Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => 'tomato',
				'selectors' => [
					'{{WRAPPER}}  #home .box-btn' => 'background-color: {{VALUE}}',
				],
			]
        );
        
        // Button  Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn1_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}}  #home .box-btn',
			]
        );

        // Button  Padding 
        $this->add_control(
			'btn1_padding',
			[
				'label' => __( 'Padding', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  #home .box-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );
        
        // Button  Border Radius 
        $this->add_control(
			'btn1_border_radius',
			[
				'label' => __( 'Border Radius', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  #home .box-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


        $this->end_controls_tab();

        // Hover Style Tab
        $this->start_controls_tab(
			'btn1_style_hover_tab',
			[
				'label' => __( 'Hover', 'atl-extension' ),
			]
        );

        // Button  Hover Color
        $this->add_control(
			'btn1_hover_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}}  #home .box-btn:hover' => 'color: {{VALUE}}',
				],
			]
        );

        // Button  Hover Background Color
        $this->add_control(
			'btn1_hover_background',
			[
				'label' => __( 'Background Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}}  #home .btn-rounded:hover' => 'background-color: {{VALUE}} !important',
				],
			]
        );

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
        $bannerImage = $settings['banner_image']['url'];
        $sub_heading = $settings['sub_heading'];
        $heading = $settings['heading'];
        $description = $settings['description'];
        $btn1_title = $settings['btn1_title'];
        $btn1_link = $settings['btn1_link']['url'];
    ?>
 

	<section id="home" class="intro-section">
                <div class="container ">
                        <div class="row align-items-center text-white ">
                                <!-- START THE CONTENT FOR THE INTRO  -->
                                <div class="col-md-6 intros text-start">
                                        <h1 class="display-2">
                                                <span class="display-2--start"><?php echo $sub_heading;?> </span>
                                                <span class="display-2--intro"> <?php echo $heading; ?></span>
                                                <span class="display-2--description lh-base">
												<?php echo $description?>
                                                </span>
                                        </h1>
                                        <a href="<?php echo $btn1_link;?>" class="text-decoration-none">
                                                <button type="button" class="rounded-pill btn-rounded box-btn"><?php echo $btn1_title;?>
                                                        <span><i class="fas fa-arrow-right"></i></span>
                                                </button>
                                        </a>
                                </div>
                                <!-- START THE CONTENT FOR THE VIDEO -->
                                <div class="col-md-6 intros text-end">
                                        <div class="video-box">
											<?php 
										
												$images=$bannerImage ? $bannerImage: plugin_dir_url( dirname( __FILE__ ) ) .'/images/intro-section-illustration.svg'; 
											?>
                                                <img src="<?php echo $images;?>" alt="video illutration"
                                                        class="img-fluid  animated-topup">
                                                
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        

<?php
	}

}