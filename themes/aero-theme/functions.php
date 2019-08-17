<?php
/**
 * aero-theme file includes and definitions
 *
 * @package Aero-theme
 */

if ( ! defined( 'AERO_THEME_VERSION' ) ) {
	define( 'AERO_THEME_VERSION', 1.0 );
}
if ( ! defined( 'AERO_THEME_TEMP_DIR' ) ) {
	define( 'AERO_THEME_TEMP_DIR', untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'AERO_THEME_BUILD_URI' ) ) {
	define( 'AERO_THEME_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/build' );
}

require_once AERO_THEME_TEMP_DIR . '/inc/helpers/autoloader.php';
require_once AERO_THEME_TEMP_DIR . '/inc/helpers/custom-functions.php';
require_once AERO_THEME_TEMP_DIR . '/inc/helpers/template-tags.php';

/**
 * Get aero-theme instance.
 *
 * @return \AERO_THEME\Inc\AERO_THEME
 */
function get_theme_instance() {
	return \AERO_THEME\Inc\AERO_THEME::get_instance();
}

get_theme_instance();
