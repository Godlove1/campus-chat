

							<?php 
	$queryarts=mySQLi_query($conn,"SELECT * from articles where user_id='$ID' order by art_id DESC");
			while($row=mySQLi_fetch_array($queryarts)){
			 $art=$row['art_image'];
			 $title=$row['title'];
				$art_id=$row['art_id'];
?>

	<div class="blog-post">
<div class="blog-img">
	<img src="<?php echo $art; ?>" alt="blog-image">
</div>

<h2><?php echo $title; ?></h2>

<div class="stats">
<div class="buts">
		<div class="likes">
		<p><span>5</span>Likes</p>
	</div>
	<div class="read">
		<a href="fullarticle.php?id=<?php echo $art_id; ?>">Read Article</a>
	</div>
</div>
</div>

<div class="author">
	<div class="aut">
		<img src="<?php echo $pp; ?>" alt="author-pic">
	<p class="name"><?php echo $username; ?></p>
	</div>
</div>
	</div>
		<?php } ?>