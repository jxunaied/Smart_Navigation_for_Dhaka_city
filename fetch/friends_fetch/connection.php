<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "final_project";
  // $dbhost = "localhost";
  // $dbuser = "pointerror_chat";
  // $dbpass = "CVNJB-XVD7X-T392H-RQQTV-9BT4M";
  // $dbname = "pointerror_chat";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
    }
    
?>