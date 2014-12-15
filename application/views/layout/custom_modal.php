<!-- Created by  : Francis A.
     Date        : December 4, 2014
     Script Lines: All unless noted otherwise
-->
<!-- Modal Delete Record -->
    <div class="md-modal md-slide-from-bottom" id="delete-record-modal">
        <div class="modal-dialog">
            <div class="md-content">
                
                    <h3><strong>Delete record</strong> Confirmation</h3>
                
                <div class="modal-body">          
                    <div class="text-center">Are you sure want you wanna delete the record?</div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <form action="<?php echo base_url('property_owner/for_deletion_owner'); ?>" method="post" >
                        <input type="hidden" name="todelete" id="todelete" value=""/> 
                        <p>
                            <a href="" class="btn btn-danger md-close">Cancel</a>                                          
                            <button type="submit" id="del-record" class="btn btn-success md-close">Delete</button>                        
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        

<!-- Modal End -->
<!-- Modal Can not Delete Record -->
    <div class="md-modal md-slide-from-bottom" id="cnt-delete-record-modal">
        <div class="modal-dialog">
            <div class="md-content">
                
                    <h3><strong>Delete record</strong> Notice</h3>
                
                <div class="modal-body">                    
                    <p class="text-center">Can not delete the record selected. The owner possess <span id="cnt-del-no-property"></span> properties. 
                    <br>Delete first the record property owned.</p>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                        <button class="btn btn-danger md-close">Cancel</button>
                    </p>
                </div>
            </div>
        </div>
    </div>        

<!-- Modal End -->
<!-- Logout Modal Guide -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want to logout from this awesome system?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                </p>
            </div>
        </div>
    </div>     

<!-- -->
<!-- Modal can delete record version 2 -->
<!-- <a data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete" href="#">Delete record #23</a><br>
    // modal delete version 2
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));                      
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
    });
    together with the information below
-->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>You are about to delete one track url, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="#" class="btn btn-danger danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
<!-- end version 2 -->


