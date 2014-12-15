
<?php echo display_ckeditor($ckeditor); ?>
<textarea cols="80" id="editor1" name="editor1" rows="10">
</textarea>
<script>
    CKEDITOR.replace( 'editor1', {
        // Load the Simple Box plugin.
        extraPlugins: 'simplebox'
    } );
</script>