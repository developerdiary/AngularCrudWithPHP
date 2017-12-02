<?php
include "connection.php";

$info = json_decode(file_get_contents("php://input"));

if (count($info) > 0) {
    $name     = mysqli_real_escape_string($conn, $info->name);
    $email    = mysqli_real_escape_string($conn, $info->email);
    $address      = mysqli_real_escape_string($conn, $info->address);
    $btn_name = $info->btnName;
    if ($btn_name == "insert") {
        $query = "INSERT INTO user(name, email, address) VALUES ('$name', '$email', '$address')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'update') {
        $id    = $info->id;
        $query = "UPDATE user SET name = '$name', email = '$email', address = '$address' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>