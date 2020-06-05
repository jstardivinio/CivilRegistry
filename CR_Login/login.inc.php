<?php
session_start();

if(isset($_POST['login'])){
	include_once 'conndb.php';

	//converting the form data to string for security measures
	$rid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	//error handlers

	//check if input is empty
	if(empty($rid) || empty($pass)){
		header("Location: index.php?input_empty");
		exit();
	}
	//check if input is valid
	elseif(!preg_match("/^[[:alnum:]\s]*$/", $rid) || !preg_match("/^[[:alnum:]]*$/", $pass) ){
		header("Location: index.php?invalid_input");
		exit();
	}

	//check if user exists
	else{
		$sql = "SELECT * FROM REGISTRY
		        WHERE RID = '$rid'";
		$result = mysqli_query($conn, $sql) or die("Could not get the values:".mysqli_error($conn));
		$resultCheck = mysqli_num_rows($result);

		if(!$resultCheck){
			header("Location: index.php?Wrong_ID_or_password");
			exit();

		}else{
			if($row = mysqli_fetch_assoc($result)){
				if($pass != $row['Password']){
					header("Location: index.php?invalid_ID_or_password");

				}else{
					//Log in the user here.
					$_SESSION['rid'] = $row['RID'];
					$_SESSION['uname'] = $row['RegistryName'];
					$_SESSION['region'] = $row['Region'];
					$_SESSION['division'] = $row['Division'];
					$_SESSION['subdiv'] = $row['SubDivision'];
					$_SESSION['email'] = $row['Email'];
					$_SESSION['tel'] = $row['Tel'];

					header("Location: ../CR_Admin/index.php?Login_success")or die("Could not redirect to home:".mysqli_error($conn));
					exit();

				}
			}else {
				die("Could not fetch values :".mysqli_error($conn));
			}
		}



	}
}else{
	header("Location: index.php?error");
	exit();
}
?>