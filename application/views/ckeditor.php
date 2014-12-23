<?php echo display_ckeditor($ckeditor); ?>
<textarea id="email_message" name="message" class="ckeditor">
</textarea>
<script>
    CKEDITOR.replace( 'email_message', {
        // Load the Simple Box plugin.
        extraPlugins: 'simplebox',
        extraPlugins: 'placeholder',
        extraPlugins: 'strinsert'
		//toolbar: [ [ 'Source', 'Bold' ], ['CreatePlaceholder'] ]
    } );
</script>

