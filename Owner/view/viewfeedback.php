<?php
$title = "View Feedback";
include('header.php');
require_once('../model/feedbackmodel.php');
$data = getAllfeedback();
?>
<td>
    <h2 align='center'>Customer Feedback </h2>
    <fieldset>
        <form action='' method=''>

            <table border="1px solid black" width='80%' align='center'>
                <tr>
                    <th>ID</th>
                    <th>Username </th>
                    <th>Comment</th>
                </tr>
                <?php for ($i = 0; $i < count($data); $i++) { ?>
                    <tr>
                        <td><?= $data[$i]['id'] ?></td>
                        <td><?= $data[$i]['username'] ?></td>
                        <td><?= $data[$i]['Comments'] ?></td>
                    </tr>

                <?php } ?>



            </table>
        </form>
    </fieldset>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>