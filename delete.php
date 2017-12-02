<?php
include "connection.php";

$data    = json_decode(file_get_contents("php://input"));

if (count($data) > 0) {
    $id    = $data->id;
    $query = "DELETE FROM user WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted';
    } else {
        echo 'Failed';
    }
}

?>