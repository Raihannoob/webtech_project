<?php
require_once('../model/inventroymodel.php');
$Product_Name   = $_POST['ProductName'];
$Quantity = $_POST['ptype'];
$Buying_Price = $_POST['Mannufacture'];
$Selling_Price = $_POST['Stock'];
$mrp             =  $_POST['MRP'];
$id = $_POST['ProductID'];

$user = [
    'p_id'              => $id,
    'p_name'    => $Product_Name,
    'p_type'        => $Quantity,
    'manufacturer'    => $Buying_Price,
    'stock'   => $Selling_Price,
    'mrp'     => $mrp
];
$status = updateProduct($user);
if ($status) {
    echo "Update Successfully";
} else {
    echo "Update unsuccessful";
}
