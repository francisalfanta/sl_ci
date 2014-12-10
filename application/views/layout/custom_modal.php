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
<div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
            <div class="md-content">
                <h3>Modal Dialog</h3>
                <div>
                    <p>This is a modal window. You can do the following things with it:</p>
                    <ul>
                        <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                        <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                        <li><strong>Close:</strong> click on the button below to close the modal.</li>
                    </ul>
                    <p>
                    <button class="btn btn-danger md-close">Close me!</button>
                    <button class="btn btn-success md-close">Some button</button>
                    </p>
                </div>
            </div><!-- End div .md-content -->
        </div><!-- End div .md-modal .md-fade-in-scale-up -->
