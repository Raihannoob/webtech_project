<?php
require_once('../model/forignmodel.php');
$ProductID   = $_POST['ProductID'];
$ProductName = $_POST['ProductName'];
$Category    = $_POST['Category'];
$Action      = $_POST['Action'];


$user = [
    'Id'                => $ProductID,
    'Name'              => $ProductName,
    'Category'          => $Category,
    'Action'            => $Action
];
$status = updateProduct($user);
if ($status) {
    echo "Update Successfully";
} else {
    echo "Update unsuccessful";
}
