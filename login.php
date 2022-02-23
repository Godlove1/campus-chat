<?php
include 'scripts/dbconn.php';
include 'scripts/login.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="icons/favicon.png"/>
		<title>login to campuschat</title>
		<link rel="stylesheet" href="css/signuplogin.css">
	</head>

	<body>
		<h1>CampusChat</h1>
		<form method="POST" autocomplete="off" >

			<div class="group">
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Enter a username">
			</div>


			<div class="group">
				<label for="email">Password</label>
				<input type="password" name="password">
			</div>



			<div class="btn">
				<input type="submit" value="Log in" name="login" id="signupbtn">
			</div>

			<div class="info">
				<p>Don't have an account?
					<a href="signup.php">Signup here!</a>
				</p>
			</div>

		</form>

		<div class="loader" id="loader">
			<div class="cont">
				<h1>CampusChat</h1>
				<p>Loading...</p>
			</div>
		</div>

		<script src="js/loader.js"></script>
	</body>
</html>
