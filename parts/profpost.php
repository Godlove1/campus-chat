	<?php 
	$query=mySQLi_query($conn,"SELECT * from posts where user_id='$ID'  order by post_id DESC");
			while($row=mySQLi_fetch_array($query)){
				$location = $row['post_image'];
				$userid=$row['user_id'];
				$content=$row['post_desc']; 
				$post_id = $row['post_id'];
				$time=$row['created'];
				$posted_by=$row['created'];

?>
	<div class="post">
<!--header of post-->
<div class="post-header">

	<div class="user-info">
		<div class="user-pic">
			<img src="<?php echo $pp; ?>" alt="profpic">
		</div>
		<div class="basic">
			<p class="username">@<span><?php echo ucwords($username); ?></span></p>
			<p class="date">Posted <span><?php echo $time; ?></span></p>
		</div>
	</div>

	<div class="far-menu">
		<img src="icons/1x/outline_linear_scale_black_24dp.png" alt="post-menu">

		<div class="report">
				<?php
	echo '<a href="includes/deletepost.php?id='.$post_id.'">Delete</a>';
									?>
		</div>

	</div>

</div>

<!--post text info-->
<div class="post-text">
	<p>
			<?php echo $content; ?>
	</p>
</div>
<div class="post-pic">
	<img src="<?php echo $location; ?>" alt="poster-post">
</div>

<div class="action-bar">
<div class="like-action">
<input type="submit" name="like" value="like" id="ilkebt">	
<span class="dis">20</span>Likes
</div>
<div class="comments">
	Comments
			<?php
$cquery = mysqli_query($conn,"SELECT COUNT(comment_id) as commentno FROM comments WHERE post_id='".$post_id."'");
         $result = mysqli_fetch_assoc($cquery);
						 echo '<span class="dis">'.$result['commentno']; '</span>';
									?>

</div>
<div class="follow-but">
	<input type="submit" value="follow">
</div>
</div>

<div class="comment-section">
<?php include 'parts/comment.php';?>
</div>

<!--write a comment-->
<div class="post-comment">
<form  method="post">
		<input type="text" name="comment"  placeholder="Comment on This!">
	<input type="submit" value="Comment"  name="send_comment">
		<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
		<input type="hidden" name="user_id" value="<?php echo $userId?>">

</form>
</div>
	</div>

	<!--end of a single post-->
	<?php } ?>
