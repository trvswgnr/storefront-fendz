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

	( function() {
		var words = $( '.shrinking-text' ).text().split( ' ' );
		$( '.shrinking-text' ).empty();
		$.each( words, function( i, v ) {
			var style, el;
			style = 'font-size: calc(1em - ' + ( i / ( words.length / 13 ) ) + 'px);';
			style += 'opacity: ' + ( 1 - ( ( i / ( words.length / 13 ) ) * 0.1 ) ) + ';';
			el = $( '<span style="' + style + '">' ).text( v + ' ' );
			$( '.shrinking-text' ).append( el );
		} );
	}() );
}( jQuery ) );

