<?php


/**
 * Register meta boxes.
 */


//$screens = array( 'post', 'page', 'book' );

// for all already created and for all created in future

function seomae_register_meta_boxes2() {

    $screens = get_post_types();

    foreach ( $screens as $screen ) {
        add_meta_box(
            'seomae_titel',
            __( 'WP Smart SEO', 'seomae' ),
            'seomae_display_callback',
            $screen
        );
    }
}

add_action( 'add_meta_boxes', 'seomae_register_meta_boxes2' );



/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function seomae_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './meta_box_fields.php';
}




/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function seomae_save_meta_box( $post_id ) {

/* old seo plugin abfragen */
$seomae_old_seo_plugin = get_option('seomae_old_seo_plugin');


    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }

   
        $fields = [
            'seomae_google_title',
            'seomae_google_description',
            'seomae_facebook_title',
            'seomae_facebook_description',
            'seomae_facebook_image',
            'seomae_twitter_title',
            'seomae_twitter_description',
            'seomae_twitter_image',
            'seomae_index'
        ];
   



    

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'seomae_save_meta_box' );


?>