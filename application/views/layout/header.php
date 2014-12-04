<!DOCTYPE html>
<html>
<!-- Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
-->
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?> | Coco - Responsive Bootstrap Admin Template</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="<?php echo base_url(); ?>assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="<?php echo base_url(); ?>assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="<?php echo base_url(); ?>assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <?php if(strstr(strtolower($title), 'list')) { ?>
                    <link href="<?php echo base_url(); ?>assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
                    <link href="<?php echo base_url(); ?>assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
                    
                    <!--<link href="<?php echo base_url(); ?>assets/libs/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">                    
                    <script src="<?php echo base_url(); ?>assets/libs/bootstrap-switch-master/dist/js/bootstrap-switch.js"></script>-->
                <?php } ?>
                <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-152x152.png" />
        <?php if($title =='SoftLine | Property Finder' || $title == 'SoftLine | Property Owner'){
            echo '<link href="'.base_url('assets/libs/select2-3.5.2/select2.css').'" rel="stylesheet"/>';            
        }?>

        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

         
        <style>
          .select-editable { position:relative; background-color:white; border:solid grey 1px;  width:120px; height:18px; }
          .select-editable select { position:absolute; top:0px; left:0px; font-size:14px; border:none; width:120px; margin:0; }
          .select-editable input { position:absolute; top:0px; left:0px; width:100px; padding:1px; font-size:12px; border:none; }
          .select-editable select:focus, .select-editable input:focus { outline:none; }
        </style>

        <!-- FMA added 12/02/2014-->
         <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
        
    </head>
    <body class="fixed-left login-page">
        <div id="indexLoader" style="width:100%;height:100%;position: absolute; background: white; opacity:0.8;">
        <center>
            <br /><br />
            <img src="<?php base_url('assets/img/ajax-loader.gif'); ?>">
            <br /><br />
            Please wait the site is Loading ...
        </center>
        </div> 