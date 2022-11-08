<?php

//add_filter( 'the_title', '__return_false' );

add_action('wp_head', 'seomae_add_to_header');

function seomae_add_to_header(){


/* old seo plugin abfragen */
$seomae_old_seo_plugin = get_option('seomae_old_seo_plugin');



/* globales text feld abfragen */
$seomae_global_text_status = get_option('seomae_global_text_status');
$seomae_global_seo_text_show = get_option('seomae_global_seo_text');
	
	
if ($seomae_global_text_status == 'yes')
{
	$seomae_global_seo_text_field = "≫ $seomae_global_seo_text_show";
}
else {
	$seomae_global_seo_text_field = "";
}
	
	
	

if (is_category() ){

/* checken welches seo plugin drin war oder ob es eine neue install ist */
if ($seomae_old_seo_plugin == '' OR $seomae_old_seo_plugin == 'new')
{
	include("_wpsmartseo_category.php");
}
else /* wpseo */
{
	include("_wpsmartseo_category.php");
}





}
	
elseif (is_tag() )
{
?>

<!-- Diese Seite wurde SEO-optimiert von WP Smart SEO / https://wordpress.org/plugins/wp-smart-seo/ -->

<meta name="robots" content="noindex, follow">	

<!-- ################################################################################################ -->

<?php
}
	
else {

	/* checken welches seo plugin drin war oder ob es eine neue install ist */
	if ($seomae_old_seo_plugin == '' OR $seomae_old_seo_plugin == 'new')
	{
		include("_wpsmartseo_text.php");
	}
	else /* wpseo */
	{
		include("_wpsmartseo_wpseo.php");
	}

}

};

?>