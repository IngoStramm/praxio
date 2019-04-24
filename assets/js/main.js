jQuery( function( $ ) {

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

	var carousel_normalize = function() {

		$( '.carousel-normalize' ).each( function() {
			var items = $( '.item', this );

			items.css( 'min-height', 0 );

			var maxHeight = Math.max.apply( null, 
				items.map( function() {
					return $( this ).outerHeight();
				}).get() );
			items.css( 'min-height', maxHeight + 'px' );
		});
	};

	var normalize_elements = function( wrapper, element ) {

		$( '.' + wrapper ).each( function() {

			var items = $( '.' + element, this );

			items.css( 'min-height', 0 );

			var maxHeight = Math.max.apply( null, 
				items.map( function() {
					return $( this ).outerHeight();
				}).get() );
			items.css( 'min-height', maxHeight + 'px' );
		});
	};

	$( document ).ready( function() {

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

		checkbox_toggle();
		carousel_normalize();
		normalize_elements( 'fix-height-wrapper', 'fix-height-item' );
		
	}); // $(document).ready

	$( window ).resize( function() {

		carousel_normalize();
		normalize_elements( 'fix-height-wrapper', 'fix-height-item' );

	});
});