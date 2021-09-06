<?php

require_once('db.php');

function getAllproduct()
{
    $conn = getConnection();
    $sql = "select * from expired_item";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}

function deleteProduct($id)
{
    $conn = getConnection();
    $sql = "delete from expired_item where Product_ID ='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
