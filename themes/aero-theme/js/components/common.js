/**
 * Common JS.
 *
 * @type {Object}
 */
const common = {

	/**
	 * Initialize.
	 *
	 * @return {void}
	 */
	init() {
		this.backToTopButton = document.getElementById( 'aero-theme-back-to-top' );
		this.bodyHtml = $( 'body, html' );

		this.bindEvents();
		this.createSlider();
	},

	/**
	 * Bind events.
	 *
	 * @return {void}
	 */
	bindEvents() {
		this.backToTopButton.addEventListener( 'click', () => this.goBackToTop() );
	},

	/**
	 * Handles back to top.
	 *
	 * @return {void}
	 */
	goBackToTop() {
		const animationDuration = 600;

		this.bodyHtml.animate( {
			scrollTop: 0
		}, animationDuration );
	},

	/**
	 * Create Sliders.
	 *
	 * @return {void}
	 */
	createSlider() {
		var $homeSlider = $( '.home-slider' );
		if ( $homeSlider.length > 0 ) {
			$homeSlider.slick( {
				dots: true,
				autoplay: true,
				autoplaySpeed: 5000,
			} );
		}
	}

};

export default common;
