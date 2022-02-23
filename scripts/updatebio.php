<?php
if(isset($_POST['updatebio'])){
//$username=mysqli_real_escape_string($conn,$_POST['username']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$bio=mysqli_real_escape_string($conn,$_POST['about']);
$level=mysqli_real_escape_string($conn,$_POST['level']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);
$nn=mysqli_real_escape_string($conn,$_POST['nn']);
$interest=mysqli_real_escape_string($conn,$_POST['interest']);

//for the profile image
$file=$_FILES['postimg']['tmp_name'];
$image = $_FILES["postimg"] ["name"];
$image_name= addslashes($_FILES['postimg']['name']);
$size = $_FILES["postimg"] ["size"];
$error = $_FILES["postimg"] ["error"];
if($size > 3000000) 
			{
echo '<script>alert("Format is not allowed or file size is too big!");</script>';
			}else
				{
$location="images/profilepics/" . $_FILES["postimg"]["name"];
move_uploaded_file($_FILES["postimg"]["tmp_name"],$location);			

//fo the insertion

$query=mysqli_query($conn,"update  users set fname='$fname',lname='$lname',profile_image='$location',description='$bio',level='$level',department='$dept',nicknames='$nn',interests='$interest' where user_id='$ID'");
	
if($query){
header("location:index.php");
exit();
}
else{
	echo "<script>alert('error updating Bio'); </script>";
}


}
}


?>
