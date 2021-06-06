<?php
	session_start();

	require_once "include/dbh.inc.php";
	require_once "include/function.inc.php";

	if(isset($_SESSION["usersuid"])){
		$sessionUid = $_SESSION["usersuid"];

		$userData = uidExists($conn, $sessionUid, $sessionUid);

		$userUid = $userData["usersUid"];
		$userName = $userData["usersName"];
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
	<title><?php echo $userUid; ?> Profile</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/profile.css">
	<link rel="icon" href="image/ApertureIcon.png">
</head>
<body>
	<header>
		<div class="profile_header_section">
			<?php echo "<p>" . $userUid . "</p>"; ?>
			<a href="home.php">Back to home</a>
		</div>
		<nav>
			<div class="account_info">
				<img src="image/useridimg.jpg">
				<div class="fullname_bio">
					<?php echo "<p>" . $userName . "</p>"; ?>
					<p>Tell us about yourself</p>
				</div>
			</div>
			<div class="follower_info">
				<a href="">
					<h1>
						20<br/>
						<span>
							Post
						</span>
					</h1>
				</a>
				<a href="">
					<h1>
						20K<br/>
						<span>
							Followers
						</span>
					</h1>
				</a>
				<a href="">
					<h1>
						12<br/>
						<span>
							Following
						</span>
					</h1>
				</a>
			</div>
		</nav>
		<button class="edit_button" type="button" name="edit_account_button">Edit Profile</button>
	</header>
	<main>
		<
	</main>
	<footer>
		
	</footer>
</body>
</html>