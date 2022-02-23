<div class="post-wrapper">
	<?php 
	$query=mySQLi_query($conn,"SELECT * from posts LEFT JOIN users on users.user_id = posts.user_id order by post_id DESC");
			while($row=mySQLi_fetch_array($query)){
       $posted_by = $row['username'];
				$location = $row['post_image'];
				$userid=$row['user_id'];
				$profile_picture = $row['profile_image'];
				$content=$row['post_desc']; 
				$post_id = $row['post_id'];
				$time=$row['created'];

?>
	<div class="post">
<!--header of post-->
<div class="post-header">

	<div class="user-info">
		<div class="user-pic">
			<a href="profile.php?id=<?php echo 	$userid; ?>"><img src="<?php echo $profile_picture; ?>" alt="profile-pic"></a>
		</div>
		<div class="basic">
			<p class="username">@<span><?php echo ucwords($posted_by); ?></span></p>
			<p class="date">Posted <span><?php echo $time = time_stamp($time); ?></span></p>
		</div>
	</div>

	<div class="far-menu">
		<img src="icons/1x/outline_linear_scale_black_24dp.png" alt="post-menu">

		<div class="report">
				<?php
									if($posted_by !== $user){
	echo '<a href="includes/report.php?id='.$post_id.'">Report</a>';
									}else{
										echo '<a href="scripts/deletepost.php?id='.$post_id.'">
									Delete
									</a>';
									}
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
<form  method="post">
		<input type="submit" value="Like" name="likebtn">
		<input type="hidden" name="s_id" value="<?php echo $userId ?>">
		<input type="hidden" name="r_id" value="<?php echo $userid?>">
		<input type="hidden" name="p_id" value="<?php echo 	$post_id?>">
</form>	
		<?php
		$cquery = mysqli_query($conn,"SELECT COUNT(like_id) as likes FROM post_likes WHERE post_id='".$post_id."'");
           $result = mysqli_fetch_assoc($cquery);
             echo '<span class="dis">'.$result['likes'].'</span>';
									?> Likes
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
<form  method="post">
		<input type="submit" value="follow" name="follow">
		<input type="hidden" name="s_id" value="<?php echo $userId ?>">
		<input type="hidden" name="r_id" value="<?php echo $userid?>">
</form>
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

	
</div>