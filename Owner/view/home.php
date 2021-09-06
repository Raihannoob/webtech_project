<script>
    "use strict"

    function change_text() {
        document.getElementById("demo").innerHTML = "So our company name is Osud Ar Dokan com. We have 5 Brunch in Dhaka city  ";
    }

    function change_text1() {
        document.getElementById("demo1").innerHTML = "1.Shantinagar 2.Banani 3.Gulsan 4.Bailyroad 5.Khilgao";
    }

    function setnewimg() {
        document.getElementById('logo').src = '../asset/logo1.jpg';
    }

    function setoldimg() {
        document.getElementById('logo').src = '../asset/logo.jpg';
    }
</script>


<!DOCTYPE html>
<html>

<head>
    <title>PUBLIC HOME</title>
</head>

<body>
    <fieldset>
        <table width='100%'>
            <tr>
                <td>
                    <img id='logo' src='../asset/logo.jpg' height='100px' onmouseover="setnewimg()" onmouseout="setoldimg()">
                </td>
                <td align='right'>
                    <nav>
                        <a href='home.php'>Home</a> |
                        <a href='login.php'>Log In</a> |
                        <a href='registration.php'>Registration</a> |
                        <a href='AboutUs.php'>About Us</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <br> <br><br>
        <label>
            <h1>
                Welcome to Osude Ar Dokan DOt Com
            </h1>
        </label>
        <br><br><br><br>
    </fieldset>
    <fieldset>
        <?php
        include('footer.php');
        ?>