<?php
if(isset($_POST['create'])){
	session_start();
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



	$sql ="SELECT Mar_id FROM Marriage_Certificate WHERE Pub_id = '$pubid' ";
	$retval = mysqli_query($conn, $sql) or die("Could not get values1: ".mysqli_error($conn));
	$cnt = mysqli_num_rows($retval);

	if($cnt > 0){
		header("Location: add_marriage.php?already existing publication.");
		exit();

	}else{
		$subdiv=$_SESSION['subdiv'] ;

		$sql = "INSERT INTO Marriage_Certificate (
		Pub_id,BgName,BgAge,BgFname,Bgmname,BgOcc,BgDOB,BgPOB,Bgres,BrName,BrAge,BrFName,BrMName,BrOcc,BrDOB,BrPOB,BrRes,Mar_type,Prop_type,Reg_Cen,Registrar,DateIssued) 
		VALUES ( '$pubid', '$gname', '$gage', '$gfname', '$gmname', '$gocc', '$gdob', '$gpob', '$gress', '$bname', '$bage', '$bfname', '$bmname', '$bocc', '$bdob', '$bpob', '$bress', '$martype', '$proptype', '$subdiv', '$regname', now() ) ";

		$insert=mysqli_query($conn, $sql) or die("could not insert the values1:".mysqli_error($conn));

		$sql="SELECT Mar_id FROM Marriage_Certificate WHERE Pub_id ='$pubid' ";
		$getpub = mysqli_query($conn, $sql) or die("could not get the values2:".mysqli_error($conn));
		$mar = mysqli_fetch_assoc($getpub) or die("could not fetch the values:".mysqli_error($conn));

		$sql="INSERT INTO Witness(Mar_id,BgWitness1,BgWitness2,BrWitness1,BrWitness2)
		      VALUES ('{$mar['Mar_id']}','$gwit1','$gwit2','$bwit1','$bwit2')";
		$insert = mysqli_query($conn, $sql) or die("could not insert the values2:".mysqli_error($conn));

		header("Location: all_marriages.php?Successfully_created");
		exit();
	}

	
}else{echo "post values"; }
?>