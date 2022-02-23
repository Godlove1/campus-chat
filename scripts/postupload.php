<?php
//image
	if (isset($_POST['newpost'])) {
$file=$_FILES['postimg']['tmp_name'];
$image = $_FILES["postimg"] ["name"];
$image_name= addslashes($_FILES['postimg']['name']);
$size = $_FILES["postimg"] ["size"];
$error = $_FILES["postimg"] ["error"];

if ($error > 0){
echo '<script>alert("Error uploading your post. try again!");</script>';
		}else{
	if($size > 3000000) //conditions for the file
			{
echo '<script>alert("Format is not allowed or file size is too big!");</script>';
			}else{
$location="images/" . $_FILES["postimg"]["name"];
move_uploaded_file($_FILES["postimg"]["tmp_name"],$location);			
$postdesc=mysqli_real_escape_string($conn,$_POST['postdesc']);
$userid=mysqli_real_escape_string($conn,$_POST['userid']);
	$time=time();			
//inserting the post into database
$check = mysqli_query($conn, "insert into posts(user_id,post_desc,post_image,created) values('$userid','$postdesc','$location','$time')");


	if ($check) {
			header("location:index.php");
exit();
	} else {
		echo "<script>
		alert('error uploading post');
	</script>";
	}
}
									}
							}	

?>
