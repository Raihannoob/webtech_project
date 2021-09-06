<?php
$title = "Set Salary";
include('header.php');
?>
<td>
    <h1 id="h1">Insert Salary</h1>
    <fieldset>

        <form action='../controller/insertsalarycheck.php' method='post' onsubmit="return validateform()">
            <script type="text/javascript" src="insertsalary.js"></script>
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name='Employeetype' id='ename' onkeyup="emptypevalidation()">
                        <span id="spname" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Ammount:
                    </td>
                    <td>
                        <input type="text" name='Ammount' id="ammount" onblur=" ammountValidate()">
                        <span id="spquantity" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Month:
                    </td>
                    <td>
                        <input type="text" name='Month' id='month' onblur="monthValidate()">
                        <span id="spbprice" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' name='submit' value='submit'>
                        <input type='Reset' value='Reset'>
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