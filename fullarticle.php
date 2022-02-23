
<?php include 'scripts/dbconn.php';?>
<?php include 'includes/links.php';?>
<?php include 'scripts/likearticle.php';?>
<body>
	<!--header-->
<?php include 'includes/header.php';?>

<!--posts-->
<main>
	
	<!--reading full article-->
	<div class="full-article">
		<div class="back">
			<a href="blog.php">Back</a>
		</div>

		
<?php
if(isset($_GET['id'])){
$ID=$_GET['id'];
$userReq=mysqli_query($conn,"SELECT * from articles where art_id=$ID");
if($row=mySQLi_fetch_array($userReq)){
        $authid= $row['user_id'];
				$artimg=$row['art_image'];
				$title=$row['title'];
				$artcont = $row['art_content'];
				$date=$row['created'];
			
}

}

?>






		<!--title-->
		<div class="title">
			<h3><?php echo $title; ?></h3>
		</div>
<!--image-->
<div class="blog-img">
	<img src="<?php echo $artimg; ?>" alt="blog image">
</div>

<div class="blog-content">
	<p><?php echo $artcont; ?></p>
</div>

<?php
$author=mySQLi_query($conn,"select * from users where user_id=$authid");
if($row=mysqli_fetch_array($author)){
	$authfn=$row['fname'];
	$authln=$row['lname'];
	$authpic=$row['profile_image'];
}
?>
<div class="credit">
	<p>Written By</p>
	<div class="aut">
		<img src="<?php echo $authpic; ?>" alt="author">
		<p class="name"><?php echo $authfn. ' ' .$authln; ?></p>
	</div>
</div>

<div class="like">
<form method="POST">
		<input type="submit" value="like" name="likeart">
		<input type="hidden" name="autid" value="<?php echo $authid ?>">
		<input type="hidden" name="sender" value="<?php echo $userId ?>">
		<input type="hidden" name="artid" value="<?php echo $ID; ?>">
</form>
</div>


	</div>

</main>
	<?php include 'includes/footer.php';?>