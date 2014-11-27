<form method="post" action="action.php">
    <label class="frmInput">A field</label> <input type="text" name="a_field" id="aField" />
    <label class="frmInput">A field</label> <input type="text" id="customerName" /> <!-- This field will be used for autocomplete -->
    <input type="hidden" name="customer_id" id="customerId" /> <!-- This field will be posted -->
</form>

<script>
$(document).ready(function(){
 
    $("#customerName").autocomplete("<?php echo base_url('propertyfinder/ajax_customer_search'); ?>", {  //we have set data with source here
        formatItem: function(rowdata) { //This function is called right before the item is displayed on the dropdown, so we splitted and returned what we show in the selection box
            var info = rowdata[0].split(":");
            return info[1];
        },
        formatResult: function (rowdata) { // This function is called when any item selected, here also we returned that what we wanted to show our customerName field.
            var info = rowdata[0].split(":");
            return info[1];
        }
    }).result(function(event, data, formatted){ //Here we do our most important task <span class="wp-smiley wp-emoji wp-emoji-smile" title=":)">:)</span>
            if(!data) { //If no data selected set the customer_id field value as 0
                $("#customerId").val('0');
            } else { // Set the value for the customer id
                var info = formatted.split(":");
                $("#customerId").val(info[0]);
            }
    });
 
});
</script>