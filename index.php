<!--important links required on the site-->
<?php include 'scripts/dbconn.php';?>
<?php include 'scripts/comment.php';?>
<?php include 'scripts/postupload.php';?>
<?php include 'includes/links.php';?>
<?php include 'scripts/follow.php';
// when the user tries to access this page without first login/signup they are redirected to login page//
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

<!--post contianer to load all posts-->
<?php include 'parts/allposts.php';?>

	<!--create a post form/maodal to create a post-->
	<?php include 'includes/postmodal.php';?>
<!-- bottom navigation bar-->
	<?php include 'includes/navbar.php';?>
<!--loading more posts-->
	<?php include 'includes/spinner.php';?>
	<!--splash screen-->
	<?php include 'loader.php';?>
</main>

	<?php include 'includes/footer.php';?>
