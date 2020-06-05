<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Admin";

$conn = mysqli_connect($dbServername,
$dbUsername,
$dbPassword,
$dbName);

session_start();
