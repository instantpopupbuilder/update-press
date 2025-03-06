<?php
/**
 * Plugin Name: Update Press
 * Plugin URI:  https://7thskysoftware.com/updatepress
 * Description: A professional plugin to showcase updates & announcements on your WordPress site.
 * Version: 1.0.1
 * Author: 7th Sky Software
 * Author URI: https://7thskysoftware.com
 * License: GPL v2 or later
 * Text Domain: updatepress
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Define constants
define('UPDATEPRESS_VERSION', '1.0.0');
define('UPDATEPRESS_PATH', plugin_dir_path(__FILE__));
define('UPDATEPRESS_URL', plugin_dir_url(__FILE__));

// Include necessary files
require_once UPDATEPRESS_PATH . 'includes/class-cpt.php';
require_once UPDATEPRESS_PATH . 'includes/class-admin.php';
require_once UPDATEPRESS_PATH . 'includes/class-frontend.php';
require_once UPDATEPRESS_PATH . 'includes/class-rest-api.php';
require_once UPDATEPRESS_PATH . 'includes/class-feedback.php';

// Plugin Activation Hook
function updatepress_activate() {
    UpdatePress_CPT::register_cpt();
    flush_rewrite_rules(); // Refresh permalinks
}
register_activation_hook(__FILE__, 'updatepress_activate');

// Plugin Deactivation Hook
function updatepress_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'updatepress_deactivate');

// Enqueue Frontend Scripts and Styles
function updatepress_enqueue_scripts() {
    // Register styles
    wp_register_style(
        'updatepress-floating-widget',
        UPDATEPRESS_URL . 'assets/css/updatepress-floating-widget.css',
        array(),
        UPDATEPRESS_VERSION
    );
    wp_enqueue_style('updatepress-floating-widget');

    // Register scripts
    wp_register_script(
        'updatepress-floating-widget',
        UPDATEPRESS_URL . 'assets/js/updatepress-floating-widget.js',
        array('jquery'),
        UPDATEPRESS_VERSION,
        true
    );
    wp_enqueue_script('updatepress-floating-widget');
}
add_action('wp_enqueue_scripts', 'updatepress_enqueue_scripts');

// Enqueue Admin Scripts and Styles
function updatepress_admin_enqueue_scripts($hook) {
    // Register and enqueue admin styles
    wp_register_style(
        'updatepress-admin-style',
        UPDATEPRESS_URL . 'assets/css/admin-style.css',
        array(),
        UPDATEPRESS_VERSION
    );
    wp_enqueue_style('updatepress-admin-style');

    // Register and enqueue admin scripts
    wp_register_script(
        'updatepress-admin-script',
        UPDATEPRESS_URL . 'assets/js/admin-script.js',
        array('jquery'),
        UPDATEPRESS_VERSION,
        true
    );
    wp_enqueue_script('updatepress-admin-script');
}
add_action('admin_enqueue_scripts', 'updatepress_admin_enqueue_scripts');