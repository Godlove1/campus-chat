
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
		<h2><a href="#"class="active">Trending</a></h2>
	</div>
		<div class="Events">
		<h2><a href="events.php" >Events</a></h2>
	</div>
</div>
</div>

<!-- trending wrapper-->
<div class="trending-wrapper">

<div class="trendy">
	<h3>Most Followed Students</h3>
<?php include 'parts/mfs.php';?>
</div>


<div class="trendy">
	<h3>Best Article/writers Students</h3>
<?php include 'parts/btw.php';?>
</div>


<div class="trendy">
	<h3>Best  Student/Tutor</h3>
<?php include 'parts/bst.php';?>
</div>

</div>

<!--navigation bar-->
	<?php include 'includes/navbar.php';?>
<!--loading more posts-->
	<?php include 'includes/spinner.php';?>
	
</main>

	<?php include 'includes/footer.php';?>