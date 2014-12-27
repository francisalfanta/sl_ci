CKEDITOR.plugins.add( 'simplebox', {
    // Simple Box widget code.
    requires: 'widget',

    icons: 'simplebox',

    init: function( editor ) {
        // Plugin logic goes here...
        editor.widgets.add( 'simplebox', {
        	// Widget code.
        	button: 'SL Signature',
        	template:
                    '<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><img alt="" src="http://localhost/sl_ci/assets/img/slrelogo.png" /><br />'+
                    '<small>Yes Business Center Building, Office 403<br />'+
                    'Al Barsha 1, Dubai UAE<br />'+
                    '4th Floor, Room # 403 - 404<br />'+
                    'P.O. Box: 392962</small></div>'+
                    '<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;"><small>Direct:(<span dir="ltr"><span dir="ltr">+971) 04-5516390<br />'+
                    'Fax:(+971) 04-5516428</span></span></small></div>',

            allowedContent:
                    'div(!simplebox); div(!simplebox-content); h2(!simplebox-title)',

            requiredContent: 'div(simplebox)',

            upcast: function( element ) {
                return element.name == 'div' && element.hasClass( 'simplebox' );
            }

   		} );
        editor.widgets.add( 'simplebox', {
            // Code defined before...
            editables: {
                title: {
                    selector: '.simplebox-title'
                },
                content: {
                    selector: '.simplebox-content'
                }
            }
        } );       
    }
} );