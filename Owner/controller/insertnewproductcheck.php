<?php
require_once('../model/inventroymodel.php');

if (isset($_POST['submit'])) {
	$name       = $_POST['ProductName'];
	$ptype   = $_POST['ptype'];
	$Mannufacture   = $_POST['Mannufacture'];
	$Stock  = $_POST['Stock'];
	$mrp        = $_POST['MRP'];


	if ($name != "" && $ptype != "" && $Mannufacture != "" && $Stock != "" && $mrp != "") {
		$user = [
			'p_name'			=> $name,
			'p_type'			=> $ptype,
			'manufacturer'		=> $Mannufacture,
			'stock'				=> $Stock,
			'mrp' 				=> $mrp
		];
		$status = insertProduct($user);
		if ($status) {
			echo "Product Insert Successfully";
		} else {
			echo "Db error";
		}
	} else {
		echo "Please Insert All Information";
	}
}
