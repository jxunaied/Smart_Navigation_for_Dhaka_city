<?php

include_once('connection.php');

$search = $_POST['search'];

session_start();
$userid = $_SESSION['id'];


$output = '';

$output.= '<tr>
<th>Name</th>
<th>Status</th>
</tr>';

if(strlen($search) > 0){
    $result = $conn->query("SELECT * FROM (SELECT DISTINCT * FROM user JOIN friends WHERE (user.id=friends.from_id OR user.id=friends.to_id) AND (friends.from_id='$userid' OR friends.to_id='$userid')) T1 WHERE T1.id!='$userid' AND status=1 AND name LIKE '$search%'");   
}
else{
    $result = $conn->query("SELECT * FROM (SELECT DISTINCT * FROM user JOIN friends WHERE (user.id=friends.from_id OR user.id=friends.to_id) AND (friends.from_id='$userid' OR friends.to_id='$userid')) T1 WHERE T1.id!='$userid' AND status=1");   
}

while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $output.= '<tr>
                <td>'.$row["name"].'</td>
                <td><a onclick="share('.$id.')" class="btn btn-success">Share Now</a></td>
            </tr>';

}


echo $output;