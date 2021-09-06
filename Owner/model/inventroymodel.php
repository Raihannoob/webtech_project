<?php

require_once('db.php');


function insertProduct($user)
{
    $conn = getConnection();
    $sql = "insert into products values('', '{$user['p_name']}', '{$user['p_type']}', '{$user['manufacturer']}', '{$user['stock']}','{$user['mrp']}')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllproduct()
{
    $conn = getConnection();
    $sql = "select * from products";
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
    $sql = "delete from products where p_id ='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateProduct($user)
{
    $conn = getConnection();
    $sql = "update products set p_name ='{$user['p_name']}', p_type ='{$user['p_type']}', manufacturer ='{$user['manufacturer']}', stock ='{$user['stock']}', mrp='{$user['mrp']}' where p_id ={$user['p_id']}";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


function getproductByID($id)
{
    $conn = getConnection();
    $sql = "select * from products where p_id ='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}
