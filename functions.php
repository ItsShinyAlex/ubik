<?php
/**
 * reality-child functions and definitions
 *
 * @package reality
 */


add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'parentselect', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/parentselect.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}


add_action( 'after_setup_theme', 'inwave_child_theme_setup' );

function inwave_child_theme_setup() {
    load_child_theme_textdomain( 'reality-child', get_stylesheet_directory() . '/languages' );
}