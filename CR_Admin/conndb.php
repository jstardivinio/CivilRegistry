<?php
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "CIVIL_STATUS_REGISTRY";

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName) or die("Could not connect to database: ". mysqli_error());


?>
