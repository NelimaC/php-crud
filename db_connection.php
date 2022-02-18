<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "assigncrud_app";

// Create connection
$conn = mysqli_connect($host, $user, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}