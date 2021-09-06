<?php

require_once('db.php');

function getAllemployee()
{
    $conn = getConnection();
    $sql = "select * from users where roll like '2'";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}

function deleteEmployee($id)
{
    $conn = getConnection();
    $sql = "delete from users where uid ='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function insertNewemployee($user)
{
    $conn = getConnection();
    $sql = "insert into employee_list values('', '{$user['Name']}', '{$user['Post']}', '{$user['Branch']}')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
