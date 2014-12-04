<!-- Created by  : Francis A.
     Date        : December 4, 2014
     Script Lines: All unless noted otherwise
-->
<!-- Modal Delete Record -->
    <div class="md-modal md-slide-from-bottom" id="delete-record-modal">
        <div class="md-content">
            <h3><strong>Delete record</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want you wanna delete the record?</p>
                <p class="text-center">
                    <button class="btn btn-danger md-close">Cancel</button>
                    <input type="hidden" id="to-delete" value="">
                    <a href='<?php echo base_url('property_owner/del_nat/'.$row->tb_propertyfinder_id); ?>' class="btn btn-success md-close">Delete</a>  <!-- Modified by: Lemuel 11/27/2014 -->
                </p>
            </div>
        </div>
    </div>        
<!-- Modal End -->   