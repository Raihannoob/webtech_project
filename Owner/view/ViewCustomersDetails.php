<?php
$title = "View Customer";
include('header.php');
require_once('../model/Viewcustomermodel.php');
$data = getAllemployee();
?>
<td>
    <h2 align='center'>Customer Details </h2>
    <table border="1px solid black" width='80%' align='center'>


        <tr>
            <th>USer Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DOB</th>



        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['uid'] ?></td>
                <td><?= $data[$i]['name'] ?></td>
                <td><?= $data[$i]['username'] ?></td>
                <td><?= $data[$i]['email'] ?></td>
                <td><?= $data[$i]['gender'] ?></td>
                <td><?= $data[$i]['date'] ?></td>
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