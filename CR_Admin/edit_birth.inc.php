<?php

if(isset($_POST['edit'])){
	include_once 'conndb.php';

	//converting the form-data to string for security measures.
	$bcnum = mysqli_real_escape_string($conn, $_POST['bcnum']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $cdob = mysqli_real_escape_string($conn, $_POST['cdob']);
    $cpob = mysqli_real_escape_string($conn, $_POST['cpob']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $fpob = mysqli_real_escape_string($conn, $_POST['fpob']);
    $fdob = mysqli_real_escape_string($conn, $_POST['fdob']);
    $focc = mysqli_real_escape_string($conn, $_POST['focc']);
    $fres = mysqli_real_escape_string($conn, $_POST['fres']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $mpob = mysqli_real_escape_string($conn, $_POST['mpob']);
    $mdob = mysqli_real_escape_string($conn, $_POST['mdob']);
    $mocc = mysqli_real_escape_string($conn, $_POST['mocc']);
    $mres = mysqli_real_escape_string($conn, $_POST['mres']);
    $dissue = mysqli_real_escape_string($conn, $_POST['dissue']);
    $regname= mysqli_real_escape_string($conn, $_POST['regname']);
    $decid = mysqli_real_escape_string($conn, $_POST['decid']);
    $deccen = mysqli_real_escape_string($conn, $_POST['deccen']);
    $decname = mysqli_real_escape_string($conn, $_POST['decname']);
    $decpos = mysqli_real_escape_string($conn, $_POST['decpos']);
    //$decdate = mysqli_real_escape_string($conn, $_POST['decdate']);

    //error handlers

    //check for empty input
    if(empty($cname) || empty($cdob) || empty($cpob) || empty($sex) || empty($mname) || empty($mpob) || empty($mdob) ||empty($mocc) || empty($mres) ) {
      header("Location: edit_birth.php?input=Empty!");
      exit();
    }
    else{
    	$sql = "UPDATE BIRTH_CERTIFICATE, PARENTS
    	        SET  PARENTS.MName = '$mname', PARENTS.MPOB = '$mpob', PARENTS.MDOB = '$mdob', PARENTS.MLocation = '$mres', PARENTS.MOccupation = '$mocc', PARENTS.FName = '$fname',PARENTS.FPOB = '$fpob',PARENTS.FDOB = '$fdob', PARENTS.FLocation = '$fres', PARENTS.FOccupation = '$focc', BIRTH_CERTIFICATE.CName = '$cname', BIRTH_CERTIFICATE.CDOB ='$cdob', BIRTH_CERTIFICATE.CPOB ='$cpob', BIRTH_CERTIFICATE.CSex ='$sex', BIRTH_CERTIFICATE.IDate = '$dissue', BIRTH_CERTIFICATE.DCenterID = '$deccen', BIRTH_CERTIFICATE.DecID = '$decid', BIRTH_CERTIFICATE.Registrar_Name = '$regname', BIRTH_CERTIFICATE.DeclarerName = '$decname', BIRTH_CERTIFICATE.DeclarerPost = '$decpos' 
    	        WHERE 
    	            BIRTH_CERTIFICATE.BCNumber ='$bcnum' AND PARENTS.BNumber='$bcnum'";

    	$update = mysqli_query($conn, $sql) or die("could not update the certificate:".mysqli_error($conn));

    	 

          header("Location: all_birth.php?Successful_update");
          exit();
    }
}
else {
	header("Location: edit_birth.php?form_not_submitted");
	exit();
}
?>