<!DOCTYPE html>
<html>
    <head>
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="http://localhost/sl_ci/assets/js/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/libs/DataTables-1.10.4/media/js/jquery.js'); ?>"></script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <div class="form-group">                                                                        
                <a href="#" type="submit" id="save_template" class="btn btn-default" tabindex="5" style="width:130px;">Save Template</a>                                                                                                       
            </div><!-- form-group -->
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' ,  {
                    // Load the Simple Box plugin.
                    extraPlugins: 'simplebox'
                });
            </script>
        </form>
        <script type="text/javascript"> 
            $(document).ready(function() { 
            // clicking save will send  data to database 
                $('#save_template').click(function() {
                    //saves the content of the  editor 
                    var data = this.getData();
                    alert(data);    
                    return false;   
                }); //end click
                // end testing js
            });
        </script>
    </body>
</html>