<?php

$dbServername = "localhost";
$dbUsername = "tamch6k9_user";
$dbPassword = "DRagKt2AaH";
$dbName = "	tamch6k9_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
