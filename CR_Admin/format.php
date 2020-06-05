<?php 
include_once 'conndb.php';
session_start();

$bcnum = 7;

	//query to get information from the database.
	$sql = "SELECT * FROM BIRTH_CERTIFICATE a, PARENTS b 
	WHERE a.BCNumber = '$bcnum' AND b.BNumber = '$bcnum' ";

	$select = mysqli_query($conn, $sql) or die("Could not get the data".mysqli_error($conn));

	$row = mysqli_fetch_assoc($select) or die('Could not fetch the values'.mysqli_error($conn)); 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <style type="text/css">
    a {text-decoration: none}
  </style>
</head>
<body text="#000000" link="#000000" alink="#000000" vlink="#000000">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td width="50%">&nbsp;</td><td align="center">

<a name="JR_PAGE_ANCHOR_0_1"></a>
<table class="jrPage" cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 595px; border-collapse: collapse; background-color: white;">
<tr valign="top" style="height:0">
<td style="width:20px"></td>
<td style="width:10px"></td>
<td style="width:2px"></td>
<td style="width:8px"></td>
<td style="width:7px"></td>
<td style="width:3px"></td>
<td style="width:10px"></td>
<td style="width:20px"></td>
<td style="width:10px"></td>
<td style="width:9px"></td>
<td style="width:1px"></td>
<td style="width:30px"></td>
<td style="width:10px"></td>
<td style="width:6px"></td>
<td style="width:4px"></td>
<td style="width:1px"></td>
<td style="width:9px"></td>
<td style="width:2px"></td>
<td style="width:5px"></td>
<td style="width:3px"></td>
<td style="width:7px"></td>
<td style="width:3px"></td>
<td style="width:20px"></td>
<td style="width:10px"></td>
<td style="width:30px"></td>
<td style="width:7px"></td>
<td style="width:13px"></td>
<td style="width:19px"></td>
<td style="width:1px"></td>
<td style="width:61px"></td>
<td style="width:6px"></td>
<td style="width:13px"></td>
<td style="width:37px"></td>
<td style="width:13px"></td>
<td style="width:10px"></td>
<td style="width:17px"></td>
<td style="width:3px"></td>
<td style="width:100px"></td>
<td style="width:8px"></td>
<td style="width:2px"></td>
<td style="width:8px"></td>
<td style="width:1px"></td>
<td style="width:2px"></td>
<td style="width:34px"></td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="44">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="23">
</td>
<td colspan="11" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REPUBLIQUE DU CAMEROUN</span></td>
<td colspan="10">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="26">
</td>
<td colspan="5" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Paix - Travail - Patrie</span></td>
<td colspan="13">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="24">
</td>
<td colspan="9" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REPUBLIC OF CAMEROON</span></td>
<td colspan="11">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="25">
</td>
<td colspan="7" rowspan="3" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Peace - Work - Fatherland</span></td>
<td colspan="12">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="25">
</td>
<td colspan="5">
</td>
<td rowspan="4" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REGION</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="7">
</td>
<td colspan="10" rowspan="4" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">REGION</span></td>
<td colspan="8">
</td>
<td colspan="5">
</td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="7">
</td>
<td colspan="10">
</td>
<td colspan="3" style="border-top: 2px solid #000000; ">
</td>
<td colspan="7">
</td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="7">
</td>
<td colspan="20">
</td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="7">
</td>
<td colspan="27">
</td>
</tr>
<tr valign="top" style="height:19px">
<td colspan="4">
</td>
<td colspan="18">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:140px"></td>
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
<td style="width:20px"></td>
<td style="width:100px"></td>
<td style="width:20px"></td>
</tr>
<tr valign="top" style="height:19px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">SOUTH WEST</span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="15">
</td>
<td style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">SOUTH WEST</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="35">
</td>
<td colspan="7" style="border-top: 1px solid #000000; ">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="44">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="7">
</td>
<td colspan="10" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">DEPARTEMENT</span></td>
<td colspan="20">
</td>
<td style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">DIVISION</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="7">
</td>
<td colspan="10" rowspan="2" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">FAKO</span></td>
<td colspan="20">
</td>
<td style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">FAKO</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="7">
</td>
<td colspan="27">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="4">
</td>
<td colspan="18" style="border-top: 1px solid #000000; ">
</td>
<td colspan="13">
</td>
<td colspan="7" style="border-top: 1px solid #000000; ">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="44">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="5">
</td>
<td colspan="16" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">ARRONDISSEMENT</span></td>
<td colspan="16">
</td>
<td style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 13px; line-height: 1.2578125; font-weight: bold;">SUBDIVISION</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="7">
</td>
<td colspan="10" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">BUEA</span></td>
<td colspan="20">
</td>
<td style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">BUEA</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="4">
</td>
<td colspan="18" style="border-top: 1px solid #000000; ">
</td>
<td colspan="13">
</td>
<td colspan="7" style="border-top: 1px solid #000000; ">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="44">
</td>
</tr>
<tr valign="top" style="height:60px">
<td>
</td>
<td colspan="38">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:30px"></td>
<td style="width:40px"></td>
<td style="width:139px"></td>
<td style="width:319px"></td>
</tr>
<tr valign="top" style="height:30px">
<td>
</td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.2578125; font-weight: bold;">CENTRE D'ETAT CIVIL</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.2578125;">De - Of</span></td>
<td colspan="2">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:478px"></td>
</tr>
<tr valign="top" style="height:50px">
<td>
</td>
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:478px"></td>
</tr>
<tr valign="top" style="height:45px">
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:460px"></td>
<td style="width:18px"></td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.2578125;">BUEA</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:159px"></td>
<td style="width:319px"></td>
</tr>
<tr valign="top" style="height:30px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.2578125;">/ CIVIL STATUS REGISTRATION CENTRE</span></td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="2">
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="5">
</td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="6">
</td>
<td colspan="22" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.2578125; font-weight: bold;">ACTE DE NAISSANCE</span></td>
<td>
</td>
<td colspan="9" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.2578125;">/ BIRTH CERTIFICATE</span></td>
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:40px">
<td colspan="13">
</td>
<td colspan="23">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:37px"></td>
<td style="width:260px"></td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:30px">
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
<td style="width:17px"></td>
<td style="width:2px"></td>
<td style="width:277px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="2">
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.2578125;">1/19</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td>
</td>
<td colspan="3" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="4">
</td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="8">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="12">
</td>
<td colspan="28" rowspan="2" style="text-indent: 0px; text-align: center;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.2578125;"> <?php echo $row['CName']; ?> </span></td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td colspan="10" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Nom de l'enfant</span></td>
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:40px">
<td colspan="2">
</td>
<td colspan="39">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:87px"></td>
<td style="width:441px"></td>
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
<td style="width:70px"></td>
<td style="width:30px"></td>
<td style="width:30px"></td>
<td style="width:390px"></td>
<td style="width:8px"></td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="2" rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Name of the child</span></td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:10px">
<td>
</td>
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">21/08/19 00:00</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125; font-weight: bold;">Né le</span></td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; line-height: 1.2578125;">Static Text</span></td>
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
<td colspan="15">
</td>
<td colspan="26" style="border-top: 1px solid #000000; ">
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="44">
</td>
</tr>
<tr valign="top" style="height:6px">
<td colspan="15">
</td>
<td colspan="26" rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:408px"></td>
</tr>
<tr valign="top" style="height:26px">
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
<td style="width:408px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Buea</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td colspan="6" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">A</span></td>
<td colspan="4" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="3">
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:4px">
<td colspan="15">
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:6px">
<td colspan="16">
</td>
<td colspan="26" rowspan="2" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Male</span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:18px">
<td colspan="2">
</td>
<td colspan="7" rowspan="2" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">De sexe</span></td>
<td colspan="4" rowspan="2" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="3">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:3px">
<td colspan="2">
</td>
<td>
</td>
<td colspan="27" rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:412px"></td>
</tr>
<tr valign="top" style="height:2px">
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
<td style="width:4px"></td>
<td style="width:408px"></td>
</tr>
<tr valign="top" style="height:30px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Tchokokam Henry</span></td>
</tr>
</table>
</div>
</div>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="14">
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:18px">
<td colspan="2">
</td>
<td colspan="11" rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:60px"></td>
<td style="width:50px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">De</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:50px"></td>
<td style="width:60px"></td>
</tr>
<tr valign="top" style="height:20px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
</div>
</td>
<td>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="2">
</td>
<td colspan="31">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="14">
</td>
<td colspan="28" style="border-top: 1px solid #000000; ">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:119px">
<td colspan="2">
</td>
<td colspan="40">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:51px"></td>
<td style="width:9px"></td>
<td style="width:399px"></td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Né à</span></td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="3">
</td>
<td style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:53px"></td>
<td style="width:16px"></td>
<td style="width:1px"></td>
<td style="width:381px"></td>
<td style="width:8px"></td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="2">
</td>
<td colspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Bafoussam</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:20px">
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Le</span></td>
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="3">
</td>
<td colspan="2" style="pointer-events: auto; background-color: #FFFFFF; border-top: 1px solid #000000; ">
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:529px"></td>
</tr>
<tr valign="top" style="height:29px">
<td>
</td>
</tr>
<tr valign="top" style="height:90px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:140px"></td>
<td style="width:388px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:30px">
<td>
</td>
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">21/08/19 00:00</span></td>
<td>
</td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:70px"></td>
<td style="width:10px"></td>
<td style="width:57px"></td>
<td style="width:13px"></td>
<td style="width:378px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:27px">
<td colspan="6">
</td>
</tr>
<tr valign="top" style="height:13px">
<td colspan="4">
</td>
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Buea</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:17px">
<td colspan="2" rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Domicilié à</span></td>
<td colspan="2" rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="2" rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:379px"></td>
</tr>
<tr valign="top" style="height:2px">
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
<td style="width:378px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Farmer</span></td>
<td>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="4">
</td>
</tr>
<tr valign="top" style="height:18px">
<td rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Profession</span></td>
<td colspan="2" rowspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:2px">
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
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="20">
</td>
<td colspan="22" rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:389px"></td>
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
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
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
<td colspan="9" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Nationalité</span></td>
<td colspan="8" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td>
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="20">
</td>
<td colspan="22" style="border-top: 1px solid #000000; ">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:9px">
<td colspan="20">
</td>
<td colspan="22" rowspan="3">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:388px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:29px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
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
<td style="width:389px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
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
<td colspan="9" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="8" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td>
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="20">
</td>
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
<td colspan="44">
</td>
</tr>
<tr valign="top" style="height:8px">
<td colspan="20">
</td>
<td colspan="21" rowspan="3" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:20px">
<td colspan="2">
</td>
<td colspan="9" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="8" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td>
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:2px">
<td colspan="20">
</td>
<td colspan="3">
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="18">
</td>
<td colspan="25" rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:10px"></td>
<td style="width:388px"></td>
<td style="width:1px"></td>
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
<td style="width:399px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
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
<td colspan="7" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td colspan="8" style="text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
<td>
</td>
</tr>
<tr valign="top" style="height:10px">
<td colspan="18">
</td>
<td colspan="25" rowspan="2">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:398px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:1px">
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
<td style="width:398px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:30px">
<td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
</tr>
<tr valign="top" style="height:1px">
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
<td style="width:399px"></td>
</tr>
<tr valign="top" style="height:10px">
<td>
</td>
</tr>
<tr valign="top" style="height:30px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:398px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:29px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
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
<td style="width:399px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:398px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:29px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
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
<td style="width:399px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:398px"></td>
<td style="width:1px"></td>
</tr>
<tr valign="top" style="height:29px">
<td colspan="2">
</td>
</tr>
<tr valign="top" style="height:1px">
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
<td style="width:399px"></td>
</tr>
<tr valign="top" style="height:30px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Text Field</span></td>
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
<tr valign="top" style="height:30px">
<td colspan="3">
</td>
<td colspan="7">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
</tr>
<tr valign="top" style="height:10px">
<td>
</td>
</tr>
<tr valign="top" style="height:20px">
<td>
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:67px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
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
<td colspan="8">
<div style="width: 100%; height: 100%; position: relative;">
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:63px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:63px"></td>
</tr>
<tr valign="top" style="height:10px">
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
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
<div style="position: absolute; overflow: hidden; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:63px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
</tr>
</table>
</div>
<div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
<table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
<tr valign="top" style="height:0">
<td style="width:63px"></td>
</tr>
<tr valign="top" style="height:20px">
<td style="pointer-events: auto; text-indent: 0px; text-align: left;">
<span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.2578125;">Static Text</span></td>
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
<td colspan="44">
</td>
</tr>
</table>

</td><td width="50%">&nbsp;</td></tr>
</table>
</body>
</html>
