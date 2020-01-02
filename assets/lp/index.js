( function( $ ) {
	var target = '.sp__cover-cont';
	var addClass = 'sp__cover--sticky';
	var top = $( target ).offset().top;
	$( window ).scroll( function() {
		var y = $( this ).scrollTop();
		if ( y >= top ) {
			$( target ).addClass( addClass );
		} else {
			$( target ).removeClass( addClass );
		}
	} );
}( jQuery ) );
