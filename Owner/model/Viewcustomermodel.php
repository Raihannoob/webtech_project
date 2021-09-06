<?php

require_once('db.php');

function getAllemployee()
{
    $conn = getConnection();
    $sql = "select * from users where roll like '4'";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}
