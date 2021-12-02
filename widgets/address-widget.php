<?php
/**
 * Elementor Address Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Address_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Address widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Address';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Address widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Atl Address', 'atl-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Address widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-mail';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Address widget belongs to.
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
	 * Register Address widget controls.
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
			'address_title', [
				'label' => __( 'Address Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Get In Touch' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'address_desc', [
				'label' => __( 'Address Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'We Provide Best Services. Need Help?' , 'atl-extension' ),
				'label_block' => true,
                'separator'=> 'before',
			]
		);

		$this->add_control(
			'address_image', [
                'label' => __( 'Address Image', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'=> 'before',
			]
		);

	
		$repeater = new \Elementor\Repeater();

        // address Options
        $this->add_control(
            'address_list_heading',
            [
                'label' => __( 'Left Address', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );


	

		$repeater->add_control(
			'address_list_icon',
			[
				'label' => __( 'Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		$repeater->add_control(
			'address_list_title', [
				'label' => __( 'Address Title', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Location' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'address_list_desc', [
				'label' => __( 'Address Description', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'Assurance Nazir Tower (5th Floor) 65/B, Kemal Ataturk Avenue, Banani, Dhaka-1213
				1213 Dhaka, Dhaka Division, Bangladesh' , 'atl-extension' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'address_lists',
			[
				'label' => __( 'Address Lists', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ address_list_title }}}',
			]
		);
       

		$this->end_controls_section();


		// Address Style Tab
        $this->start_controls_section(
			'address_intro_style_section',
			[
				'label' => __( 'Address Heading', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// Address Icon
		$this->add_control(
			'address_intro_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Address Title Color
         $this->add_control(
			'address_intro_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#1476B8',
				'selectors' => [
					'{{WRAPPER}} .contact_address .display-2--start' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Address Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'address_intro_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .contact_address .display-2--start ',
			]
        );




		// Address Icon
		$this->add_control(
			'address_intro_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Address Title Color
         $this->add_control(
			'address_intro_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#292929',
				'selectors' => [
					'{{WRAPPER}} .contact_address .display-2--intro ' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Address Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'address_intro_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .contact_address .display-2--intro ',
			]
        );



		
        $this->end_controls_section();







		// Address Style Tab
        $this->start_controls_section(
			'address_style_section',
			[
				'label' => __( 'Address', 'atl-extension' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );

	
        

		// icon Options
		$this->add_control(
			'address_icon_style',
			[
				'label' => __( 'Icon', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		// icon Background Color
		$this->add_control(
			'address_icon_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
				],
				'default' => '#006AB2',
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .contact_address i' => 'color: {{VALUE}}',
				],
			]
		);









		// Address Title
		$this->add_control(
			'address_title_heading',
			[
				'label' => __( 'Title', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Address Title Color
         $this->add_control(
			'address_title_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#212529',
				'selectors' => [
					'{{WRAPPER}} .address-list-title' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Address Title Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'address_title_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .address-list-title',
			]
        );




		// Address Description
		$this->add_control(
			'address_desc_heading',
			[
				'label' => __( 'Description', 'atl-extension' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
			]
		);

         // Address Description Color
         $this->add_control(
			'address_desc_color',
			[
				'label' => __( 'Color', 'atl-extension' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Core\Schemes\Color::get_type(),
					'value' => \Elementor\Core\Schemes\Color::COLOR_1,
                ],
                'default' => '#212529',
				'selectors' => [
					'{{WRAPPER}} .address-list-desc' => 'color: {{VALUE}}',
				],
			]
        );
        
        //  Address Description Typography 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'address_desc_typography',
				'label' => __( 'Typography', 'atl-extension' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .address-list-desc',
			]
        );



        $this->end_controls_section();
	}

	/**
	 * Render Address widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

        $settings = $this->get_settings_for_display();
		$address_title = $settings['address_title'];
		$address_desc = $settings['address_desc'];
		$address_image = $settings['address_image']['url'];
		$addressImages= $address_image ? $address_image: plugin_dir_url( dirname( __FILE__ ) ) .'/images/contact/contact.png';

    ?>
   

   <div id="contact_address" class="contact_address">
                <div class="container">
                        <div class="row ">
                                <!-- START THE CONTENT FOR THE Graphics -->
                                <div class="col-md-7  illutration">
                                  
                                		<img src="<?php echo $addressImages; ?>" alt="video illutration"
                                        class="img-fluid">        
                                
                                       
                                </div>
                                <!-- START THE CONTENT FOR THE Description  -->
                                <div class="col-md-5  text-start pt-2" >
                                        <h1 class="display-2">
                                                <span class="display-2--start pt-1"><?php echo $address_title; ?></span>
                                                <span class="display-2--intro"><?php echo $address_desc; ?></span>
                                              
                                        </h1>

                                        <div class="info">
											<?php
												if ( $settings['address_lists'] ) {
												foreach (  $settings['address_lists'] as $item ) {
											?>
                                                <div class="address pt-1">
                                                        <div class="left d-flex justify-content-center align-items-center">
                                                                <i class="<?php echo $item['address_list_icon']['value']; ?>"></i>
                                                        </div>        
                                                        <div class="right">
                                                        <h5 class="address-list-title"> <?php echo $item['address_list_title']; ?></h5>
                                                        <p class="address-list-desc"><?php echo $item['address_list_desc']; ?>
                                                        </p>
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














