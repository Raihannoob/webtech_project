<?php
require_once('../model/salarymodel.php');

if (isset($_POST['submit'])) {
    $name       = $_POST['Employeetype'];
    $Quantity   = $_POST['Ammount'];
    $Buyprice   = $_POST['Month'];



    if ($name != "" && $Quantity != "" && $Buyprice != "") {
        $user = [
            'etype'    => $name,
            'amount'   => $Quantity,
            'month'    => $Buyprice,

        ];
        $status = insertsalary($user);
        if ($status) {
            echo "Salary Insert Successfully";
        } else {
            echo "Db error";
        }
    } else {
        echo "Please Insert All Information";
    }
}
