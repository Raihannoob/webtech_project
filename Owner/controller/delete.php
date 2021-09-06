<?php
require_once('../model/inventroymodel.php');
$id = $_GET['id'];
$status = deleteproduct($id);
if ($status) {
    echo "Product Delete Successfully";
} else {
    echo "Db error";
}
