<!-- Modal --> 
<div class="modal fade" id="update_name_letter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><strong>Edit Letter Template</strong></h4>
      </div>
      <div class="modal-body">
		<div class="form-group">
            <div class="form-group"> <!-- Unit no -->
                <div class="row">
                    <label for="letter_template_name" class="col-sm-3 col-md-3 control-label input-sm">Name :</label>
                    <div class="col-sm-9 input-sm">
                        <input type="text" name="letter_template_name" id="letter_template_name_modal" class="form-control input-sm" value="<?php echo set_value('letter_template_name'); ?>" placeholder="Letter Template Name" />                 
                        <p class="help-block"> </p>
                    </div>
                </div><!-- row -->
            </div><!-- form-group -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#" id="update_letter_temp_name" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>