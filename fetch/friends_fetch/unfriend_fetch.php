<?php

$friend = $_POST['user'];

session_start();
$userid = $_SESSION['id'];

include_once('connection.php');
$conn->query("DELETE FROM friends WHERE (friends.from_id = '$userid' AND friends.to_id = '$friend') or (friends.from_id = '$friend' AND friends.to_id = '$userid') AND status=1");


$query = "SELECT * FROM user WHERE user.id IN 
        (
            SELECT to_id as id FROM friends WHERE status=1 AND (friends.to_id='$userid' OR friends.from_id='$userid')
            UNION 
            SELECT from_id as id FROM friends WHERE status=1 AND (friends.to_id='$userid' OR friends.from_id='$userid')
            
        ) AND user.id!='$userid'";

$result = $conn->query($query);

$output = '';

$output .= '<tr>
                <th>Name</th>
                <th>Remove</th>
            </tr> ';


while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $output.= '<tr>
                <td>'.$row["name"].'</td>
                <td><a onclick="unfriend('.$id.')" class="btn btn-danger">Unfriend</a></td>
            </tr>';

}

echo $output;