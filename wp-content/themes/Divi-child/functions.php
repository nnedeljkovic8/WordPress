<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

//Faetured image vesti u punoj rezoluciji

function wpc_remove_height_cropping($height) {
	return '9999';
}
function wpc_remove_width_cropping($width) {
	return '9999';
}

add_filter( 'et_pb_blog_image_height', 'wpc_remove_height_cropping' );
add_filter( 'et_pb_blog_image_width', 'wpc_remove_width_cropping' );

//Kraj 

//Prikaz budućih naslova linkovano ka proizvodu

add_action('woocommerce_product_meta_end', 'add_game');

function add_game()
{
    echo do_shortcode ('[acf field="game"]');
}

//Kraj 