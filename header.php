<?php
		
	session_start();

	require_once "include/dbh.inc.php";
	require_once "include/function.inc.php";

	if(isset($_SESSION["usersuid"])){

		$sessionUid = $_SESSION["usersuid"];

		$userData = uidExists($conn, $sessionUid, $sessionUid);

		$usersId = $userData["usersID"];
		$usersUid = $userData["usersUid"];
		$usersName = $userData["usersName"];
		$usersEmail = $userData["usersEmail"];
	}
	else{
		header("location: index.php");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/home.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/homefeed.css">
	<link rel="icon" href="image/ApertureIcon.png">
</head>
<body><!--fitgirlrepack-->
	<header>
		<nav>
			<ul class="nav_list_1">
				<li><h1><span>Ap</span>erture</h1></li>
				<li><a href="home.php">Home</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="notifi.php">Notification</a></li>
				<li><a href="upload.php">Upload</a></li>
				<li>
					<div>
						<img src="image/useridimg.jpg">
						<?php
							echo "<p>" . $usersUid . "</p>";
						?>
					</div>
					<ul class="nav_list_2">
						<li class="nav_link"><a href="support.php"><p>Support</p></a></li>
						<li class="nav_link"><a href="profile.php"><p>Setting</p></a></li>
						<li class="logout_button"><a href="include/logout.inc.php"><p>Logout</p></a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>