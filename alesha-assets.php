<?php

/*
Plugin Name: Alesha Tech Assets
Plugin URI: https://www.aleshatech.net
Description: Alesha Tech Aseets
Version: 2.2.8
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
require __DIR__ . '/vendor/autoload.php';



/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_atl_extension()
{
    if (! class_exists('Appsero\Client')) {
        require_once __DIR__ . '/appsero/src/Client.php';
    }

    $client = new Appsero\Client('5419e35b-c623-4c34-be39-cb6594e3289d', 'Alesha Tech Assets', __FILE__);

    // Active insights
    $client->insights()->add_plugin_data()->init();

    // Active automatic updater
    $client->updater();

    // Active license page and checker
    $args = array(
        'type'       => 'options',
        'menu_title' => 'Alesha Tech Assets',
        'page_title' => 'Alesha Tech Assets Settings',
        'menu_slug'  => 'atl_extension_settings',
    );
    $client->license()->add_settings_page($args);
}

appsero_init_tracker_atl_extension();


require_once(__DIR__ . '/atl-elementor-extension.php');
require_once(__DIR__ . '/social-icon.php');
