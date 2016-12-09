/**
 * Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	wp.customize( 'spp_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.storefront-single-product-pagination a' ).css( 'background-color', to );
		} );
	} );
} )( jQuery );
