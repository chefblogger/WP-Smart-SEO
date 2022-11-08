<?php 
$check1 = esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) );
$check2 = esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_title', true ) );

if (null ==(esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) )))
{
  echo "<meta demo='WP Smart SEO Plugin'>"; 
?>
<!-- Diese Seite wurde SEO-optimiert von WP Smart SEO / https://wordpress.org/plugins/wp-smart-seo/ -->
<!-- wpseo struktur -->
<meta name="robots" content="index, follow">

<title><?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?></title>
<meta name="description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_description', true ) ); ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_og_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta property="og:description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_og_description', true ) ); ?>" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_twittercard_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta name="twitter:description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_twittercard_description', true ) ); ?>" />


<!-- ################################################################################################ -->
<?php  
}


if (null ==(esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_title', true ) )))
{
  echo "<meta demo='wpseo.de Plugin '>";  
?>
<!-- Diese Seite wurde SEO-optimiert von WP Smart SEO / https://wordpress.org/plugins/wp-smart-seo/ -->
<!-- else2 -->
<meta name="robots" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_index', true ) ); ?>">

<title><?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?></title>
<meta name="description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_description', true ) ); ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta property="og:description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_description', true ) ); ?>" />
<meta property="og:image" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_image', true ) ); ?>" />
<meta property="og:image:alt" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_title', true ) ); ?>" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta name="twitter:description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_description', true ) ); ?>" />
<meta name="twitter:image" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_image', true ) ); ?>" />

<!-- ################################################################################################ -->
<?php 

}




?>


<?php 
/*
<!-- Diese Seite wurde SEO-optimiert von WP Smart SEO / https://wordpress.org/plugins/wp-smart-seo/ -->
<!-- wpseo struktur -->
<meta name="robots" content="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_index', true ) ); ?>">

<title><?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?></title>
<meta name="description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_description', true ) ); ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_og_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta property="og:description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_og_description', true ) ); ?>" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_twittercard_title', true ) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta name="twitter:description" content="<?php echo esc_attr( get_post_meta( get_the_ID(), '_wpseo_edit_twittercard_description', true ) ); ?>" />


<!-- ################################################################################################ -->

*/

?>