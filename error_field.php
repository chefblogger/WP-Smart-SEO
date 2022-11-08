<?php

//fehlermeldung generieren

$seomae_google_title_anzeige = esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) );	

if (($seomae_google_title_anzeige == '') OR ($asdf == ''))
	{
	
				function seomae_admin_notice__error() {
				$class = 'seomae_error';
				$message = __( "ERROR - Field empty", 'seomae_google_title' );

				printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
				}
				add_action( 'admin_notices', 'seomae_admin_notice__error' );

	}




?>