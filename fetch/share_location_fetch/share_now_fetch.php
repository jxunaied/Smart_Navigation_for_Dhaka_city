<?php

include_once('connection.php');

$friend = $_POST['friend'];


session_start();
$userid = $_SESSION['id'];

if($friend != ''){
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    //$add_name = $_POST['addname'];
   
    $conn->query("INSERT INTO share_location (user_from, user_to, lat, lng, time,address) VALUES
    ('$userid', '$friend', '$lat', '$lng', CURRENT_TIMESTAMP,'Unnamed Road,Dhaka')");
  
}


