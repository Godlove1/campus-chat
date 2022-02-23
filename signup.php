<?php
include 'scripts/dbconn.php';
include 'scripts/signup.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="shortcut icon" type="image/png" href="icons/favicon.png"/>
		<title>signup on campuschat</title>
		<link rel="stylesheet" href="css/signuplogin.css">
	</head>

	<body>
		<h1>CampusChat</h1>
		<form method="POST">

			<div class="group">
				<label for="username">Username</label>
				<input type="text" name="username" placeholder="Enter a username">
			</div>

			<div class="group">
				<label for="fname">First Name</label>
				<input type="text" name="fname">
			</div>


			<div class="group">
				<label for="lname">Last Name</label>
				<input type="text" name="lname">
				<input type="hidden" name="image" value="<?php echo $pp;?>">
			</div>


			<div class="group">
				<label for="email">Email</label>
				<input type="email" name="email">
			</div>


			<div class="group">
				<label for="email">Password</label>
				<input type="password" name="password" placeholder="atleast 8 chracters">
			</div>


			<div class="btn">
				<input type="submit" value="Sign Up" name="signup" id="signupbtn">
			</div>

			<div class="info">
				<p>Already have an account?
					<a href="login.php">Login Here!</a>
				</p>
			</div>

		</form>

	<?php include 'loader.php';?>
		</div>
	</body>
<script>
	let anime = document.getElementById("loader");
setTimeout(function () {
  anime.style.display = "none";
}, 3000);

</script>
</html>
