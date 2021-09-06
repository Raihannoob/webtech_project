<?php
$name = $_REQUEST['name'];
$conn = mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from products where p_name like '%{$name}%'";
$result = mysqli_query($conn, $sql);

$response = "<table border=1>
					<tr>
						<td>Product_ID</td>
						<td>Product_Name</td>
						<td>Product Type</td>
						<td>Manufacturer</td>
						<td>Stock</td>
						<td>MRP</td>
					</tr>";

while ($row = mysqli_fetch_assoc($result)) {
	$response .= "	<tr>
							<td>{$row['p_id']}</td>
							<td>{$row['p_name']}</td>
							<td>{$row['p_type']}</td>
							<td>{$row['manufacturer']}</td>
							<td>{$row['stock']}</td>
							<td>{$row['mrp']}</td>
						</tr>";
}

$response .= "</table>";

echo $response;
