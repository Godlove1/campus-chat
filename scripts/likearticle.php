<?php
	// USER LOGIN SCRIPT FOR VALIDATION
	if (isset($_POST['likeart'])) {
		//data sanitization to prevent SQL injection
		$receiverid= mysqli_real_escape_string($conn,$_POST['autid']);
		$artid= mysqli_real_escape_string($conn,$_POST['artid']);
		$sender= mysqli_real_escape_string($conn,$_POST['sender']);

$query=mysqli_query($conn,"insert into article_likes (article_id,auth_id,sender_id)
values ('$artid','$receiverid','$sender')");
	
if($query){
	echo "<script>alert('you liked this article'); </script>";
}
else{
	echo "<script>alert('error creating event); </script>";
}


		}
