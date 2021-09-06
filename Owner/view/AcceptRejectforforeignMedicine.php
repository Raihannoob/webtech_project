<?php
$title = "Set Salary";
include('header.php');
require_once('../model/forignmodel.php');
$data = getAll();
?>
<td>
    <h2 align='center'>Requested Forigen Medecines List </h2>
    <table border="1px solid black" width='80%' align='center'>

        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Action</th>
        <th>Decision</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['Id'] ?></td>
                <td><?= $data[$i]['Name'] ?></td>
                <td><?= $data[$i]['Category'] ?></td>
                <td><?= $data[$i]['Action'] ?></td>
                <td>
                    <a href="acceptforignmed.php?id=<?= $data[$i]['Id'] ?>"> Accept </a> |
                    <a href="acceptforignmed.php?id=<?= $data[$i]['Id'] ?>"> Reject </a>
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