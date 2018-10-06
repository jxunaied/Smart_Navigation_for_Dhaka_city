<?php

include_once('connection.php');

$id = $_POST['friendid'];

session_start();
$userid = $_SESSION['id'];

if($id != ''){
    $conn->query("DELETE FROM share_location WHERE id='$id'");
}

$result = $conn->query("SELECT user.name,share_location.id,share_location.lat,share_location.lng,share_location.address FROM user JOIN share_location ON user.id=share_location.user_from WHERE share_location.user_to='$userid'");

$output = '';

$output .= '<tr>
                <th>Name</th>
                <th>Location</th>
                <th>Details</th>
            </tr>  ';


while ($row = $result->fetch_assoc()) {
    $value = new stdclass;
    $value->lat=$row['lat'];
    $value->lng=$row['lng'];
    $value1=json_encode($value, JSON_FORCE_OBJECT);
    $id =$row['id'];
    $output .= '<tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>
                        <a class="btn btn-info" onclick="get_source_destination_nearest('.$row['lat'].','.$row['lng'].')" data-toggle="modal" data-target="#myModal">Show Route</a>
                        <a onclick="sharedWithYou('.$id.')" class="btn btn-danger">X</a>
                    </td>
                </tr>';

}

echo $output;