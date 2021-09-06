<?php
$title = "view Expanse";
include('header.php');
require_once('../model/monitoringcellmodel.php');
$data = getAllexpences();
?>
<td>
    <h2 align="center">Expenses</h2>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Expense ID</th>
            <th>Name</th>
            <th>Buyprice</th>
            <th>sellprice</th>
            <th>Displayable</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['id'] ?></td>
                <td><?= $data[$i]['name'] ?></td>
                <td><?= $data[$i]['buyingPrice'] ?></td>
                <td><?= $data[$i]['sellingPrice'] ?></td>
                <td><?= $data[$i]['displayable'] ?></td>
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