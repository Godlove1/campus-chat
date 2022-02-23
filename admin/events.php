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
						<li><a href="index.php">Users</a></li>
					<li><a href="folowers.php">followers</a></li>
					<li><a href="articles.php">Articles</a></li>
						<li><a href="events.php"  class="active">Events</a></li>
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
		<th>poster</th>
		<th>Organiser</th>
		<th>date</th>
		<th>Venue</th>
		<th>Audience</th>
		<th>Action</th>
	</tr>
		<?php 
	$query=mySQLi_query($conn,"SELECT * from  events  order by event_id DESC");
			while($row=mySQLi_fetch_array($query)){
				$name=$row['nameofevent'];
       $orga = $row['organisers'];
			 $image="../".$row['picofposter'];
			 $postee=$row['postee'];
				$venue = $row['venue'];
				$about=$row['about'];
				$contact = $row['contact'];
				$aud=$row['audience']; 
				$time = $row['time'];
				$start=$row['startdate'];
				$end=$row['enddate'];

?>
<tr>
	<td><img src="<?php echo $image; ?>" alt=""></td>
	<td><?php echo $orga; ?></td>
	<td><?php echo $start; ?></td>
	<td> <?php echo $venue; ?></td>
	<td><?php echo $aud; ?></td>
	<td><a href="">delete</a></td>
</tr>
<?php } ?>




</table>


	</div>



</main>



</body>
</html>