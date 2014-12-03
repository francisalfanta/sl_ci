<?php
ob_start();
//error_reporting(0);
ini_set("display_errors",0);
session_start();
define('DS', DIRECTORY_SEPARATOR );
define('BASE_PATH', realpath(dirname(".")));
define('BASE_URL', "http://".$_SERVER['HTTP_HOST']."/local_host");

include "connect.php";
include "tesfunction.php";

// 
if(!isset($_SESSION["staff"])){
	header("location:index.php");
}
$sql="select * from tb_staff where username='$_SESSION[staff]'";
$rs=mysql_query($sql);
$fetch=mysql_fetch_array($rs);
$xposition=$fetch['position'];
$xaccount=$fetch['account'];
$staff_idx=$fetch['id_number'];

define("STAFF_ID",$fetch['id_number']);
function show_content_staff($page,$id_staff) {
	$parent=(isset($_GET['parent'])? "and parent='".str_replace('_',' ',$_GET['parent'])."'":"");
	$query=mysql_query("SELECT * FROM tb_staff_menu WHERE `send_value`='".ltrim(trim(mysql_real_escape_string($page)))."' and `active`='1' $parent LIMIT 1");

	$rs=mysql_fetch_array($query);
	$cek=mysql_num_rows(mysql_query("SELECT id FROM tb_mstaff where id_staff='".STAFF_ID."' AND id_menu='$rs[id]'"));
	if($_SESSION['acc']=='IT' or $_SESSION['acc']=='manager' and $page=='menu_manager')
	{
		include $rs['include'];
	}
	elseif($cek=='' or $cek==0){
		echo"<div style=\"padding:15px; font-size:16px;font-weight:bold; color:#930;\">You do not have authorization for access this page</div>";
	}else{
		include $rs['include'];
	}
	
}
$r = mysql_fetch_array(mysql_query("SELECT count(*) as count FROM `tb_company_mail` WHERE `to`='".$_SESSION['staff']."' and `status`='0'"));
$id_number=mysql_fetch_array(mysql_query("select id_number from tb_staff where username='$_SESSION[staff]' limit 1"));
$todolist_count=mysql_fetch_array(mysql_query("SELECT count(*) as count FROM `tb_todolist` WHERE LOWER(`status`) IN('open','on progress') and staff_id='$id_number[id_number]'"));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Staff Panel</title>
<link rel="shortcut icon" href="./includes/login/images/fav.ico"> 

<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/jquery-1.7.min.js"></script>
<script src="<?php echo BASE_URL ?>/js/ui/minified/jquery-ui.min.js" type="text/javascript"></script>
<link href="staff_style.css" type="text/css" rel="stylesheet" media="all" />
<link href="<?php echo BASE_URL ?>/js/ui/themes/blitzer/jquery.ui.all.css" type="text/css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/flexgrid/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/flexgrid/js/flexigrid.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/includes/js/flexgrid/css/flexigrid.pack.css">
<link href="<?php echo BASE_URL ?>/includes/js/jqvalidation/bvalidator.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo BASE_URL ?>/includes/js/jqvalidation/themes/bvalidator.theme.red.css" rel="stylesheet" type="text/css" media="all" />
<script src="<?php echo BASE_URL ?>/includes/js/jqvalidation/jquery.bvalidator.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/jsadmin/simple_datepicker.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/jsadmin/jquery.timeentry.min.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL ?>/includes/js/jsadmin/simple_datepicker.css">
<link rel="stylesheet" href="<?php echo BASE_URL ?>/includes/js/jqshort/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/jqshort/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>/includes/js/jqshort/jquery.tablesorter.pager.js"></script>
<script type="application/javascript" src="<?php echo BASE_URL; ?>/includes/js/jsadmin/jquery.jeditable.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/includes/js/jsadmin/jquery.fcbkcomplete.min.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL; ?>/includes/js/jsadmin/style_user_select.css"> 
<link type="text/css" rel="stylesheet" media="all" href="<?php echo BASE_URL; ?>/includes/js/jsadmin/jquery.wysiwyg.css">
<script type="text/javascript" src="./includes/js/stickytooltip.js"></script>
<link rel="stylesheet" type="text/css" href="./includes/js/stickytooltip.css" />
<script type="text/javascript" src="./includes/js/valstaff.js"></script>
<link href='<?php echo BASE_URL; ?>/includes/js/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo BASE_URL; ?>/includes/js/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo BASE_URL; ?>/includes/js/fullcalendar/fullcalendar.min.js'></scrip 
<script type="text/javascript">
$(document).ready(function(){
	$(".success").delay(2000).fadeOut(1000);
	$(".error").delay(2000).fadeOut(1000);	
});
</script>
<script>
/* CONTENT FIXED */
$(window).ready(function(){
	$('#sidebar,#wrapper').css({'height':$(document).height()+'px'});
	
	
	$("#nav > li > a").on("click", function(e){
	if($(this).parent().has("ul")) {
      e.preventDefault();
    }
    
    if(!$(this).hasClass("open")) {
      // hide any open menus and remove all other classes
      $("#nav li ul").slideUp(350);
      $("#nav li a").removeClass("open");
      
      // open our new menu and add the open class
      $(this).next("ul").slideDown(350);
      $(this).addClass("open");
    }
    
    else if($(this).hasClass("open")) {
      $(this).removeClass("open");
      $(this).next("ul").slideUp(350);
    }
  });
});

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#history_manager").click(function(){
			//change action form
			//$('#modalform').attr('action', 'history_manager.php?act=edit');
			alert(1);
		});
	});

</script>
<script type="text/javascript">
function show_setting()
{
	$('#setting').dialog({ 
	autoOpen: false,
	width: 600,
	resizable: true,
	height:'auto',
	draggable: true,
	modal: true
	});
	
	$('#setting').dialog('open');
	$('#setting p').html("Please wait...").load("setting_account.php?act=form");
}
</script>
</head>
<body  id="sign-up">
	<div id="sidebar">
    	<div id="logo">
        	<h3 class="txt_logo">Staff Panel</h3>
        </div>
        
        <hr class="sp_sidebar" />
        <!-- Navigation -->
        <nav>
          <ul id="nav">
            <li><a href="#"><img src="images/topnav/home.png" style="margin-top:-3px;"/>Dashboard</a>		
            	<ul <?php echo "".(str_replace(" ","_",$sel)==$_GET['parent'] ? "style='display:block;'":"")."";?>>
                    <li><a href="javascript:void(0)" onClick="window.location='home.php'" >Home</a></li>
                    <li><a href="javascript:void(0)" onClick="window.location='home.php?page=staff_profile'">Profile</a></li>
                    <li><a href="javascript:void(0)" onClick="window.location='home.php?page=todolist'">Todolist &nbsp; <?php if($todolist_count['count']!=0){ ?><span class="msg_alert"><?php echo $todolist_count['count'];?></span> <?php } ?></a></li>
                    <li><a href="javascript:void(0)" onClick="window.location='home.php'">Message</a></li>
                    <li><a href="javascript:void(0)" onClick="show_setting()">Setting</a></li>
                    <li><a href="javascript:void(0)" onClick="window.location='home.php?page=event'">Event</a></li>
                    <li><a href="logout.php?curl=<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" >Logout</a></li>
              </ul>
            </li>
            <?php
			include "connect.php";
			$ra=mysql_fetch_array(mysql_query("select * from tb_staff where username='$_SESSION[staff]' LIMIT 1"));
	$query=mysql_query("select * from tb_staff_menu where `active`='1' and `parent`='' order by `order` asc");
	$sel="";
	while($rs=mysql_fetch_array($query)) {
		$q1=mysql_query("select * from tb_staff_menu a,tb_mstaff b where a.parent='$rs[menu]' and a.id=b.id_menu and b.id_staff='$ra[0]' and a.`active`='1' order by `menu` asc");
		if(mysql_num_rows($q1)>=1) {
			if($rs['menu']=='dashboard')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/home.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='human resource')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='reception')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='switching')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='secretary')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='sales')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='finance')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='public relation')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			if($rs['menu']=='information technology')
			{
				echo "<li><a href=\"#\"><img src=\"images/topnav/users.png\" style=\"margin-top:-3px;\" />".ucwords($rs['menu'])."</a>";
			}
			$str_ul="";
			$sel=array();
			while($r1=mysql_fetch_array($q1)) {
				$str_ul.="<li><a href='$r1[url]&parent=".str_replace(" ","_",$r1['parent'])."'>".ucwords($r1['menu'])."</a></li>";
				$sel=$r1['parent'];
			}
			$html="<ul ".(str_replace(" ","_",$sel)==$_GET['parent'] ? "style='display:block;'":"").">";
			$html.=$str_ul;
			$html.="</ul>";
			echo $html;
			echo "</li>";
		}
	}
	
	if($_SESSION['acc']=='IT' or $_SESSION['staff']=='admin'){
	echo "
	 <li><a href=\"#\"><img src=\"images/topnav/monthCalendar.png\" style=\"margin-top:-3px;\" />Administrator</a>
              <ul>
                <li><a href='home.php?page=menu_manager&sub=add_menu' >Staff Menu</a></li>
		<li><a href='home.php?page=menu_manager&sub=priviledge' >Priviledge</a></li>
		<li><a href='home.php?page=menu_manager&sub=finger_print' >Finger Print Management</a></li>
              	<li><a href='home.php?page=browser_log' >Browser Log</a></li>
              </ul>
            </li>
	
	";
	}	
			?>
          </ul>
    </nav>
    </div>
    
<div id="header">    
    	<ul id="info">
        	<li class="first"><img src="<?php echo ($fetch['safe_login']=="no" ? "images/topnav/userPic.png":"images/topnav/userPic_safe.png") ?>" />Welcome, <?php echo ucfirst($_SESSION['staff']); ?></li>
            
            <li class="right" style="padding-right:20px;"><a href="logout.php?curl=<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>"><img src="images/topnav/logout.png" />Logout</a></li>
            <li class="right"><a href="javascript:void(0)" onClick="show_setting()"><img src="images/topnav/settings.png" />Setting</a></li>
            <li class="right"><a href="home.php"><img src="images/topnav/messages.png" />Message <?php if($r['count']!=0){ ?><span class="msg_alert"><?php echo $r['count'];?></span> <?php } ?></a></li>
            <li class="right"><a href="home.php?page=todolist"><img src="images/topnav/messages.png" />Todolist <?php if($todolist_count['count']!=0){ ?><span class="msg_alert"><?php echo $todolist_count['count'];?></span> <?php } ?></a></li>
            <li class="right"><a href="home.php?page=staff_profile"><img src="images/topnav/profile.png" />Profile</a></li>
            <li class="right"><a href="home.php?page=event"><img src="images/topnav/monthCalendar.png" style="margin-top:-3px;" />Event</a></li>
            <li class="right"><a href="home.php"><img src="images/topnav/home.png" style="margin-top:-3px;" />Home</a></li>
           
        </ul>
        <br style="clear:right;" />
    </div>
    
    <div id="content">
    	<div id="wrap_content">
            <h3 class="page_title">
	     	   <?php
		    	//message setting account
		    	if(!empty($_GET['msgsetting']))
			{
				if($_GET['msgsetting'] == 'success')
				{
					echo "<center><span class=\"success\"><strong><font color='#999'>Update Data is completed successfully.......</font></strong></span></center>";
				}
				else if($_GET['msgsetting'] == 'error')
				{
					echo "<center><span class=\"error\"><strong><font color='#FF3333'>Update Data is failed.......</font></strong></span></center>";
				}
			}
			//end message setting account
			if($_GET['page']==''){echo "Welcome to Goldex Telecom Staff Panel";} 
			else{
				//$get_page=mysql_fetch_array(mysql_query("select parent,menu from tb_staff_menu where send_value='$_GET[page]'"));
				//echo "".ucfirst($get_page['parent'])." Page";
				//preg_replace
				$this_page=preg_replace("/_/"," ",$_GET['parent']);
				if($_GET['parent']==''){
					$page_expl=explode("_",$_GET['page']);
					echo "".ucwords($page_expl[0])." ".ucwords($page_expl[1])." Page";	
				}else{
				echo "".ucwords($this_page)." Page";
				}
				
			}
			?>
            </h3>
        	
            <div id='content-effect' class='ui-widget-content ui-corner-all'>
	        <?php
		if($_GET["page"]=="home" or $_GET["page"]=="") {
			//include "tesfunction.php";
		include "./vmail/index_vmail.php";
		} else if($_GET['page'] == "staff_profile") {
		include "staff_profile.php";
		log_history("Access staff profile page");
		}  else if($_GET['page'] == "todolist") {
		include "todolist.php";
		log_history("Access staff todolist page");
		}else if($_GET['page'] == "reg_edit_profile") {
		include "reg_edit_profile.php";
		log_history("Access staff request edit profile page");
		} else if($_GET['page'] == "event") {
		include "event.php";
		log_history("Access staff request calender event page");
		}/*else if($_GET['page'] == "setting_account") {
		include "setting_account.php";
		log_history("Access staff setting account page");
		}*/ else if($_GET['page'] == "index_history") {
		include "history_manager.php";
		} else if($_GET['page'] == "staff_expenses") {
		include "staff_expenses.php";
		}else if($_GET['page'] == "browser_log"){
		include"browser_log.php";
		}else{
		show_content_staff($_GET['page'],$staff_idx);
		}
		?>
        </div>
    </div>
    <!--<div id="footer">Powered by Goldex Telecom  &copy; 2013</div>-->
    <div style="position : fixed;left:7px;bottom : 0;height : 40px;margin-top : 40px;z-index:100; color:#FFF;"> Powered by Pharaohs  &copy; 2013 </div>
</div>
<!--Dialog setting-->
<div id="setting" style="display:none;" align="left" title="Setting Login Account">
<p></p>
</div>
</body>
</html>
