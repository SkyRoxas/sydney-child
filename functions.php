<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'sydney-bootstrap' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

function add_custom_scripts()
{
    wp_enqueue_script('bundle',  get_stylesheet_directory_uri() . '/bundle.js');
    wp_enqueue_style( 'mystyle', get_stylesheet_directory_uri() . '/css/style.css' );
}

add_action('wp_enqueue_scripts', 'add_custom_scripts');

// END ENQUEUE PARENT ACTION
