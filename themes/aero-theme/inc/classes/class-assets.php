<?php
/**
 * Enqueue theme assets.
 *
 * @package Aero-theme
 */

namespace AERO_THEME\Inc;

use Aero_theme\Inc\Traits\Singleton;

/**
 * Class Assets
 */
class Assets {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->_setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 */
	protected function _setup_hooks() {

		/**
		 * Actions
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );

	}

	/**
	 * Register scripts.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_scripts() {

		wp_register_script( 'aero-theme-main', AERO_THEME_BUILD_URI . '/js/main.js', [ 'jquery' ], false, true );
		wp_register_script( 'aero-theme-home', AERO_THEME_BUILD_URI . '/js/home.js', [ 'jquery' ], false, true );
		wp_register_script( 'aero-theme-single', AERO_THEME_BUILD_URI . '/js/single.js', [ 'jquery' ], false, true );

		wp_enqueue_script( 'aero-theme-main' );

		if ( is_home() ) {
			wp_enqueue_script( 'aero-theme-home' );
		}

		if ( is_single() ) {
			wp_enqueue_script( 'aero-theme-single' );
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	/**
	 * Register styles.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_styles() {

		wp_register_style( 'aero-theme-main', AERO_THEME_BUILD_URI . '/css/main.css', [] );
		wp_register_style( 'aero-theme-home', AERO_THEME_BUILD_URI . '/css/home.css', [ 'aero-theme-main' ] );
		wp_register_style( 'aero-theme-single', AERO_THEME_BUILD_URI . '/css/single.css', [ 'aero-theme-main' ] );

		wp_enqueue_style( 'aero-theme-main' );

		if ( is_home() ) {
			wp_enqueue_style( 'aero-theme-home' );
		}

		if ( is_single() ) {
			wp_enqueue_style( 'aero-theme-single' );
		}
	}

}
