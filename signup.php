<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Aperture Signup</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/aperture.css">
	<link rel="icon" href="image/ApertureIcon.png">
</head>
<body>
	<div class="signup_page">
		<div class="signup_form">
			<h1><span>Ap</span>erture Signup</h1>
			
			<form method="post" action="include/signup.inc.php">
				<input type="text" name="signup_input_1" placeholder="User Name" required="required"><br/>
				<input type="text" name="signup_input_2" placeholder="Full name" required="required"><br/>
				<input type="email" name="signup_input_3" placeholder="Email" required="required"><br/>
				<input type="password" name="signup_input_4" placeholder="Password" required="required"><br/>
				<input type="password" name="signup_input_5" placeholder="Confirm password" required="required"><br/>
				<button type="submit" name="signup_button">Signup</button>
				<p><a href="index.php">Already have account</a></p>
			</form>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "invaliduid") {
						echo "<p>Invalid UserId</p>";
					}
					elseif ($_GET["error"] == "passworddonotmatch") {
						echo "<p>Password do not match</p>";
					}
					elseif ($_GET["error"] == "usernametaken") {
						echo "<p>User name taken</p>";
					}
					elseif ($_GET["error"] == "stmtfailed1" || $_GET["error"] == "stmtfailed2") {
						echo "<p> Something is wrong</p>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>