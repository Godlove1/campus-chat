<!--important links required on the page-->
<?php include 'scripts/dbconn.php';?>
<?php include 'includes/links.php';?>
<?php include 'scripts/articleupload.php'?>
<body>
	<!--header bar-->
<?php include 'includes/header.php';?>
<!--header bar-->
	
<!--All posts container-->
<main>
	
	<div class="tit">
		<h2>News and Aticles :</h2>
	</div>
	
<!--blog posts wrapper-->
<div class="blog-wrapper">
<?php include 'parts/article.php';?>
</div>

				<div class="create">
					<!--create a post button-->
					<div class="create-post">
						<img src="icons/1x/outline_article_black_24dp.png" alt="create post" id="createpost">
						<p class="create-text">Create Article</p>
					</div>
						<!--/create a post button-->
					
					<!-- form to create a form linked from includes folder-->
				<?php include 'includes/articlemodal.php';?>
				</div>


<!--navigation bar-->
	<?php include 'includes/navbar.php';?>
	
<!--loading/spinner animation to load more posts-->
	<?php include 'includes/spinner.php';?>
	<!--splash screen-->
		<?php include 'loader.php';?>
</main>

	<?php include 'includes/footer.php';?>
