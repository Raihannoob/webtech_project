<?php
require_once('../model/TerminateEmployeemodel.php');
echo $_GET['id'];
$id = $_GET['id'];
$status = deleteEmployee($id);
if ($status) {
    echo "Employee Terminate Successfully";
} else {
    echo "Db error";
}
