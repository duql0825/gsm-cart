<?php
session_start();

$servername = "13.209.36.194";
$username = "root";
$password = "gsmcart";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,"alfk");
 // echo "Connected successfully";
?>
