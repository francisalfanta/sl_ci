<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/libs/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>   
<script type="text/javascript" src="<?php echo base_url('/assets/js/dataTables.fixedHeader.js'); ?>"></script>
</head>
<body>
<div>
<h1>Subscriber management</h1>

<?php echo $this->table->generate(); ?>
</div>

</body>

<script type="text/javascript">
    $(document).ready(function () {
        var oTable = $('#big_table').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": '<?php echo base_url(); ?>subscriber/datatable',
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "iDisplayStart ": 20,
            "oLanguage": {
                "sProcessing": "<img src='<?php echo base_url(); ?>assets/img/ajax-loader-dark.gif'>"
            },
            "columnDefs": [
             { "name": "first",   "targets": 0 },
             { "name": "first",   "targets": 1 },
             { "name": "last",  "targets": 2 },
             { "name": "email", "targets": 3 }
            ],
            "fnInitComplete": function () {
                oTable.fnAdjustColumnSizing();
            },
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
        });
    });
</script>