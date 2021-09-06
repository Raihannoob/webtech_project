<?php
$title = "Delete Expire item";
include('header.php');
require_once('../model/Expireitemmodel.php');
$data = getAllproduct();
?>

<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Medicine ID</th>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Date</th>
            <th>Branch</th>
            <th>Action</th>

        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['Product_ID'] ?></td>
                <td><?= $data[$i]['Medicine_name'] ?></td>
                <td><?= $data[$i]['Quantity'] ?></td>
                <td><?= $data[$i]['Price'] ?></td>
                <td><?= $data[$i]['Date'] ?></td>
                <td><?= $data[$i]['Branch'] ?></td>
                <td>
                    <a href="deleteexpireitem.php?id=<?= $data[$i]['Product_ID'] ?>"> DELETE From Database </a>
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