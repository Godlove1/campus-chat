<?php

if(isset($_POST['signup'])){
	
$username=mysqli_real_escape_string($conn,$_POST['username']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));
$time=time();

//assigning session variables
	$_SESSION['username']=$username;
	$_SESSION['fname']=$fname;
	$_SESSION['lname']=$lname;
	
$query=mysqli_query($conn,"insert into users (username,fname,lname,email,password,date_joined)
values ('$username','$fname','$lname','$email','$password','$time')");
	
if($query){
header("location:index.php");
exit();
}
else{
	echo "<script>alert('error signing up'); </script>";
}


	
}


?>
