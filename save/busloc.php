<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "location";
// Create connection
$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$latlng = array();

$sqladc = "SELECT * FROM bus where status = 0";
$res  = $conn->query($sqladc);

while($data = mysqli_fetch_array($res))
{   
	$value = new stdclass;
	$value->id=$data['id'];
	$value->busname=$data['name'];
	$value->lat=$data['lat'];
	$value->lng=$data['lng'];
	$latlng[]=$value;
}

echo json_encode($latlng, JSON_FORCE_OBJECT);

?>