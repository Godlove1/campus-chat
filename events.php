
<?php include 'scripts/dbconn.php';?>
<?php include 'includes/links.php';?>
<body>
	<!--header-->
<?php include 'includes/header.php';?>

<!--posts-->
<main>

<div class="head">
<div class="other">
		<div class="trending">
		<h2><a href="trending.php">Trending</a></h2>
	</div>
		<div class="Events">
		<h2><a href="events.php" class="active" >Events</a></h2>
	</div>
</div>
</div>

<!--Events-wrapper-->
<div class="events-wrapper">
<?php include 'parts/event.php';?>
</div>

<!--navigation bar-->
	<?php include 'includes/navbar.php';?>
<!--loading more posts-->
	<?php include 'includes/spinner.php';?>
		<?php include 'loader.php';?>
</main>

	<?php include 'includes/footer.php';?>