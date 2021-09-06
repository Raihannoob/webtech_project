<?php
require_once('../model/TerminateEmployeemodel.php');
if (isset($_POST['submit'])) {
    $name       = $_POST['Name'];
    $Employee_Post   = $_POST['ePost'];
    $Branch  = $_POST['Branch'];


    if ($name != "" && $Employee_Post != "" && $Branch != "") {
        $emp = [
            'Name'    =>  $name,
            'Post'        => $Employee_Post,
            'Branch'        => $Branch,

        ];
        $status = insertNewemployee($emp);
        if ($status) {
            echo "Employee Insert Successfully";
        } else {
            echo "Db error";
        }
    } else {
        echo "Please Insert All Information";
    }
}
