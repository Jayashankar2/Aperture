<?php

	if (isset($_POST["login_button"])) {
		$login_email = $_POST["login_input_1"];
		$login_pwd = $_POST["login_input_2"];

		require_once 'dbh.inc.php';
		require_once 'function.inc.php';

		$checkUser = checkUser($conn, $login_email, $login_pwd);

		/*if (checkUser($conn, $login_email, $login_pwd) !== false) {
			header("location: ../index.php?error=usernotfound");
			exit();
		}*/
		if ($checkUser === false) {
			header("location: ../index.php?error=somethingiswrong");
			exit();
		}
	}
	else{
		header("location: ../index.php");
		exit();
	}