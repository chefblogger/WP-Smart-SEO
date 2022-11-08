<?php
/*
Plugin Name: WP Smart SEO
Plugin URI: http://www.chefblogger.me
Description: WP Smart SEO <a href="options-general.php?page=QWA_seomae">WP Smart SEO Administration</a>
Version: 1.4.10
Author: Eric-Oliver Mächler
Author URI: http://www.ericmaechler.com
Requires at least: 4.0.1
Tested up to: 6.0.1
Text Domain: wp-smart-seo
Domain Path: /languages
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


function my_plugin_init_wpsmartseo() {
    load_plugin_textdomain( 'wp-smart-seo', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
  }
  add_action('init', 'my_plugin_init_wpsmartseo');


include 'conf.php';

/* add meta box */
//include("error_field.php");

/* add meta box */
include("meta_box.php");

/* add meta box to category */
include("meta_box_category.php");


/* add meta to head section */
include("add_to_head.php");




function enqueue_styles_wpsmartseo() {
// Beispiel für ein Plugin
wp_enqueue_style( 'custom', plugins_url('css/wp-smart-seo.css',__FILE__), array(), 1.0, 'screen' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_styles_wpsmartseo');

function enqueue_admin_scripts_wpsmartseo() {
// Beispiel für ein Plugin
wp_enqueue_script( 'custom-script', plugins_url( 'js/wp-smart-seo.js', __FILE__ ), array( 'jquery' ), '1.0' );
}
	
add_action( 'admin_enqueue_scripts', 'enqueue_admin_scripts_wpsmartseo');

?>