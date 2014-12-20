CKEDITOR.plugins.add( 'simplebox', {
    // Simple Box widget code.
    requires: 'widget',

    icons: 'simplebox',

    init: function( editor ) {
        // Plugin logic goes here...
        editor.widgets.add( 'simplebox', {
        	// Widget code.
        	button: 'Create a simple box',
        	template:
			        '<div class="simplebox">' +
			            '<h2 class="simplebox-title">Title</h2>' +
			            '<div class="simplebox-content"><p>Content...</p></div>' +
			        '</div>'
   		} );
    }
} );