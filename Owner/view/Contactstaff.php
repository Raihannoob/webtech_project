<?php
$title = "Connect With Staff";
include('header.php');
require_once('../Model/msgModel.php');
?>
<td>
    <table>
        <fieldset>
            <legend>Contact Staff</legend>
            <form action='./Contactstaff.php' method='POST'>
                <table align="">
                    <tr>
                        <td>
                            Subject:
                        </td>
                        <td>
                            <input id="sub" type="text" name='sub'>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Message Body:
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea id="msg" name="msg" rows="4" cols="50">  </textarea>
                        </td>
                    </tr>
                    <tr>
                    </tr>

                    <tr>
                        <td>
                            <input type='submit' name="send" value='Send'><button type="button" onclick="document.getElementById('sub').value = ''">Clear Subject</button> <button type="button" onclick="document.getElementById('msg').value = ''">Clear Message</button>

                        </td>
                    </tr>
                </table>
            </form>
            <div class="wrapper">
                <details>
                    <summary>
                        See Message History
                    </summary>

                    <?php

                    if ($result = allMsg()) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<table>";
                                echo "<hr>";
                                echo "<tr>";
                                echo "<td> <strong>Time:</strong>  {$row['date']}  </td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td> <strong>From:</strong>  {$row['sender']}  </td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td> <strong>To:</strong>  {$row['receiver']}  </td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td> <strong>Subject:</strong>  {$row['sub']}  </td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td> <strong>Message Body:</strong>  {$row['msg']}  </td>";
                                echo "</tr>";
                                echo "</table>";
                                echo "<hr>";
                            }
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    ?>
                </details>
            </div>
        </fieldset>

    </table>
</td>
</tr>
</table>
<fieldset>
    <?php

    if (isset($_POST['send'])) {
        // $_SESSION['sub'] = $_POST['sub'];
        //$_SESSION['msg'] = $_POST['msg'];

        $sub = $_POST['sub'];
        $msg = $_POST['msg'];

        //setcookie('sub', $sub, time() + (86400 * 7));
        //setcookie('msg', $msg, time() + (86400 * 7));


        if (strlen(str_replace(' ', '', $sub)) < 3) {
            echo "<mark>  Subject needs to  consist of atleast 10 characters<mark/>";
            return;
        }

        if (strlen(str_replace(' ', '', $msg)) < 5) {
            echo "<mark>  Message Body needs to  consist of atleast 50 characters<mark/>";
            return;
        }

        $arr = [$_POST['sub'], $_POST['msg'], 'Staff', 'Owner'];
        if (sendMessage($arr)) {
            //header('location: contactOwner.php');
        } else {
            echo "<mark> Failed!<mark/>";
        }
    }

    ?>

    <?php
    include('footer.php');
    ?>