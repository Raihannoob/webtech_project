<?php
$title = "View Employee Salary";
include('header.php');
require_once('../model/salarymodel.php');
$data = getAllempoloyeeSalary();
?>
<td>
    <h2 align="center">Employees Salary</h2>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Salary ID</th>
            <th>Employee Type</th>
            <th>Ammount</th>
            <th>Month</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['sal_id'] ?></td>
                <td><?= $data[$i]['etype'] ?></td>
                <td><?= $data[$i]['amount'] ?></td>
                <td><?= $data[$i]['month'] ?></td>
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