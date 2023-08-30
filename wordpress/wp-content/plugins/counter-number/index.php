<?php
/*
  Plugin Name: Counter Number
  Plugin URI: https://www.wordpress.org/downloads/counter-number-pro/
  Description: Counter Number Showcase is a powerful &amp; robust but easy to represent your services with grid and slider.
  Author: Sk Abul Hasan
  Author URI: http://www.servicebox.org/
  Version: 1.0
 */
if (!defined('ABSPATH'))
   exit;

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);   

define('con_6310_plugin_url', plugin_dir_path(__FILE__));
define('con_6310_plugin_dir_url', plugin_dir_url(__FILE__));
define ( 'con_6310_PLUGIN_CURRENT_VERSION', 1.0 ); 
   
add_shortcode('con_6310_counter_number', 'con_6310_counter_number_shortcode');

function con_6310_counter_number_shortcode($atts)
{
   extract(shortcode_atts(array('id' => ' ',), $atts));
   $ids = (int) $atts['id'];

   ob_start();
   include(con_6310_plugin_url . 'shortcode.php');
   return ob_get_clean();
}


add_action('admin_menu', 'con_6310_counter_number_menu');

function con_6310_counter_number_menu()
{
  $options = con_6310_get_user_roles();
   add_menu_page('Counter Number', 'Counter Number', $options, 'con-6310-counter-number', 'con_6310_home', 'dashicons-format-image', 20);
   add_submenu_page('con-6310-counter-number', 'Counter Number', 'All Counter Number',  $options, 'con-6310-counter-number', 'con_6310_home');
   add_submenu_page('con-6310-counter-number', 'Template 01-10', 'Template 01-10', $options, 'con-6310-template-01-10', 'con_6310_template_01_10');
   add_submenu_page('con-6310-counter-number', 'Template 11-20', 'Template 11-20', $options, 'con-6310-template-11-20', 'con_6310_template_11_20');
   add_submenu_page('con-6310-counter-number', 'Manage Items', 'Manage Items', $options, 'con-6310-counter-number-manage-items', 'con_6310_team_6310_manage_items');

   add_submenu_page('con-6310-counter-number', 'Import / Export Plugin', 'Import/Export Plugin', $options, 'con-6310-counter-number-import-export', 'con_6310_counter_number_6310_import_export');  

   add_submenu_page('con-6310-counter-number', 'License', 'License', $options, 'con-6310-counter-number-license', 'con_6310_counter_number_6310_lincense');
   add_submenu_page('con-6310-counter-number', 'How to use', 'How to use', $options, 'con-6310-counter-number-use', 'con_6310_counter_number_6310_how_to_use');
   add_submenu_page('con-6310-counter-number', 'WpMart Plugins', 'WpMart Plugins', $options, 'con-6310-wpmart-plugins', 'con_6310_wpmart_plugins');
}

function con_6310_home()
{
   global $wpdb;
   

   $style_table = $wpdb->prefix . 'con_6310_style';
   include con_6310_plugin_url . 'header.php';
   include con_6310_plugin_url . 'home.php';
}

include con_6310_plugin_url . 'template-menu.php';


add_action('wp_ajax_con_6310_team_member_info', 'con_6310_team_member_info');



if (is_admin()) {
   add_action('wp_ajax_con_6310_team_member_details', 'con_6310_team_member_details');
} else {
   add_action('wp_ajax_nopriv_con_6310_team_member_details', 'con_6310_team_member_details');
}

add_action('wp_ajax_nopriv_con_6310_team_member_details', 'con_6310_team_member_details');

register_activation_hook(__FILE__, 'con_6310_counter_number_install');
include_once(con_6310_plugin_url . 'functions.php');



function con_6310_activation_redirect( $plugin ) {
   if( $plugin == plugin_basename( __FILE__ ) ) {
       exit( wp_redirect( admin_url( 'admin.php?page=con-6310-counter-number-use' ) ) );
   }
}
add_action( 'activated_plugin', 'con_6310_activation_redirect' );

add_action( 'admin_enqueue_scripts', 'con_6310_link_css_js' );


function con_6310_plugin_update_check() {
   con_6310_version_status();
}
add_action('plugins_loaded', 'con_6310_plugin_update_check'); 

function con_6310_my_enqueue() {
   wp_enqueue_script('con-6310-ajax-script', plugins_url('assets/js/ajaxdata.js', __FILE__), array('jquery'), con_6310_PLUGIN_CURRENT_VERSION, true);
   wp_localize_script('con-6310-ajax-script', 'con_6310_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'con_6310_my_enqueue');

if (is_admin()) {
   add_action('wp_ajax_con_6310_save_data', 'con_6310_save_data');
} else {
   add_action('wp_ajax_nopriv_con_6310_save_data', 'con_6310_save_data');
}
add_action('wp_ajax_nopriv_con_6310_save_data', 'con_6310_save_data');
