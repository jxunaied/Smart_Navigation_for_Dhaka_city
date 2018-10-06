<?php

include_once('connection.php');
session_start();
$userid = $_SESSION['id'];
$command = $_POST['command'];
$friend = $_POST['user'];
$output='';

if($command == 1){
    $conn->query("UPDATE friends SET status = '1' WHERE friends.from_id = '$friend' AND friends.to_id = '$userid'");
}
else if($command == 0 && $friend!=0){
    $conn->query("DELETE FROM friends WHERE friends.from_id = '$friend' AND friends.to_id = $userid");
}

$output.='<tr>
<th>Name</th>
<th>Email</th>
<th>Decision</th>
</tr>';
$result = $conn->query("SELECT user.id,user.name,user.email FROM user JOIN friends ON user.id=friends.from_id AND to_id='$userid' AND status=0");
while($row = $result->fetch_assoc()){  
    $id =$row['id'];
    $output.= 
    '<tr>
        <td>'.$row["name"].'</td>
        <td>'.$row["email"].'</td>
        <td>
            <a onclick="request_handle('.$id.',1)" class="btn btn-success">Accept</a>
            <a onclick="request_handle('.$id.',0)" class="btn btn-danger">Reject</a>
        </td>
    </tr>';
} 

echo $output;