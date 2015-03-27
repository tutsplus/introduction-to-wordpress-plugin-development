(function( $ ) {
	'use strict';

	$(function() {

		var $preview, $editor;

		$preview = $( '#tutsplus-post-notice-preview' );
		$editor = $( 'textarea[name="tutsplus-post-notice-editor"]' );

		$preview.html( $editor.text() );
		$editor.on( 'keyup', function( evt ) {
			$preview.html( $( this ).val() );
		});

	});

})( jQuery );