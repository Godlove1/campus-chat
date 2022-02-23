<?php
 include 'dbconn.php';
$get_id =$_GET['id'];
	
	// sending query
$del=	mysqli_query($conn,"DELETE FROM comments WHERE comment_id = '$get_id'");

if($del){
		header("Location: ../index.php");
		exit();
}else
{
		echo "<script>alert('failed');</script>";
}

?>
