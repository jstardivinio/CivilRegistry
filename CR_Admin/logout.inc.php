<?php

	session_start();
	session_unset();
	session_destroy();
	header("Location: ../CR_Login/index.php");

?>