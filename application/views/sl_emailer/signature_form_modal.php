<div class="modal fade" id="crud_signature" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">  
                <div class="content"> 
                    <h2><i class="icon-chart-pie-1"></i>Personalize <strong>Signature</strong></h2>
                    <div class="additional-btn">  
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
        
                    <div class="modal-body">                    
                        <div class="form-group">                                   
                            {signature_editor}
                        </div>
                        <div class="row">
                        <div class="form-group" style="padding-right:25px;">
                            <a href="#" type="submit" id="submit_signature" class="btn btn-default" tabindex="5" style="width:150px;float:right;">Save</a>
                        </div>
                        </div>
                    </div>            
                </div>
                <div class="modal-footer">	
                    <script src="<?php echo base_url();?>assets/libs/ckeditor/ckeditor.js"></script>
                    <script src="<?php echo base_url();?>assets/libs/ckeditor/adapters/jquery.js"></script>
                    <script>
                    $(document).ready(function(){
                        $('#submit_signature').click(function(){
                            //alert('click');
                            var signature_msg = CKEDITOR.instances.signature_message.getData();
                            alert(signature_msg);
                            $.ajax({ 
                                type: "POST",
                                url: "<?php echo base_url('sl_emailer/crud_signature'); ?>",
                                dataType: "json",
                                data: { "signature_msg": signature_msg
                                    },
                                complete: function(e){
                                    swal('Signature', 'successfully saved', 'success');                            
                              }

                            });
                        });
                    });
                    </script>   
                </div>
            </div>
        </div>
   </div>
</div>