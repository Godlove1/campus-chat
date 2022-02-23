<?php
include 'dbconn.php';
$get_id =$_GET['id'];
	
	// sending query
$del=	mysqli_query($conn,"DELETE FROM posts WHERE post_id = '$get_id'");

if($del){
		header("Location:../index.php");
		exit();

}else
{
		echo "<script>alert('failed');</script>";
}

?>
