<?php
session_start();
if ($_SESSION['flag'] != true) {
	header('location: login.php');
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Forgot Password</title>
</head>

<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
				<a href="home.php"> <img src="../asset/logo.jpg" align="left" height='100px'> </a>
				<a href="home.php"> Home </a>
				&nbsp | &nbsp
				<a href="login.php"> Login </a>
				&nbsp | &nbsp
				<a href="registration.php"> Registration </a>
				
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<form method="POST" action="">
					<fieldset>
						<legend> <b>FORGOT PASSWORD</b></legend>
						<table>
							<tr>
								<td> Enter Email: </td>
								<td> <input type="email" name="Email" /> <br /></td>
							</tr>
						</table>
						<hr>
						<input type="checkbox" name="checkbox"> Remember Me
						<br> <br>
						<input type="submit" name="Submit" value="Submit">
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2">
				<center>Copyright © 2021 </center>

			</td>
		</tr>
	</table>
</body>

</html>

<?php
if (isset($_POST['Submit']) && isset($_POST['Email'])) {
	if ($_POST['Email'] == "") {
		echo "Email field is empty!";
	} elseif ($_SESSION['email'] === $_POST['Email']) {
		echo "We will give feedback \r\n";
	} else {
		echo "Please check your Email!";
	}
}
?>