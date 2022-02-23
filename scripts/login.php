<?php
	// USER LOGIN SCRIPT FOR VALIDATION
	if (isset($_POST['login'])) {
		//data sanitization to prevent SQL injection
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password= mysqli_real_escape_string($conn,md5($_POST['password']));

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($conn, $query);

			// $results = 1 means that one user with the entered username exists
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
			
				header('location: index.php'); 
				exit();//page on which the user is sent to after logging in
			}else {
			echo '<script>alert("wrong password/username");</script>';
				//if the username and password doesn't match
			}
		}
?>