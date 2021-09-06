<?php
require_once('../model/Expireitemmodel.php');
$id = $_GET['id'];
$status = deleteProduct($id);
if ($status) {
    echo "Product Delete From Database Successfully";
} else {
    echo "Db error";
}
