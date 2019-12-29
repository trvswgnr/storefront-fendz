jQuery( function( a ) {
	var b = function() {
		var b = a( window ),
			c = a( '.sp__ipad-cont' ),
			d = a( '.sp__ipad__img' ),
			e = c.position().top,
			f = a( '.sp__stuck' ),
			g = a( '.sp__form' ),
			h = 0;
		d.find( 'img' ).each( function() {
			h += a( this ).outerHeight();
		} );
		var i = a( document ).outerHeight() - h,
			j = a( document ).outerHeight() / i;
		console.log( j ),
		b.on( 'scroll', function() {
			Modernizr.mq( 'only all and (min-width: 48em)' ) ? ( scrollTop = b.scrollTop(),
			scrollTop >= e ? c.addClass( 'sp__ipad--sticky' ) : scrollTop <= e && c.removeClass( 'sp__ipad--sticky' ) ) : Modernizr.mq( 'only all and (max-width: 71.25em)' ) && ( b.scrollTop() + b.height() > a( document ).height() - a( '#download' ).height() ? f.addClass( 'sp__stuck--hidden' ) : f.removeClass( 'sp__stuck--hidden' ) );
		} ),
		g.validate( {
			rules: {
				first_name: {
					required: ! 0
				},
				last_name: {
					required: ! 0
				},
				email: {
					required: ! 0,
					email: ! 0
				},
				phone: {
					required: ! 0
				}
			}
		} ),
		Modernizr.addTest( 'retina', function() {
			var a = window.devicePixelRatio || window.screen.deviceXDPI / window.screen.logicalXDPI || 1;
			return !! ( a > 1 );
		} ),
		Modernizr.retina && a( '.sp__ipad__img img, .sp__chapters img' ).prop( 'src', function( b ) {
			return a( this ).data( 'retina' );
		} );
	};
	b();
} );
