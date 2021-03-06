<!---important links required on the page-->
<?php include 'scripts/dbconn.php';?>
<?php include 'includes/links.php';?>
<?php include 'scripts/follow.php';?>
<body>
	<!--header-->
<?php include 'includes/header.php';?>

<!--posts-->
<main>

	<div class="discover-wrapper">
		<div class="search">
			<input type="search" name="search" id="search" placeholder="Search">
			<input type="submit" value="Search" name="sbtn">
		</div>
		<!--load all user of the platform linked from parts folder-->
<?php include 'parts/allusers.php';?>
		<!--load all user of the platform linked from parts folder-->
	</div>

<!--navigation bar-->
	<?php include 'includes/navbar.php';?>
<!--loading more posts-->
	<?php include 'includes/spinner.php';?>
		<?php include 'loader.php';?>
</main>

	<?php include 'includes/footer.php';?>
