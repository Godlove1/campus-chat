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
					<li><a href="articles.php" class="active">Articles</a></li>
						<li><a href="events.php">Events</a></li>
					<li><a href="post.php">Posts</a></li>
					<li><a href="reports.php">Reports</a></li>
						<li>	<a href="../login.php?logout='1'">LogOut</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="data">

<table>

	<tr>
		<th>Image</th>
		<th>Names</th>
		<th>Title</th>
		<th>Likes</th>
		<th>Action</th>
	</tr>
	<?php 
	$queryarts=mySQLi_query($conn,"SELECT * from articles LEFT JOIN users on users.user_id = articles.user_id order by art_id DESC");
			while($row=mySQLi_fetch_array($queryarts)){
				$authid=$row['user_id'];
			 $art="../".$row['art_image'];
			 $title=$row['title'];
				$content = $row['art_content'];
				$dat = $row['created'];
				$art_id=$row['art_id'];
?>

<tr>
	<td><img src="<?php echo $art; ?>" alt=""></td>
	<td><?php
$author=mySQLi_query($conn,"select * from users where user_id=$authid");
if($row=mysqli_fetch_array($author)){
	$authfn=$row['fname'];
	$authln=$row['lname'];
}
?>
<?php echo $authfn. ' ' .$authln; ?></td>
	<td> <?php echo $title; ?></td>
	<td>	<?php
	 $cquery = mysqli_query($conn,"SELECT COUNT(article_id) as artlikes FROM article_likes WHERE article_id='".$art_id."'");
          $result = mysqli_fetch_assoc($cquery);
             echo '<span>'.$result['artlikes'].'</span>';
									?></td>
	<td><a href="">delete</a></td>
</tr>

<?php } ?>



</table>


	</div>



</main>



</body>
</html>