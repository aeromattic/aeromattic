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

		var backToTopButton = $( this.backToTopButton );

		$( window ).scroll( function() {
			if ( 10 < $( this ).scrollTop() ) {
				backToTopButton.fadeIn();
			} else {
				backToTopButton.fadeOut();
			}
		} );

		this.bindEvents();
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
	}

};

export default common;
