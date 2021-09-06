<?php
require_once('db.php');
function getAll()
{
    $conn = getConnection();
    $sql = "select * from foreignn";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}

function getproductByID($id)
{
    $conn = getConnection();
    $sql = "select * from foreignn where Id ='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}


function updateProduct($user)
{
    $conn = getConnection();
    $sql = "update foreignn set  Name ='{$user['Name']}', Category ='{$user['Category']}',  Action='{$user['Action']}' where Id ={$user['Id']}";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
