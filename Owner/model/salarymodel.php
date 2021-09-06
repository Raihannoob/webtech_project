<?php

require_once('db.php');


function insertsalary($user)
{
    $conn = getConnection();
    $sql = "insert into salary values('', '{$user['etype']}', '{$user['amount']}', '{$user['month']}','')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllempoloyeeSalary()
{
    $conn = getConnection();
    $sql = "select * from salary";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}
