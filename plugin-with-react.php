<?php
/* 0 BootStrapping of the Plugin
Plugin Name: Plugin With React JS
Author: Risal Shahed
Author URI: https://github.com/risalshahed
Version: 1.0.0
Description: A simple WordPress plugin that uses React.
*/

if( ! defined( 'ABSPATH' ) ) : exit(); endif;

/**
 * 1 Define Plugins Constants
*/
define( 'WPWR_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'WPWR_URL', trailingslashit( plugins_url( '/', __FILE__ ) ) );

// 2.1.1 Action hook (along with function) for a Widget in Dashboard
function new_dashboard_setup() {
  wp_add_dashboard_widget(
    'new_dashboard_widget',
    'New Graph Widget',
    'new_dashboard_widget_callback'
  );
}

/**
 * 2.1.2 Callback function for the widget
*/
function new_dashboard_widget_callback() {
  echo "<div id='new-dashboard-widget'></div>";
}


// 2.1 The Action Hook
add_action( 'wp_dashboard_setup', 'new_dashboard_setup' );