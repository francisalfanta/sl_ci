<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
  <title>DataTables example</title>

  
      <link href="<?php echo base_url(); ?>assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="<?php echo base_url('/assets/libs/DataTables-1.10.4/media/js/jquery.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/dataTables.fixedHeader.js'); ?>"></script>
 </head>
 <body>  
  <div  id="dt_example">
   <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
    <thead>
     <tr>
      <th width="20%">Add Column</th>
      <th width="20%">Hero ID</th>
      <th width="25%">Name</th>
      <th width="25%">World ID</th>
      <th width="15%">Class ID</th>
      <th width="15%">Race ID</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td colspan="5" class="dataTables_empty">Loading data from server</td>
     </tr>
    </tbody>
    <tfoot>
     <tr>
      <th >Add Column</th>
      <th>Hero ID</th>
      <th>Name</th>
      <th>World ID</th>
      <th>Class ID</th>
      <th>Race ID</th>
     </tr>
    </tfoot>
   </table>
  </div>
<script type="text/javascript" charset="utf-8">
   $(document).ready(function() {
    $('#example').dataTable( {
     //'iCookieDuration': 60,
      'bStateSave'     : true,
      'bServerSide'    : true,
      'bAutoWidth'     : false,
      'sPaginationType': 'full_numbers',
      'sAjaxSource': '<?php echo base_url();?>dt_test/list_all',
      'aoColumns'      : 
      [
        {
          'sWidth'    : '2%',
          'sClass'    : 'center',
          'sName'     : 'myColumn',
          'bSortable' : false
        },
        { 'sName' : 'address.addressStreet' },
         {
          'sClass' : 'center',
          'sName'  : 'address.addressStreet'
        },
         {
          'sClass' : 'center',
          'sName'  : 'address.addressSubcommunity'
        },
         {
          'sClass' : 'center',
          'sName'  : 'address.addressCommunity'
        },
         {
          'sClass' : 'center',
          'sName'  : 'address.addressCity'
        },
        {
          'sClass' : 'center',
          'sName'  : 'address.addressCountry'
        }
      ],
      'fnServerData': function(sSource, aoData, fnCallback)
      {
        $.ajax
        ({
          'dataType': 'json',
          'type'    : 'POST',
          'url'     : sSource,
          'data'    : aoData,
          'success' : fnCallback
        });
      }
    } );
   } );
  </script>
 </body>
</html> 