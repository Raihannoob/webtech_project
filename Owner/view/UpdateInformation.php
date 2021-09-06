<?php
$title = "Update Information";
include('header.php');
require_once('../model/db.php');
require_once('../model/userModel.php');
$info = getUserByName($_SESSION['username']);
?>
<td>
    <fieldset>
        <legend><b>Update Information</b></legend>
        <form action='../controller/upadateinfocheck.php' method='post' onsubmit=" return validateform()">
            <script type="text/javascript" src="updateinfo.js"></script>
            <table width='100%'>


                <tr>
                    <td>
                        User ID:
                    </td>
                    <td>
                        <input type="text" name='abc' value=" <?php echo $info['uid'] ?>" id="id" onkeyup="validateid()">
                        <span id="sid" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>


                <tr>
                    <td>
                        Full Name:
                    </td>
                    <td>
                        <input type="text" name='name' id="fullname" value=" <?php echo $info['name'] ?>" onblur="namevalidation()" onkeyup="namevalidation()">
                        <span id="sfullname" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                    </td>
                </tr>

                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name='email' value="<?php echo $info['email'] ?>" id="email" onkeyup=" validateEmail()">
                        <span id="semail" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <td>Gender:</td>
                <td>
                    <input type="text" name='Gender' value="<?php echo $info['gender'] ?>" id="gender" onkeyup="validateGender()">
                    <span id="sgender" style="color:red"> </span>
                </td>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date of Birth:</label>
                    </td>
                    <td>
                        <input type="date" name='date'>
                    </td>
                    <td id="date" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
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