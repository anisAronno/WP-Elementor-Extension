<?php
/**
 * Elementor Projects Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Projects_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Projects widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'projects';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Projects widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Projects', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Projects widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-frame-expand';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Projects widget belongs to.
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
	 * Register Projects widget controls.
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

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'project_main_image',
			[
				'label' => __( 'Project Main Image', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Choose Project Main Image', 'atl-extension' ),
			]
		);

		$repeater->add_control(
			'project_big_image',
			[
				'label' => __( 'Project Big Image', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Choose Project Big Image', 'atl-extension' ),
			]
		);

		$repeater->add_control(
			'project_title', [
				'label' => __( 'Project Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Project Title' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'project_cat', [
				'label' => __( 'Project Category', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Project Category' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'projects_list',
			[
				'label' => __( 'Projectss List', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ project_title }}}',
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
                'default' => '#777',
				'selectors' => [
					'{{WRAPPER}} .section-title h4' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .section-title h4',
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
					'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .section-title h2',
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
					'{{WRAPPER}} .section-title h2::before' => 'background-color: {{VALUE}}',
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
                'default' => '#e16038',
				'selectors' => [
					'{{WRAPPER}} .section-title h2::after' => 'background-color: {{VALUE}}',
				],
			]
        );

        $this->end_controls_section();
	}

	/**
	 * Render Projects widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
    ?>
    <div class="row no-gutters">

		<?php
			if ( $settings['projects_list'] ) {
				foreach (  $settings['projects_list'] as $item ) {
		?>
		<div class="col-md-4">
			<div class="single-portfolio">
				<img src="<?php echo $item['project_main_image']['url'];?>" alt="">
				<div class="portfolio-hover">
					<div class="portfolio-content">
						<h3><a href="<?php echo $item['project_big_image']['url'];?>"><i class="eicon-plus-circle-o"></i> <?php echo $item['project_title'];?> <span><?php echo $item['project_cat'];?></span></a></h3>
					</div>
				</div>
			</div>
		</div>
		<?php
				}
			}
		?>
	</div>
<?php
	}

}