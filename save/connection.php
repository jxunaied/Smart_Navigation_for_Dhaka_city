<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "final_project";
// Create connection
$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>