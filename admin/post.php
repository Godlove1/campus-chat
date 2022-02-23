	<?php include '../scripts/dbconn.php';?>
	<?php include 'include/links.php';?>
	
<main>

	<div class="navbar">
		<nav>
			<div class="logo">
				<h1>CampusChat</h1>
			</div>
			<div class="nav">
				<ul>
					<li><a href="index.php" >Users</a></li>
					<li><a href="folowers.php">followers</a></li>
					<li><a href="articles.php">Articles</a></li>
						<li><a href="events.php">Events</a></li>
					<li><a href="post.php" class="active">Posts</a></li>
					<li><a href="reports.php">Reports</a></li>
						<li>	<a href="../login.php?logout='1'">LogOut</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="data">

<table>

	<tr>
		<th>image</th>
		<th>Content</th>
		<th>date</th>
		<th>Username</th>
		<th>Likes</th>
		<th>Action</th>
	</tr>
		<?php 
	$query=mySQLi_query($conn,"SELECT * from posts LEFT JOIN users on users.user_id = posts.user_id order by post_id DESC");
			while($row=mySQLi_fetch_array($query)){
       $posted_by = $row['username'];
				$location ="../" .$row['post_image'];
				$userid=$row['user_id'];
				$profile_picture = $row['profile_image'];
				$content=$row['post_desc']; 
				$post_id = $row['post_id'];
				$time=$row['created'];

?>
<tr>
	<td><img src="<?php echo $location; ?>" alt=""></td>
	<td><?php echo $content; ?></td>
	<td><?php echo $time = time_stamp($time); ?></td>
	<td><?php echo $posted_by; ?></td>
	<td>	<?php
		$cquery = mysqli_query($conn,"SELECT COUNT(like_id) as likes FROM post_likes WHERE post_id='".$post_id."'");
           $result = mysqli_fetch_assoc($cquery);
             echo '<span class="dis">'.$result['likes'].'</span>';
									?></td>
	<td><a href="">delete</a></td>
</tr>
<?php } ?>




</table>


	</div>



</main>



</body>
</html>