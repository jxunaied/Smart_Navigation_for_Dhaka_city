<?php

include_once('connection.php');
$date =date('Y-m-d');
$time =date('h:i:s');


session_start();
$userid = $_SESSION['id'];

$lat = $_POST['lat'];
$lng = $_POST['lng'];
$command = $_POST['command'];

if($command== 1){
    $conn->query("INSERT INTO saved_location (userid, lat, lng, date, time) 
    VALUES ('$userid', '$lat', '$lng','$date' ,'$time')");
}

$output = '';

$output .='<tr>
            <th>Time</th>
            <th>Date</th>
            <th>Show In Map</th>
        </tr>';

$result = $conn->query("SELECT * FROM saved_location WHERE saved_location.userid='$userid'");


while ($row = $result->fetch_assoc()) {

$output.= '<tr>
            <td>'.$row['time'].'</td>
            <td>'.$row['date'].'</td>
            <td>
                <a onclick="viewinmap('.$row['lat'].','.$row['lng'].')" class="btn btn-info" data-toggle="modal" data-target="#map_modal">In Map</a>
            </td>
        </tr>';

}            

echo $output;

