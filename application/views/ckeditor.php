
<textarea id="email_message" name="message" class="ckeditor">
</textarea>
<script>
    CKEDITOR.replace( 'email_message', {
        // Load the Simple Box plugin.
        extraPlugins: 'simplebox',
        extraPlugins: 'placeholder',
        extraPlugins: 'strinsert',    
        //ID of the textarea that will be replaced
		//'id' 	=> 	'to_emailer',
		//'path'	=>	'assets/libs/ckeditor',
		//'path'	=>	'assets/js/ckeditor',
		path: 'assets/libs/ckeditor',
		//Optionnal values
		//'config' => array(
			//'toolbar' 	=> 	"Full", 	//Using the Full toolbar
		//	'width' 	=> 	"850px",	//Setting a custom width
		//	'height' 	=> 	'630px',	//Setting a custom height 
		//),
		config: {width: "850px", height: "630px"},

		//Replacing styles from the "Styles tool"
		//'styles' => array(

			//Creating a new style named "style 1"
		//	'style 1' => array (
		//		'name' 		=> 	'Blue Title',
		//		'element' 	=> 	'h2',
		//		'styles' => array(
		//			'color' 	=> 	'Blue',
		//			'font-weight' 	=> 	'bold'
		//		)
		//	),
		styles: {'style 1': {name: 'Blue Title', element: 'h2', styles: { color: 'Blue', 'font-weight': 'bold'}}},
			//Creating a new style named "style 2"
		//	'style 2' => array (
		//		'name' 	=> 	'Red Title',
		//		'element' 	=> 	'h2',
		//		'styles' => array(
		//			'color' 		=> 	'Red',
		//			'font-weight' 		=> 	'bold',
		//			'text-decoration'	=> 	'underline'
		//		)
		//	)				
		//),
		/*
		'fields' => array(

			//Creating a new style named "style 1"
			'style 1' => array (
				'name' 		=> 	'Blue Title',
				'element' 	=> 	'h2',
				'styles' => array(
					'color' 	=> 	'Blue',
					'font-weight' 	=> 	'bold'
				)
			),

			//Creating a new style named "style 2"
			'style 2' => array (
				'name' 	=> 	'Red Title',
				'element' 	=> 	'h2',
				'styles' => array(
					'color' 		=> 	'Red',
					'font-weight' 		=> 	'bold',
					'text-decoration'	=> 	'underline'
				)
			)				
		),*/
		fields: {'style 1': {name: 'Blue Title', element: 'h2', styles: { color: 'Blue', 'font-weight': 'bold'}}}
		//toolbar: [ [ 'Source', 'Bold' ], ['CreatePlaceholder'] ]
    } );
</script>