
<?php include 'scripts/dbconn.php';?>
<?php include 'scripts/comment.php';?>
<?php include 'scripts/postupload.php';?>
<?php include 'includes/links.php';?>
<?php include 'scripts/follow.php';

if(!isset($_SESSION['username'])){
header("location: login.php");
exit();
}

?>
<body>
	<!--header-->
<?php include 'includes/header.php';?>
<!--posts-->
<main>

<!--post contianer-->
<?php include 'parts/allposts.php';?>

	<!--create a post form-->
	<?php include 'includes/postmodal.php';?>
<!--navigation bar-->
	<?php include 'includes/navbar.php';?>
<!--loading more posts-->
	<?php include 'includes/spinner.php';?>
	<?php include 'loader.php';?>
</main>

	<?php include 'includes/footer.php';?>