<?php
/**
 * Elementor Counter Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Alesha_Counter_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Counter widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Alesha Counter';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Counter widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Counter', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Counter widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-number-field';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Counter widget belongs to.
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
	 * Register Counter widget controls.
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
			'counter_list_number', [
				'label' => __( 'Counter List Number', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => __( '1000' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'counter_list_title', [
				'label' => __( 'Counter List Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Project Finished' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'counter_lists',
			[
				'label' => __( 'Counters Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ counter_list_title }}}',
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
					'{{WRAPPER}} .counter' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .counter .counter__title',
			]
        );
        
      
        
	}

	/**
	 * Render Counter widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
    ?>
   
			<section id="counter" class="counter">
                <div class="container">
                        <div class="row row-cols-2 row-cols-md-4 g-4">

						<?php
							if ( $settings['counter_lists'] ) {
							foreach (  $settings['counter_lists'] as $item ) {
						?>

                                <div class="col">
                                        <div class="counter__count"><?php echo $item['counter_list_number']; ?></div>
                                        
                                        <div class="counter__title"><?php echo $item['counter_list_title']; ?></div>
                                </div>


								<?php
							}
						}
						?>
                               
                        </div>
                </div>
        </section>        
		
<?php
	}

}