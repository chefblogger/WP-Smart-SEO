<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 include 'admin-form.php';
 function save_seomae() {
  adminForm_seomae();
 }

/*
 function QWA_seomae() {
  add_options_page('Quick WhatsApp', 'Quick WhatsApp', 1, 'QWA_seomae', 'save_seomae');
 }
 add_action('admin_menu', 'QWA_seomae');
*/





function QWA_seomae() {
	add_options_page('WP Smart SEO', 'WP Smart SEO', 'manage_options', 'QWA_seomae', 'save_seomae');
}
add_action( 'admin_menu', 'QWA_seomae' );
?>