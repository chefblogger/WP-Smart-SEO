

<!-- Diese Seite wurde SEO-optimiert von WP Smart SEO / https://wordpress.org/plugins/wp-smart-seo/ -->


<meta name="description" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_google_description', true) ); ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_facebook_title', true) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta property="og:description" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_facebook_description', true) ); ?>" />
<meta property="og:image" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_facebook_image', true) ); ?>" />
<meta property="og:image:alt" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_facebook_title', true) ); ?>" />
<meta property="og:url" content="<?php echo esc_attr( get_cat_ID( category_facebook_title ) ); ?>";

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_twitter_title', true) ); ?> <?php echo $seomae_global_seo_text_field; ?>" />
<meta name="twitter:description" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_twitter_description', true) ); ?>" />
<meta name="twitter:image" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'category_twitter_image', true) ); ?>" />

<meta name="robots" content="<?php echo esc_attr( get_term_meta(get_query_var('cat'), 'seomae_category_index', true) ); ?>">

<!-- ################################################################################################ -->