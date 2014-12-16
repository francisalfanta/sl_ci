
<?php echo display_ckeditor($ckeditor); ?>
<textarea cols="80" id="message" name="message" rows="10">
</textarea>
<script>
    CKEDITOR.replace( 'message', {
        // Load the Simple Box plugin.
        extraPlugins: 'simplebox'
    } );
</script>