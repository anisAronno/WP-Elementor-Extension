<?php
/**
 * Elementor Heading Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Heading_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Heading widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'heaidng';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Heading', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Heading widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-heading';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Heading widget belongs to.
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
	 * Register Heading widget controls.
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
			'main_sub_heading',
			[
				'label' => __( 'Sub Heading', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
				'placeholder' => __( 'Write Sub Heading Here', 'atl-extension' ),
				'default' => 'Our Featured Services',
			]
        );
        
        // Heading
		$this->add_control(
			'main_heading',
			[
				'label' => __( 'Heading', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Heading Here', 'atl-extension' ),
				'default' => 'Bringing New IT Business Solutions And Ideas',
				]
			);
			
			// Description
			$this->add_control(
				'main_description',
				[
					'label' => __( 'Description', 'atl-extension' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'label_block' => true,
					'separator'=> 'before',
					'placeholder' => __( 'Write Description Here', 'atl-extension' ),
					'default' => 'Lorem ipsum dolor sit amet, consectetuer </br> Lorem ipsum dolor sit amet.',
			]
        );

		$this->add_control(
			'main_heading_align',
			[
				'label' => __( 'Alignment', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'atl-extension' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'atl-extension' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'atl-extension' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .section-title' => 'text-align: {{VALUE}};',
				],
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
                'default' => '#2F0E85',
				'selectors' => [
					'{{WRAPPER}} .section-title h5' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .section-title h5',
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
                'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .section-title h3' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .section-title h3',
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
                'default' => '#333',
				'selectors' => [
					'{{WRAPPER}} .section-title p' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .section-title p',
			]
        );

		// Border Options
		$this->add_control(
			'border_heading',
			[
				'label' => __( 'Border', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

		// Border 1 Background Color
        $this->add_control(
			'border1_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#777',
				'selectors' => [
					'{{WRAPPER}} .section-title h3::before' => 'background-color: {{VALUE}}',
				],
			]
        );

		// Border 2 Background Color
        $this->add_control(
			'border2_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#FF4A33',
				'selectors' => [
					'{{WRAPPER}} .section-title h3::after' => 'background-color: {{VALUE}}',
				],
			]
        );

        $this->end_controls_section();
	}

	/**
	 * Render Heading widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
        $main_sub_heading = $settings['main_sub_heading'];
        $main_heading = $settings['main_heading'];
        $main_description = $settings['main_description'];
    ?>
    <div class="section-title">
		<h5><?php echo $main_sub_heading; ?></h5>
		<h3><?php echo $main_heading; ?></h3>
		<p><?php echo $main_description; ?></p>
	</div>
<?php
	}

}