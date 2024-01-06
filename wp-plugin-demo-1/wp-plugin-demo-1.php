<?php
/**
 * Plugin Name: WPpluginDemo1
 * Plugin URI: http://example.com/plugin
 * Description: A demo WordPress plugin with a floating Pi-Sign.
 * Version: 1.0.0
 * Author: Your Name // INPUT_REQUIRED {Your name goes here}
 * Author URI: http://example.com // INPUT_REQUIRED {Your personal or company website URI goes here}
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Register Activation and Deactivation Hooks
register_activation_hook( __FILE__, 'wpplugindemo1_activate' );
register_deactivation_hook( __FILE__, 'wpplugindemo1_deactivate' );

/**
 * Function to execute during plugin activation
 */
function wpplugindemo1_activate() {
    // Activation code here (if necessary).
}

/**
 * Function to execute during plugin deactivation
 */
function wpplugindemo1_deactivate() {
    // Deactivation code here (if necessary).
}

/**
 * Plugin Initialization
 */
function wpplugindemo1_init() {
    // Initialization code here (if necessary).
}
add_action( 'plugins_loaded', 'wpplugindemo1_init' );

/**
 * Enqueue plugin styles.
 */
function wpplugindemo1_enqueue_styles() {
    wp_enqueue_style('wpplugindemo1-style', plugins_url('/assets/css/style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'wpplugindemo1_enqueue_styles');

/**
 * Enqueue plugin scripts.
 */
function wpplugindemo1_enqueue_scripts() {
    wp_enqueue_script('wpplugindemo1-script', plugins_url('/assets/js/pi-sign.js', __FILE__), array(), false, true);
}
add_action('wp_enqueue_scripts', 'wpplugindemo1_enqueue_scripts');

/**
 * Adds the Pi-Sign to the footer of all pages.
 */
function wpplugindemo1_add_pi_sign() {
    echo '<div class="pi-sign">&pi;</div>';
}
add_action('wp_footer', 'wpplugindemo1_add_pi_sign');


