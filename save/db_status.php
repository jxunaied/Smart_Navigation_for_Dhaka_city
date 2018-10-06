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

$bus_relation = array();
$bus_serial = array();
$sid = $_POST["sid"];
$did = $_POST["did"];


$sql = "SELECT bus_id,MAX(serial) AS maxserial,MIN(serial) as minserial FROM
(
SELECT bus_busstop_relation.bus_id,bus_busstop_relation.bus_stop_id,bus_busstop_relation.serial FROM bus_busstop_relation WHERE (bus_stop_id='$sid' OR bus_stop_id='$did') AND bus_busstop_relation.bus_id IN
(SELECT bus_id FROM 
(SELECT bus_busstop_relation.bus_id,bus_busstop_relation.bus_stop_id,COUNT(*) AS counted FROM bus_busstop_relation WHERE bus_busstop_relation.bus_stop_id='$sid' OR bus_busstop_relation.bus_stop_id='$did' GROUP BY bus_busstop_relation.bus_id HAVING counted>1) AS t1)
) t2 GROUP BY bus_id";

$res  = $conn->query($sql);

while($data = mysqli_fetch_array($res))
{   
	$busid = $data['bus_id'];
	$maxserial = $data['maxserial'];
	$minserial = $data['minserial'];

	$src_serial = 0;
	$dst_serial = 0;
	$sql11 ="SELECT serial AS src FROM bus_busstop_relation WHERE bus_stop_id = '$sid' AND bus_id = '$busid'";
	//echo $sql11;
	$res11  = $conn->query($sql11);
	while($data1 = mysqli_fetch_array($res11))
	{
		$src_serial=$data1['src'];
	} 

	$sql12 ="SELECT serial AS src FROM bus_busstop_relation WHERE bus_stop_id = '$did' AND bus_id = '$busid'";
	$res12  = $conn->query($sql12);
	while($data2 = mysqli_fetch_array($res12))
	{
		$dst_serial=$data2['src'];
	} 

	if($src_serial < $dst_serial ){
		
		echo "right";

	}else{
		
		echo "left";
	}

}


//echo json_encode($bus_relation, JSON_FORCE_OBJECT);
//echo json_encode($bus_serial, JSON_FORCE_OBJECT);

?>