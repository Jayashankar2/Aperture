<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Aperture</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/aperture.css">
	<link rel="icon" href="image/ApertureIcon.png">
</head>
<body>
	<div class="login_page">
		<div class="site_title">
			<h1><span>Ap</span>erture</h1>
			<p>CAPTURE THE MOMENT</p>
		</div>
		<div class="site_login_form">
			<form method="post" action="include/login.inc.php">
				<input type="email" name="login_input_1" placeholder="Email or User name" required="required"><br/>
				<input type="password" name="login_input_2" placeholder="Password" required="required"><br/>
				<button type="submit" name="login_button">Login</button>
				<div class="login_links">
					<p><a href="signup.php">Create new Account</a></p>
					<p><a href="#">Forgot password</a></p>
				</div>
			</form>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "wronglogin") {
						echo "<p>Wrong login</p>";
					}
					elseif ($_GET["error"] == "pwdwrong") {
						echo "<p>Password wrong</p>";
					}
					elseif ($_GET["error"] == "somethingiswrong") {
						echo "<p>Something is wrong</p>";
					}
					elseif ($_GET["error"] == "logoutsuccessful") {
						echo "<p style='text-align:center; font-family:calibri; margin-top:10px;'>Logout Successful</p>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>