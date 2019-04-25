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

window.sr = ScrollReveal({ useDelay: 'once' });

sr.reveal('.zb100-1', { 
  origin: 'bottom',
  distance: '100px',
  duration: 1500,
  delay: 100,
  opacity: 0,
  scale: 0.5,
  reset: true
});

sr.reveal('.zb50-1', { 
  origin: 'bottom',
  distance: '100px',
  duration: 3000,
  delay: 100,
  opacity: 0,
  scale: 0.5,
  reset: true
});

sr.reveal('.zb50-2', { 
  origin: 'bottom',
  distance: '100px',
  duration: 3000,
  delay: 400,
  opacity: 0,
  scale: 0.5,
  reset: true
});

sr.reveal('.b20-1', { 
  origin: 'bottom',
  distance: '20px',
  duration: 1500,
  delay: 100,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.b20-2', { 
  origin: 'bottom',
  distance: '20px',
  duration: 1500,
  delay: 200,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.b20-3', { 
  origin: 'bottom',
  distance: '20px',
  duration: 1500,
  delay: 300,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.b20-4', { 
  origin: 'bottom',
  distance: '20px',
  duration: 1500,
  delay: 400,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.r30-1', { 
  origin: 'right',
  distance: '30px',
  duration: 2000,
  delay: 300,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.l30-1', { 
  origin: 'left',
  distance: '30px',
  duration: 2000,
  delay: 300,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.l400-1', { 
  origin: 'left',
  distance: '400px',
  duration: 2000,
  delay: 150,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.b40-1', { 
  origin: 'bottom',
  distance: '40px',
  duration: 1500,
  delay: 100,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.b40-2', { 
  origin: 'bottom',
  distance: '40px',
  duration: 1500,
  delay: 300,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.t40-1', { 
  origin: 'top',
  distance: '40px',
  duration: 1500,
  delay: 500,
  opacity: 0,
  scale: 1,
  useDelay: 'always',
  reset: true
});

sr.reveal('.t40-2', { 
  origin: 'top',
  distance: '40px',
  duration: 1500,
  delay: 800,
  opacity: 0,
  scale: 1,
  useDelay: 'always',
  reset: true
});

sr.reveal('.t40-fone', { 
  origin: 'top',
  distance: '40px',
  duration: 1500,
  delay: 800,
  opacity: 0,
  scale: 1,
  useDelay: 'always',
  reset: true
  // afterReveal: function(){}
});

sr.reveal('.t40-3', { 
  origin: 'top',
  distance: '40px',
  duration: 1500,
  delay: 1100,
  opacity: 0,
  scale: 1,
  useDelay: 'always',
  reset: true
});

sr.reveal('.l40-1', { 
  origin: 'left',
  distance: '40px',
  duration: 1500,
  delay: 100,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.r40-1', { 
  origin: 'right',
  distance: '40px',
  duration: 1500,
  delay: 100,
  opacity: 0,
  scale: 1,
  reset: true
});

sr.reveal('.s1-1', { 
  origin: 'bottom',
  distance: '0',
  duration: 600,
  delay: 600,
  scale: 1.5,
  reset: true
});

sr.reveal('.s1-2', { 
  origin: 'bottom',
  distance: '0',
  duration: 600,
  delay: 1000,
  scale: 1.5,
  reset: true
});

sr.reveal('.s1-3', { 
  origin: 'bottom',
  distance: '0',
  duration: 400,
  delay: 1400,
  scale: 1.5,
  reset: true
});