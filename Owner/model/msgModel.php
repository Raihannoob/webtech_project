<?php

require_once('db.php');

function sendMessage($arr)
{
    $conn = getConnection();
    $sql = "insert into staff_owner (msg_id, sub, msg, sender, receiver) values('', '{$arr[0]}', '{$arr[1]}', '{$arr[3]}', '{$arr[2]}')";
    #INSERT INTO `staff_owner` (`msg_id`, `sub`, `date`, `msg`, `sender`, `receiver`) VALUES (NULL, 'Sub', current_timestamp(), 'Msg', 'Owner', 'Staff')
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function allMsg()
{
    $conn = getConnection();
    $sql = "select * from staff_owner";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return false;
    }
    #$msgs = [];

    #while ($row = mysqli_fetch_assoc($result)) {
    #    array_push($msgs, $row);
    #}

    return $result;
}
