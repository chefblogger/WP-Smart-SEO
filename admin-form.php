<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* --------------------------------------------------------------------------------------------------------------------------------------- */
 function adminForm_seomae() {
	 
//$buttondesign1 = '<img src="' . plugins_url( 'images/whatsapp-chat.jpg', __FILE__ ) . '" >';

?>
<div class="wrap">
<h2>WP Smart SEO</h2>
<p><?php _e( 'A little SEO plugin, which generate Metatags for each Post or Page:', 'wp-smart-seo' ); ?></p>
<p>
<ul>
<li><?php _e( 'og:type', 'wp-smart-seo' ); ?></li>
<li><?php _e( 'og:title', 'wp-smart-seo' ); ?></li>
<li><?php _e( 'og:description', 'wp-smart-seo' ); ?></li>
<li><?php _e( 'og:image', 'wp-smart-seo' ); ?></li>
<li><?php _e( 'twitter:title', 'wp-smart-seo' ); ?></li>
<li><?php _e( 'twitter:description', 'wp-smart-seo' ); ?></li>
<li><?php _e( 'twitter:image', 'wp-smart-seo' ); ?></li>
</ul>
</p>


<hr />
<?php
	 
/*------nonce field check start ---- */
/* globales text field */
if (isset($_REQUEST['seomae_global_seo_text_submit'])) {

  if ( 
    ! isset( $_POST['nonce_seomaeglobalseotext'] ) 
    || ! wp_verify_nonce( $_POST['nonce_seomaeglobalseotext'], 'nonce_seomaeglobalseotext_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_seomae_globalestextfield();
  			}
			
  }			
/*------nonce field check end ---- */  

/*------nonce field check start ---- */
/* check wpseo */
if (isset($_REQUEST['seomae_oldseoplug_submit'])) {

	if ( 
	  ! isset( $_POST['nonce_seomaoldseoplug'] ) 
	  || ! wp_verify_nonce( $_POST['nonce_seomaoldseoplug'], 'nonce_seomaeoldseoplug_field' ) 
		  ) {
  
					 //print 'Sorry, your nonce did not verify.';
					 exit;
  
			  } else {
			 saveForm_seomae_oldseoplug();
				}
			  
	}			
  /*------nonce field check end ---- */ 


	
/*------nonce field check start ---- */
/* globales text field reset */
	 //status online oder offline
if (isset($_REQUEST['submit_seomae_global_seo_text_reset'])) {
  if ( 
    ! isset( $_POST['nonce_seomaeglobalseotextreset'] ) 
    || ! wp_verify_nonce( $_POST['nonce_seomaeglobalseotextreset'], 'nonce_seomaeglobalseotextreset_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_seomae_globalestextfield_reset();
  			}
}
/*------nonce field check end ---- */ 
  
/* globales text field status */
/*------nonce field check start ---- */
if (isset($_REQUEST['seomae_global_seo_text_stat_submit'])) {

  if ( 
    ! isset( $_POST['nonce_seomaeglobalseostat'] ) 
    || ! wp_verify_nonce( $_POST['nonce_seomaeglobalseostat'], 'nonce_seomaeglobalseostat_field' ) 
		) {

   				//print 'Sorry, your nonce did not verify.';
   				exit;

			} else {
   		saveForm_seomae_globalestextfieldstatus();
  			}
			
  }			
/*------nonce field check end ---- */  

  
  
  
 showForm_seomae();
 }



/* speichern globales textfeld */
  function saveForm_seomae_globalestextfield() {
  if (sanitize_text_field($_POST['seomae_global_seo_textfield']) ) {
	
  update_option('seomae_global_seo_text', sanitize_text_field($_POST['seomae_global_seo_textfield']) );
  }
  
 }

/* reset globales textfeld */
 function saveForm_seomae_globalestextfield_reset() {
  	  
  update_option('seomae_global_seo_text', '' );
  
  
 }

/* speichern old seo plugin wpseo */
function saveForm_seomae_oldseoplug() {
	if (sanitize_text_field($_POST['seomae_old_seo_plugin']) ) {
	  
	update_option('seomae_old_seo_plugin', sanitize_text_field($_POST['seomae_old_seo_plugin']) );
	}
	
   }





/* status globales textfeld */
   function saveForm_seomae_globalestextfieldstatus() {
  if (sanitize_text_field($_POST['seomae_global_text_status']) ) {
	
  update_option('seomae_global_text_status', sanitize_text_field($_POST['seomae_global_text_status']) );
  }
  
 }



/* --------------------------------------------------------------------------------------------------------------------------------------- */
function showForm_seomae() {
	
	
$seomae_global_seo_text_show = get_option('seomae_global_seo_text');
$seomae_global_text_status = get_option('seomae_global_text_status');
$seomae_old_seo_plugin = get_option('seomae_old_seo_plugin');
/*
if ($seomae_global_text_status == 'yes')
	{
		$seomae_input_select_options = '
		<option value="yes" selected>Yes</option>
		<option value="no">No</option>
    ';
}
	else {
	$seomae_input_select_options = '
		<option value="yes">Yes</option>
		<option value="no" selected>No</option>
		';
		
	}
*/
?>
<h2><?php _e( 'Status Global Textfield', 'wp-smart-seo' ); ?></h2>

<form method="post">
<label for="seomae_globtexlabel"><strong>Global Text Field activate? </strong>
<select name="seomae_global_text_status">
<?php

if ($seomae_global_text_status == 'yes')
	{
?>
		<option value="yes" selected><?php _e( 'Yes', 'wp-smart-seo' ); ?></option>
		<option value="no"><?php _e( 'No', 'wp-smart-seo' ); ?></option>
<?php
}
else 
{
?>
		<option value="yes"><?php _e( 'Yes', 'wp-smart-seo' ); ?></option>
		<option value="no" selected><?php _e( 'No', 'wp-smart-seo' ); ?></option>
<?php		
	}
?>
</select>
</label><br /><br />
<input type="submit" style="height: 25px; width: 250px" name="seomae_global_seo_text_stat_submit" value="<?php _e( 'Save', 'wp-smart-seo' ); ?>">
  <?php wp_nonce_field( 'nonce_seomaeglobalseostat_field', 'nonce_seomaeglobalseostat' ); ?>
</form><br/>



<h2><?php _e( 'Global Textfield', 'wp-smart-seo' ); ?></h2>
<form method="post">
<label for="seomae_globtexlabel"><strong> <?php _e( 'Inserted at the End of each Title', 'wp-smart-seo' ); ?></strong><br />
<?php
  echo '<input type="text"  name="seomae_global_seo_textfield" size="100" maxlength="350" value="' . $seomae_global_seo_text_show . '">';
?>
</label><br /><p></p>
<input type="submit" style="height: 25px; width: 250px" name="seomae_global_seo_text_submit" value="<?php _e( 'Save', 'wp-smart-seo' ); ?>">
  <?php wp_nonce_field( 'nonce_seomaeglobalseotext_field', 'nonce_seomaeglobalseotext' ); ?>
</form><br/>


<form method="post">
<input type="submit" style="height: 25px; width: 450px" name="submit_seomae_global_seo_text_reset" value="<?php _e( 'Reset', 'wp-smart-seo' ); ?>">
  <?php wp_nonce_field( 'nonce_seomaeglobalseotextreset_field', 'nonce_seomaeglobalseotextreset' ); ?>
</form>
<br /><br />


<h2><?php _e( 'Which SEO Plugin did you used before?', 'wp-smart-seo' ); ?></h2>

<form method="post">
<label for="seomae_old_seo_plugin"><strong>SEO Plugin Question </strong>
<select name="seomae_old_seo_plugin">
<?php

if ($seomae_old_seo_plugin == 'wpseo')
	{
?>
		<option value="wpseo" selected><?php _e( 'wpSEO', 'wp-smart-seo' ); ?></option>
		<option value="new"><?php _e( 'New WP Installation / Never used a seo plugin here', 'wp-smart-seo' ); ?></option>
<?php
}
else 
{
?>
		<option value="wpseo"><?php _e( 'wpSEO', 'wp-smart-seo' ); ?></option>
		<option value="new" selected><?php _e( 'New WP Installation / Never used a seo plugin here', 'wp-smart-seo' ); ?></option>
<?php		
	}
?>
</select>
</label><br /><br />
<input type="submit" style="height: 25px; width: 250px" name="seomae_oldseoplug_submit" value="<?php _e( 'Save', 'wp-smart-seo' ); ?>">
  <?php wp_nonce_field( 'nonce_seomaeoldseoplug_field', 'nonce_seomaoldseoplug' ); ?>
</form><br/>



<div class="wrap">
<h2><?php _e( 'Plugin recommendation', 'wp-smart-seo' ); ?></h2>
	<p><?php _e( 'if you need an xml sitemap for your wordpress, i recommend my other plugin called "Simple XML Sitemap Generator".', 'wp-smart-seo' ); ?><br />
	<?php _e( 'Download:', 'wp-smart-seo' ); ?> <a href="https://wordpress.org/plugins/simple-xml-sitemap-generator/" target="_blank">https://wordpress.org/plugins/simple-xml-sitemap-generator/</a></p>
	
	<p><?php _e( 'If you want to install google analytics (Universal and GA4), then I recommend this plugin "Quick Google Analytics".', 'wp-smart-seo' ); ?><br />
	<?php _e( 'Download:', 'wp-smart-seo' ); ?> <a href="https://wordpress.org/plugins/quick-google-analytics/" target="_blank">https://wordpress.org/plugins/quick-google-analytics/</a></p>
	
	<p><?php _e( 'all 3 plugins work perfectly together', 'wp-smart-seo' ); ?></p>
</div>
  <div class="wrap">
 
  <h2><?php _e( 'Information', 'wp-smart-seo' ); ?></h2>
  <p><?php _e( 'This "WP Smart SEO" Plugin is created by', 'wp-smart-seo' ); ?> Eric-Oliver M&auml;chler von <a href="http://www.ericmaechler.com" target="_blank">www.ericmaechler.com</a>. </p>

	
  
  </div>
  <?php
 }
 /* --------------------------------------------------------------------------------------------------------------------------------------- */
?>