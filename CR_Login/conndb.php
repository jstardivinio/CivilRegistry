<?php
//database connection
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "REGISTRY_ADMIN";

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName) or die("Could not connect to database: ". mysqli_error());
?>