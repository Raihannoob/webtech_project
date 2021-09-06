<?php

require_once('db.php');


function insertissue($user)
{
    $conn = getConnection();
    $sql = "insert into issues values('', '{$user['Username']}', '{$user['User Type']}', '{$user['Priority']}', '{$user['Comments']}','')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

