<?php
if(isset($_POST['follow'])){
	
$senderid=mysqli_real_escape_string($conn,$_POST['s_id']);
$receiverid=mysqli_real_escape_string($conn,$_POST['r_id']);

	
$query=mysqli_query($conn,"insert into follow (sender_id,receiver_id)
values ('$senderid','$receiverid')");
	
if($query){
	echo "<script>alert('You are following!'); </script>";
}
else{
	echo "<script>alert('error following'); </script>";
}

}
?>

<?php
if(isset($_POST['likebtn'])){
	
$senderid=mysqli_real_escape_string($conn,$_POST['s_id']);
$receiverid=mysqli_real_escape_string($conn,$_POST['r_id']);
$postid=mysqli_real_escape_string($conn,$_POST['p_id']);
	
$query=mysqli_query($conn,"insert into post_likes (post_id,s_id,r_id)
values ('$postid','$senderid','$receiverid')");
	
if($query){
	echo "<script>alert('You have liked this picture!'); </script>";
}
else{
	echo "<script>alert('error liking'); </script>";
}

}
?>
