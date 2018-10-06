<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "location";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$index = $_POST['index'];

$result = $conn->query("SELECT lat,lng FROM bus");

$lat = array();
$lng = array();
$latlng = array();
$temp = array();


$i=0;
while ($row = $result->fetch_assoc()) {
    $latlng['lat'] = $row['lat'];
    $latlng['lng'] = $row['lng'];
    $temp[$i] = json_encode($latlng, JSON_FORCE_OBJECT);
    $i++;
}

// print_r($lat);
// echo 'index:'.$index.', lat: '.$lat[$index].', lng: '.$lng[$index].'<br>';
echo $temp[$index];