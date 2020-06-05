<?php


if (isset($_POST['create'])) {
	session_start();
	include_once 'conndb.php';

	//converting the form-data to string for security measures.
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
    $regname=mysqli_real_escape_string($conn, $_POST['regname']);
    $secname=mysqli_real_escape_string($conn, $_POST['secname']);
    $decnum = mysqli_real_escape_string($conn, $_POST['decnum']);
    $deccen = mysqli_real_escape_string($conn, $_POST['deccen']);
    $decname = mysqli_real_escape_string($conn, $_POST['decname']);
    $decpos = mysqli_real_escape_string($conn, $_POST['decpos']);
    $decdate = mysqli_real_escape_string($conn, $_POST['decdate']);



    //error handlers

    //check if input is empty
    if(empty($cname) || empty($cdob) || empty($cpob) || empty($sex) || empty($mname) || empty($mpob) || empty($mdob) ||empty($mocc) || empty($mres) || empty($dissue) || empty($regname) || empty($decnum) || empty($deccen) || empty($decname) || empty($decpos) || empty($secname) || empty($decdate)) {

      header("Location: add_birth.php?input=Empty!");
      exit();
    }
    //check if input is valid
   /* elseif(!preg_match("/^[[:alpha:]\s]*$/", $cname) || !preg_match("/^[[:alnum:]\s]*$ /", $cpob) || !preg_match("/^[[:alpha:]\s]*$/", $fname) || !preg_match("/^[[:alnum:]\s]*$ /", $fpob) || !preg_match("/^[[:alpha:]\s]*$ /", $focc) || !preg_match("/^[[:alnum:]\s]*$ /", $fres) || !preg_match("/^[[:alpha:]\s]*$/", $mname) || !preg_match("/^[[:alnum:]\s]*$ /", $mpob) || !preg_match("/^[[:alpha:]\s]*$ /", $mocc) || !preg_match("/^[[:alnum:]\s]*$ /", $mres) || !preg_match("/^[[:alpha:]\s]*$/", $regname) || !preg_match("/^[[:alnum:]\s]*$/", $deccen) || !preg_match("/^[[:alpha:]\s]*$/", $decname) || !preg_match("/^[[:alpha:]\s]*$/", $decpos) || !preg_match("/^[[:alpha:]\s]*$/", $secname) ){

    	header("Location: add_birth.php?input=Invalid!");
    	exit();
    }
   */
    else{
    	//check if the declaration already exist in the database.
      $sql = "SELECT DecID FROM BIRTH_CERTIFICATE WHERE DecID = '$decnum' AND DCenterID = '$deccen'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
          header("Location: add_birth.php?declatationAlreadyExists");
          exit();
      }
      else{
        


        //Generating certificate number
          $sql = "SELECT * FROM BIRTH_CERTIFICATE";
      $select = mysqli_query($conn, $sql) or die("could not generate BCnumber".mysqli_error($conn));
      $countNum = mysqli_num_rows($select) + 1;
         $certnum = "$countNum"."/19";
	  $subdiv = $_SESSION['subdiv'];


	  //Insert info into the Database
          $sql = "INSERT INTO BIRTH_CERTIFICATE (BCID,CName,CDOB,CSex,CPOB,IDate,RCenterID,Registrar_Name,DecID,DCenterID,DeclarerName,Assistant,DeclarerPost,DecDate)
        VALUES ('$certnum','$cname','$cdob','$sex','$cpob','$dissue','$subdiv','$regname','$decnum','$deccen','$decname','$secname' ,'$decpos', '$decdate')";

        $insert = mysqli_query($conn, $sql);
        if(! $insert){
          die("Could not insert the values4: ". mysqli_error($conn));
       }


       $sql ="SELECT BCNumber from BIRTH_CERTIFICATE WHERE BCID ='$certnum'";
       $get = mysqli_query($conn, $sql) or die("Could not get the values:". mysqli_error($conn));
       $row = mysqli_fetch_assoc($get) or die("Could not fetch the values:". mysqli_error($conn));

        $sql = "INSERT INTO PARENTS (BNumber,FName,FPOB,FDOB,FLOcation,FOccupation,MName,MPOB,MDOB,MLocation,Moccupation)
        VALUES ('{$row['BCNumber']}','$fname','$fpob','$fdob','$fres','$focc','$mname','$mpob','$mdob','$mres','$mocc')";

        $insert = mysqli_query($conn, $sql);
        if(! $insert){
          die("Could not insert the values1: ". mysqli_error($conn));}

	 
       header("Location: all_birth.php?add_sucess");
       
       exit();
     }

    }
   


}


?>