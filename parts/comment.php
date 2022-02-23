<?php
			$comment=mySQLi_query($conn,"SELECT * from comments  LEFT JOIN users on users.user_id = comments.user_id  where post_id=$post_id order by comment_id DESC");
			while($row=mySQLi_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['comment_content'];
		$name=$row['username'];
		$porf=$row['profile_image'];
			
?>

<div class="comment">
	<?php
	if($user !== $name ||	$_SESSION['username'] !== $name ){
	echo '<a href="includes/repcom.php?id='.$comment_id.'"class="del-com com">Rprt</a>';
			}else{
echo '<a href="scripts/deletecomment.php?id='.$comment_id.'"class="del-com">&times;</a>';
									}
									?>
	<div class="user">
		<img src="<?php echo $porf; ?>" alt="commenter">
		<p class="username"><?php echo ucwords($name); ?></p>
	</div>
	<p class="com-content">
		<?php echo $row['comment_content']; ?>
	</p>
</div>


<?php } ?>