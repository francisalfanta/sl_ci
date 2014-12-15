<?php if(strstr(strtolower($title), 'list')) { ?>
            <link href="<?php echo base_url(); ?>assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url(); ?>assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
        
        <?php } ?>

        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />


       
        <?php if($title =='SoftLine | Property Finder' || $title == 'SoftLine | Property Owner'){
            echo '<link href="'.base_url('assets/libs/select2-3.5.2/select2.css').'" type="text/css" rel="stylesheet"/>';
                       
        }?>



        <style>
          .select-editable { position:relative; background-color:white; border:solid grey 1px;  width:120px; height:18px; }
          .select-editable select { position:absolute; top:0px; left:0px; font-size:14px; border:none; width:120px; margin:0; }
          .select-editable input { position:absolute; top:0px; left:0px; width:100px; padding:1px; font-size:12px; border:none; }
          .select-editable select:focus, .select-editable input:focus { outline:none; }
        </style>
        <link href="<?php echo base_url(); ?>assets/css/added/dataTables.jqueryui.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/added/jquery-ui.css" type="text/css" rel="stylesheet"/>
       
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

     
        <link href="<?php echo base_url(); ?>assets/css/dataTables.fixedHeader.css" rel="stylesheet" />        
        <link href="<?php echo base_url(); ?>assets/libs/DataTables-1.10.4/media/css/jquery.dataTables.css" rel="stylesheet" />

        <script src="<?php echo base_url(); ?>assets/js/pace.min.js"></script>
