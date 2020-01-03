( function( $ ) {
	var target = '.lp__cover-cont';
	var addClass = 'lp__cover--sticky';
	var top = $( target ).offset().top;
	$( window ).scroll( function() {
		var y = $( this ).scrollTop();
		if ( y >= top ) {
			$( target ).addClass( addClass );
		} else {
			$( target ).removeClass( addClass );
		}
	} );

	$( '.js-scroll-anchor' ).click( function( event ) {
		event.preventDefault();
		$( 'html, body' ).animate( { scrollTop: $( $( this ).attr( 'href' ) ).offset().top }, 200 );
	} );

	$( '.shrinking-text' ).each( function() {
		var $this = $( this );
		var words = $this.text().split( ' ' );
		var rate = 13;
		if ( $this.data( 'rate' ) ) {
			rate = $this.data( 'rate' );
		}
		$this.empty();
		$.each( words, function( i, v ) {
			var style, el;
			style = 'font-size: calc(1em - ' + ( i / ( words.length / rate ) ) + 'px);';
			style += 'opacity: ' + ( 1 - ( ( i / ( words.length / rate ) ) * 0.1 ) ) + ';';
			el = $( '<span style="' + style + '">' ).text( v + ' ' );
			$this.append( el );
		} );
	} );
}( jQuery ) );

