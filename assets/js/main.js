jQuery(document).ready(function($) {
	// fitVids.
	// $( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	// $( '.odin-tooltip' ).tooltip();

	var checkbox_toggle = function() {
		$( '#bi-checkbox-toggle' ).change( function() {
			var checkbox = $( this );
			var status = checkbox.prop( 'checked' );
			var labels = checkbox.closest( '.checkbox' ).find( 'label' );

			$( '.bi-tab-content' ).hide();
			labels.removeClass( 'active' );
			if( status ) {
				$( '#bi-tab-content-1').show();
				$( '.prx-checkbox-toggle-label-1' ).addClass( 'active' );
			} else {
				$( '#bi-tab-content-2').show();
				$( '.prx-checkbox-toggle-label-2' ).addClass( 'active' );
			}
		});
	};


	checkbox_toggle();

});
