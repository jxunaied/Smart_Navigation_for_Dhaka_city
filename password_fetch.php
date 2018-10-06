<?php
include_once('connection.php');
$old_pass =$_POST['old_pass'];
$new_pass =$_POST['new_pass'];

session_start();
$userid = $_SESSION['id'];

if($conn->query("SELECT password FROM user WHERE user.id = '$userid'")->fetch_object()->password == $old_pass){
    $conn->query("UPDATE user SET password = '$new_pass' WHERE user.id = '$userid'");
    echo 'password changed';
 } else{
    echo 'wrong password';
 }

?>