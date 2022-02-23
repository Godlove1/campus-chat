<?php
//image
	if (isset($_POST['newarticle'])) {
$file=$_FILES['postimg']['tmp_name'];
$image = $_FILES["postimg"] ["name"];
$image_name= addslashes($_FILES['postimg']['name']);
$size = $_FILES["postimg"] ["size"];
$error = $_FILES["postimg"] ["error"];

if ($error > 0){
echo '<script>alert("Error uploading your article. try again!");</script>';
		}else{
	if($size > 3000000) //conditions for the file
			{
echo '<script>alert("Format is not allowed or file size is too big!");</script>';
			}else{
$location="images/blogimgs/" . $_FILES["postimg"]["name"];
move_uploaded_file($_FILES["postimg"]["tmp_name"],$location);	
$head=mysqli_real_escape_string($conn,$_POST['heading']);
$postdesc=mysqli_real_escape_string($conn,$_POST['postdesc']);
$userid=mysqli_real_escape_string($conn,$_POST['userid']);
	$time=time();			
//inserting the article into database
$check = mysqli_query($conn, "insert into articles(user_id,art_image,title,art_content,created) values('$userid','$location','$head','$postdesc','$time')");


	if ($check) {
		header("location:blog.php");
exit();
	} else {
		echo "<script>
		alert('error uploading Article');
		</script>";
	}
}
									}
							}	

?>
