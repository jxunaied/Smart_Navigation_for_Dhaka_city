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

$latlng = array();

$sqladc = "SELECT * FROM bus_stop ";
$res  = $conn->query($sqladc);

while($data = mysqli_fetch_array($res))
{   
	$value = new stdclass;
	$value->id=$data['bus_stop_id'];
	$value->busstopname=$data['name'];
	$value->lat=$data['l_lat'];
	$value->lng=$data['l_lng'];
	$latlng[]=$value;
}
echo json_encode($latlng, JSON_FORCE_OBJECT);

?>