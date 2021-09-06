<?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}
?>
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
    <meta charset="UTF-8">
    <title><?= $title ?></title>
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
                        <label>Logged in as<a href='viewprofile.php'> <?php echo $_SESSION['username'] ?> </a> </label>|
                        <a href='../controller/logout.php'>Log Out</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td width='30%'>
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='dashboard.php'>Dashboard</a></li>
                    <li><a href='viewprofile.php'>View Profile</a></li>
                    <li><a href='changepic.php'>Change Profile Picture</a></li>
                    <li><a href='changepass.php'>Change Password</a></li>
                    <li><a href='UpdateInformation.php'>Update Information</a></li>
                    <li><a href='MonitoringSell.php'>Monitoring cell</a></li>
                    <li><a href='MedicineStock.php'>Medicine Stock</a></li>
                    <li><a href='Setsalary.php'>Set Salary</a></li>
                    <li><a href='contactwithadmin.php'>contact with admin</a></li>
                    <li><a href='Contactstaff.php'>contact with Staff</a></li>
                    <li><a href='AcceptRejectforforeignMedicine.php'>Accept/Reject Request for foreign Medicine</a></li>
                    <li><a href='search.php'>Search Medicine</a></li>
                    <li><a href='viewfeedback.php'>View Feedback</a></li>
                    <li><a href='TerminateEmployee.php'>Terminate Admin</a></li>
                    <li><a href='Invtentory.php'>Invtentory</a></li>
                    <li><a href='ViewCustomersDetails.php'>View Customers Details</a></li>
                    <li><a href='Connectwebsitewithsocialmedia.php'>Connect website with social media</a></li>
                </ul>

            </td>