<?php

if(isset($_POST['edit'])){
	include_once 'conndb.php';

	//converting input to string for security measures
    $gname = mysqli_real_escape_string($conn, $_POST['gname']);
    $gage = mysqli_real_escape_string($conn, $_POST['gage']);
    $gfname = mysqli_real_escape_string($conn, $_POST['gfname']);
    $gmname = mysqli_real_escape_string($conn, $_POST['gmname']);
    $gocc = mysqli_real_escape_string($conn, $_POST['gocc']);
    $gdob = mysqli_real_escape_string($conn, $_POST['gdob']);
    $gpob = mysqli_real_escape_string($conn, $_POST['gpob']);
    $gress = mysqli_real_escape_string($conn, $_POST['gress']);
    $bname = mysqli_real_escape_string($conn, $_POST['bname']);
    $bage = mysqli_real_escape_string($conn, $_POST['bage']);
    $bfname = mysqli_real_escape_string($conn, $_POST['bfname']);
    $bmname = mysqli_real_escape_string($conn, $_POST['bmname']);
    $bocc = mysqli_real_escape_string($conn, $_POST['bocc']);
    $bdob = mysqli_real_escape_string($conn, $_POST['bdob']);
    $bpob = mysqli_real_escape_string($conn, $_POST['bpob']);
    $bress = mysqli_real_escape_string($conn, $_POST['bress']);
    $martype = mysqli_real_escape_string($conn, $_POST['martype']);
    $proptype = mysqli_real_escape_string($conn, $_POST['proptype']);
    $gwit1 = mysqli_real_escape_string($conn, $_POST['gwit1']);
    $gwit2 = mysqli_real_escape_string($conn, $_POST['gwit2']);
    $bwit1 = mysqli_real_escape_string($conn, $_POST['bwit1']);
    $bwit2 = mysqli_real_escape_string($conn, $_POST['bwit2']);
    $pubid = mysqli_real_escape_string($conn, $_POST['pubid']);
    $regname = mysqli_real_escape_string($conn, $_POST['regname']);
    $mid = mysqli_real_escape_string($conn, $_POST['mid']);


    //error handlers

    //check for empty input
    /*
    if(empty($cname) || empty($cdob) || empty($cpob) || empty($sex) || empty($mname) || empty($mid) || empty($mpob) || empty($mdob) ||empty($mocc) || empty($mres) ) {
      header("Location: edit_birth.php?input=Empty!");
      exit();
    }
    */
    
    	$sql = "UPDATE Marriage_Certificate, Witness
    	        SET Marriage_Certificate.BgName='$gname',Marriage_Certificate.BgAge='$gage',Marriage_Certificate.BgFName='gfname',Marriage_Certificate.BgMName='$gmname',Marriage_Certificate.BgOcc='$gocc',Marriage_Certificate.BgDOB='$gdob',Marriage_Certificate.BgPOB='$gpob',Marriage_Certificate.BgRes='$gress', Marriage_Certificate.BrName='$bname',Marriage_Certificate.BrAge='$bage',Marriage_Certificate.BrFName='$bfname',Marriage_Certificate.BrMName='$bmname',Marriage_Certificate.BrOcc='$bocc',Marriage_Certificate.BrDOB='$bdob',Marriage_Certificate.BrPOB='$bpob',Marriage_Certificate.BrRes='$bress',Marriage_Certificate.Mar_type='$martype',Marriage_Certificate.Prop_type='$proptype',Marriage_Certificate.Pub_id='$pubid',Marriage_Certificate.Registrar='$regname',Witness.BgWitness1='$gwit1',Witness.BgWitness2='$gwit2',Witness.BrWitness1='$bwit1',Witness.BrWitness2='$bwit2'
    	        WHERE 
    	            Marriage_Certificate.Mar_id='$mid'AND Witness.Mar_id='$mid'" ;

    	$update = mysqli_query($conn, $sql) or die("could not update the certificate:".mysqli_error($conn));

    	 

          header("Location: all_marriages.php?Successful_update");
          exit();
    
}
else {
	header("Location: edit_marriages.php?form_not_submitted");
	exit();
}
?>