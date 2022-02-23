	<?php 
	$queryarts=mySQLi_query($conn,"SELECT * from articles LEFT JOIN users on users.user_id = articles.user_id order by art_id DESC");
			while($row=mySQLi_fetch_array($queryarts)){
				$authid=$row['user_id'];
			 $art=$row['art_image'];
			 $title=$row['title'];
				$content = $row['art_content'];
				$dat = $row['created'];
				$art_id=$row['art_id'];
?>


	<div class="blog-post">
<div class="blog-img">
	<img src="<?php echo $art; ?>" alt="blog-image">
</div>

<div class="title">
	<p class="h2"><?php echo $title; ?></p>
</div>

<div class="stats">
<div class="buts">
		<div class="likes">
		<p>
			<?php
	 $cquery = mysqli_query($conn,"SELECT COUNT(article_id) as artlikes FROM article_likes WHERE article_id='".$art_id."'");
          $result = mysqli_fetch_assoc($cquery);
             echo '<span>'.$result['artlikes'].'</span>';
									?>Likes</p>
	</div>

	<div class="edit">
		<?php if($authid !== $userId){
									//	echo "Report";
			}else{
		echo '<a href="scripts/deleteart.php?id='.$art_id.'">Delete</a>';
									}
									?>
										</div>

	<div class="read">
		<a href="fullarticle.php?id=<?php echo $art_id; ?>">Read Article</a>
	</div>
</div>
</div>

<div class="author">
<?php
$author=mySQLi_query($conn,"select * from users where user_id=$authid");
if($row=mysqli_fetch_array($author)){
	$authfn=$row['fname'];
	$authln=$row['lname'];
	$authpic=$row['profile_image'];
}
?>
	<div class="aut">
		<img src="<?php echo $authpic; ?>" alt="author-pic">
	<p class="name"><?php echo $authfn. ' ' .$authln; ?></p>


	</div>
</div>
	</div>

		<?php } ?>