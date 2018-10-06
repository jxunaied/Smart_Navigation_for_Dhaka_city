<?php

include_once('connection.php');

$id = $_POST['id'];

if($id != ''){
    $conn->query("DELETE FROM share_location WHERE id='$id'");
}

$output = '';

$output .= '<tr>
<th>Name</th>
<th>Location</th>
<th>Details</th>
</tr>  ';

session_start();
$userid = $_SESSION['id'];
$result = $conn->query("SELECT user.name,share_location.id FROM user JOIN share_location ON user.id=share_location.user_to WHERE share_location.user_from='$userid' ORDER BY time");



while ($row = $result->fetch_assoc()) {
    $id =$row['id'];
    // $time = str_replace(':', '', $time);
    // $time = str_replace(' ', '', $time);

    $output .= '<tr>
                    <td>'.$row['name'].'</td>
                    <td>Islambag</td>
                    <td>    
                        <a onclick="sharedWithFriends('.$id.' )" class="btn btn-danger">X</a>
                    </td>
                </tr>';

}

echo $output;