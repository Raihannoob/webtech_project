<?php
$title = "Connect With Admin";
include('header.php');
?>
<td>
    <table>

        <fieldset>
            <legend>Report Issue</legend>
            <form action='../controller/issuecheck.php' method='post' onsubmit="return validateform()">
                <script type="text/javascript" src="issuecheck.js"></script>
                <table>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type="text" name='Name' id='pname' onkeyup="NameValidation()">
                            <span id="spname" style="color:red"> </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            User Type:
                        </td>
                        <td>
                            <input type="text" name='utype' id="ptype" onkeyup="userTypeValidate()">
                            <span id="sptype" style="color:red"> </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Priority:
                        </td>
                        <td>
                            <input type="text" name='Priority' id='Mannufacture' onblur="PriorityValidate()">
                            <span id="sMannufacture" style="color:red"> </span>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>
                            Comments:
                        </td>
                        <td>
                            <input type="text" name='Comments' id='Stock' onblur="CommentValidate()">
                            <span id="sStock" style="color:red"> </span>
                        </td>

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
    </table>
    </td>
    </tr>
    </table>
    <fieldset>
        <?php
        include('footer.php');
        ?>