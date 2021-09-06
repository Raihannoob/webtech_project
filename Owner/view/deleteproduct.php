<?php
$title = "DashBoard";
include('header.php');
require_once('../model/inventroymodel.php');
$data = getAllproduct();
?>
<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Manufacturer</th>
            <th>Stock</th>
            <th>MRP</th>
            <td>ACTION</td>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['p_id'] ?></td>
                <td><?= $data[$i]['p_name'] ?></td>
                <td><?= $data[$i]['p_type'] ?></td>
                <td><?= $data[$i]['manufacturer'] ?></td>
                <td><?= $data[$i]['stock'] ?></td>
                <td><?= $data[$i]['mrp'] ?></td>
                <td>
                    <a href="updateproduct.php?id=<?= $data[$i]['p_id'] ?>"> EDIT </a> |
                    <a href="delete.php?id=<?= $data[$i]['p_id'] ?>"> DELETE </a>
                </td>
            </tr>


        <?php } ?>


    </table>

</td>
</tr>

</table>
<fieldset>

    <?php
    include('footer.php');
    ?>