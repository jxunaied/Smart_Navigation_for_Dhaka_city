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

$sql = "SELECT * FROM bus_stop order by name ASC";

$result = mysqli_query($conn,$sql);
$x = '<option>Select BusStop</option>';

while($row = mysqli_fetch_assoc($result))
{   

	$x .= '<option value="'.$row['l_lat'].' ,'.$row['l_lng'].' ">'.$row['name'].'</option>';
}

echo $x;

?>