<?php

	function invalidUid($uid){
		$result;

		if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}
	function checkPassword($pwd, $cpwd){
		$result;

		if ($pwd !== $cpwd) {
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}
	function uidExists($conn, $uid, $email){
		$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../signup.php?error=stmtfailed1");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);

		if ($row = mysqli_fetch_assoc($resultData)) {
			return $row;
		}
		else{
			$result = false;
			return $result;
		}

		mysqli_stmt_close($stmt);
	}

	function createUser($conn, $uid, $name, $email, $pwd){
		$sql = "INSERT INTO users (usersUid, usersName, usersEmail, usersPwd) VALUES(?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../signup.php?error=stmtfailed2");
			exit();
		}

		$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "ssss", $uid, $name, $email, $hashPwd);
		mysqli_stmt_execute($stmt);

		mysqli_stmt_close($stmt);

		header("location: ../signup.php?error=signupsuccessful");
	}

	function checkUser($conn, $login_email, $login_pwd){
		$userExists = uidExists($conn, $login_email, $login_email);


		if ($userExists === false) {
			header("location: ../index.php?error=wronglogin");
			exit();
		}

		$passHashed = $userExists["usersPwd"];
		$checkPwd = password_verify($login_pwd, $passHashed);

		if ($checkPwd === false) {
			header("location: ../index.php?error=pwdwrong");
			exit();
		}
		elseif ($checkPwd === true) {
			session_start();
			$_SESSION["usersid"] = $userExists["usersId"];
			$_SESSION["usersuid"] = $userExists["usersUid"];
			header("location: ../home.php");
			exit();
		}
	}
