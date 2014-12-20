<?php echo display_ckeditor($ckeditor); ?>
<textarea cols="80" id="email_message" name="message" rows="10" class="ckeditor">
</textarea>
<script>
    CKEDITOR.replace( 'email_message', {
        // Load the Simple Box plugin.
        extraPlugins: 'simplebox',
        extraPlugins: 'placeholder',
		//toolbar: [ [ 'Source', 'Bold' ], ['CreatePlaceholder'] ]
    } );
</script>

