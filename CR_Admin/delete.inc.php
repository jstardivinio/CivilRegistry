<?php

if(isset($_POST['deletebc'])){

	include_once 'conndb.php';


	$bcnum = $_POST['bcnum'];
	

    $sql ="DELETE FROM BIRTH_CERTIFICATE 
	       WHERE BCNumber = '$bcnum'";
	$del = mysqli_query($conn, $sql)or die("Could not delete certificate1:".mysqli_error($conn));

	$sql ="DELETE FROM PARENTS
	       WHERE BNumber = '$bcnum'";
	$del = mysqli_query($conn, $sql)or die("Could not delete certificate2:".mysqli_error($conn));

	$sql ="DELETE FROM BIRTH_FILES
	       WHERE CNumber='$bcnum'";
	$del = mysqli_query($conn, $sql)or die("Could not delete certificate3:".mysqli_error($conn));


	header("Location: all_birth.php?Successful_Delete");
}
elseif(isset($_POST['deletemc'])){

	include_once 'conndb.php';


	$mid = $_POST['mid'];
	

	$sql ="DELETE FROM Marriage_Certificate 
	       WHERE Mar_id='$mid'";

	$del = mysqli_query($conn, $sql)or die("Could not delete certificate:1".mysqli_error($conn));

	$sql ="DELETE FROM Witness
	       WHERE Mar_id = '$mid'";
	$del = mysqli_query($conn, $sql)or die("Could not delete certificate2:".mysqli_error($conn));


	header("Location: all_marriages.php?Successful_Delete");
}
?>