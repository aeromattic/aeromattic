import * as components from '../index';

describe( 'Common js module', () => {

	document.body.innerHTML = '<div id="aero-theme-back-to-top" ></div>';

	it( 'Should call goBackToTop when clicked on the button', () => {
		const common = components.common;

		common.init();

		expect( common.backToTopButton.getAttribute( 'id' ) ).toEqual( 'aero-theme-back-to-top' );

		jest.spyOn( common, 'goBackToTop' );

		$( common.backToTopButton ).click();

		expect( common.goBackToTop ).toHaveBeenCalledTimes( 1 );

	} );

} );
