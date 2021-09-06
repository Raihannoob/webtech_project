<?php
$title = "Change Picture";
include('header.php');
?>
<td>
    <fieldset>
        <legend><b>CHOOSE PROFILE PICTURE</b></legend>
        <form action='../controller/mProfPicCheck.php' method='post' enctype="multipart/form-data">
            <table width='100%'>
                <tr>
                    <td>
                        <img src='../asset/user.png' height='150px'>
                        <br>
                        <input type='file' name='image' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Upload">
                    </td>
                </tr>
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