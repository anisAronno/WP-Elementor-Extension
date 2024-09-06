<?php

/**
 * Plugin Name: WP Elementor Extension
 * Plugin URI: https://anichur.com
 * Description: WP Elementor Extension
 * Version: 3.0.5
 * Author:  Anis Aronno
 * Author URI: https://anichur.com
 * Text Domain: atl-extension
 * Domain Path: /languages/
 * Requires at least: 5.9
 * Tested up to: 6.5
 * Requires PHP: 7.4
 * Requires PHP Architecture: 64 bits
 * Requires Plugins: elementor
 * WC requires at least: 6.9
 * WC tested up to: 8.9
 * Woo:
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

    $client = new Appsero\Client('5419e35b-c623-4c34-be39-cb6594e3289d', 'WP Elementor Extension Assets', __FILE__);

    // Active insights
    $client->insights()->add_plugin_data()->init();

    // Active automatic updater
    Appsero\Updater::init($client);

    // Active license page and checker
    $args = array(
        'type'       => 'options',
        'menu_title' => 'WP Elementor Extension Assets',
        'page_title' => 'WP Elementor Extension Settings',
        'menu_slug'  => 'atl_extension_settings',
    );
    $client->license()->add_settings_page($args);
}

appsero_init_tracker_atl_extension();


require_once(__DIR__ . '/atl-elementor-extension.php');
require_once(__DIR__ . '/social-icon.php');
