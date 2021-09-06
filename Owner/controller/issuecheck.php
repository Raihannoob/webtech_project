<?php
require_once('../model/issuecheckmodel.php');

if (isset($_POST['submit'])) {
    $name           = $_POST['Name'];
    $utype          = $_POST['utype'];
    $Priority   = $_POST['Priority'];
    $Comments          = $_POST['Comments'];


    if ($name != "" && $utype  != "" &&  $Priority != "" && $Comments  != "") {
        $user = [
            'Username'            => $name,
            'User Type'            => $utype,
            'Priority'        => $Priority,
            'Comments'                => $Comments
        ];
        $status = insertissue($user);
        if ($status) {
            echo "Issue Submit Successfully";
        } else {
            echo "Db error";
        }
    } else {
        echo "Please Insert All Information";
    }
}
