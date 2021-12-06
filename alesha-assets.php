<?php

/*
Plugin Name: Alesha Tech Assets
Plugin URI: https://www.aleshatech.net
Description: Alesha Tech Aseets
Version: 1.0.0
Author: Alesha Tech
Author URI: https://www.aleshatech.net
License: GPLv2 or later
Text Domain: atl-extension
Domain Path: /languages/
*/


/**
 * Initialize the plugin tracker
 *
 * @return void
 */

/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_atl_extension() {

    if ( ! class_exists( 'Appsero\Client' ) ) {
      require_once __DIR__ . '/appsero/src/Client.php';
    }

    $client = new Appsero\Client( 'ea7e7b26-b1bb-4d8e-951b-c8699bb88103', 'atl-extension', __FILE__ );

    // Active insights
    $client->insights()->init();

    // Active automatic updater
    $client->updater();

    // Active license page and checker
    $args = array(
        'type'       => 'options',
        'menu_title' => 'atl-extension',
        'page_title' => 'atl-extension Settings',
        'menu_slug'  => 'atl_extension_settings',
    );
    $client->license()->add_settings_page( $args );

}


appsero_init_tracker_atl_extension();


require_once( __DIR__ . '/atl-elementor-extension.php' );
require_once( __DIR__ . '/social-icon.php' );


