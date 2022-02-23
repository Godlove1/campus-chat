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
					<li><a href="index.php" class="active">Users</a></li>
					<li><a href="folowers.php">followers</a></li>
					<li><a href="articles.php">Articles</a></li>
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
		<th>FistN</th>
		<th>LastN</th>
		<th>UserN</th>
		<th>Action</th>
	</tr>

	<?php
$query=mysqli_query($conn,"select * from users ");
while($row=mysqli_fetch_array($query)){
	$name=$row['username'];
	$pic="../".$row['profile_image'];
 $id=$row['user_id'];
 $lname=$row['lname'];
 $fname=$row['fname'];
?>
<tr>
	<td><img src="<?php echo $pic ;?>" alt=""></td>
	<td><?php echo $fname ;?></td>
	<td><?php echo $lname ;?></td>
	<td><?php echo $name ;?></td>
	<td><a href="deluser.php?id=<?php echo $id ;?>">delete</a></td>
</tr>
<?php } ?>




</table>


	</div>



</main>



</body>
</html>