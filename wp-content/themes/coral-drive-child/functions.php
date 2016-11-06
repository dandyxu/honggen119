<?php
function theme_enqueue_styles() {
    $maxwidth = get_theme_mod('coraldrivepro_pagewidth_setting', '1020');
    $mincss = 0;
    if ( 0 == $mincss ) {
        if ( "1020" == $maxwidth ) {
            if (!is_rtl()) {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style.css' );
            } else {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-rtl.css' );
            }
        } else {
            if (!is_rtl()) {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-1200.css' );
            } else {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-1200-rtl.css' );
            }
        }
    } else {
        if ( "1020" == $maxwidth ) {
            if (!is_rtl()) {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-min.css' );
            } else {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-min-rtl.css' );
            }
        } else {
            if (!is_rtl()) {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-1200-min.css' );
            } else {
                wp_enqueue_style( 'coraldrivepro-style', get_template_directory_uri() . '/style-1200-min-rtl.css' );
            }
        }
    }
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'coraldrivepro-style' ));
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>