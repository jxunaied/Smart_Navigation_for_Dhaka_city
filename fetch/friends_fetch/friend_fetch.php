<?php

include_once('connection.php');

$search = $_POST['search'];

session_start();
$userid = $_SESSION['id'];

$output = '';

$output.='<tr>
<th>Name</th>
<th>Request</th>
</tr> ';

if(strlen($search) > 1){
    $result = $conn->query("SELECT * FROM user WHERE user.id NOT IN (SELECT t1.id FROM (SELECT to_id as id FROM friends WHERE (to_id='$userid' OR from_id='$userid') UNION SELECT from_id as id FROM friends WHERE (to_id='$userid' OR from_id='$userid')) AS t1) AND user.id!='$userid' AND user.name LIKE '$search%'");   
}
else{
    $result = $conn->query("SELECT * FROM user WHERE user.id NOT IN (SELECT t1.id FROM (SELECT to_id as id FROM friends WHERE (to_id='$userid' OR from_id='$userid') UNION SELECT from_id as id FROM friends WHERE (to_id='$userid' OR from_id='$userid')) AS t1) AND user.id!='$userid'");   
}

while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $output.= '<tr>
                <td>'.$row["name"].'</td>
                <td><a onclick="addfriend('.$id.')" class="btn btn-success">Add Friend</a></td>
            </tr>';

}


echo $output;