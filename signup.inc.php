<?php

	if (isset($_POST["signup_button"])) {
		
		$uid = $_POST["signup_input_1"];
		$name = $_POST["signup_input_2"];
		$email = $_POST["signup_input_3"];
		$pwd = $_POST["signup_input_4"];
		$cpwd = $_POST["signup_input_5"];

		require_once 'dbh.inc.php';
		require_once 'function.inc.php';

		if (invalidUid($uid) !== false) {
			header("locaion: ../signup.php?error=invaliduid");
			exit();
		}
		/*if (invalidEmail($email) !== false) {
			header("locaion: ../signup.php?error=invalidemail");
			exit();
		}*/
		if (checkPassword($pwd, $cpwd) !== false) {
			header("locaion: ../signup.php?error=passworddonotmatch");
			exit();
		}
		if (uidExists($conn, $uid, $email) !== false) {
			header("locaion: ../signup.php?error=usernametaken");
			exit();
		}

		createUser($conn, $uid, $name, $email, $pwd);
	}
	else{
		header("location: ../signup.php");
		exit();
	}