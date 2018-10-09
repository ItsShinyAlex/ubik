<?php
/**
 * reality-child functions and definitions
 *
 * @package reality
 */

add_action( 'after_setup_theme', 'inwave_child_theme_setup' );

function inwave_child_theme_setup() {
    load_child_theme_textdomain( 'reality-child', get_stylesheet_directory() . '/languages' );
}