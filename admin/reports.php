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
					<li><a href="post.php">Posts</a></li>
					<li><a href="reports.php" class="active">Reports</a></li>
						<li>	<a href="../login.php?logout='1'">LogOut</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="data">

<table>

	<tr>
		<th>Image</th>
		<th>Reporter</th>
		<th>date</th>
		<th>Content</th>
		<th>Action</th>
	</tr>
<tr>
	<td><img src="../icons/1x/outline_article_black_24dp.png" alt=""></td>
	<td>askianam mandeds</td>
	<td>4 day agos</td>
	<td> many shall fall</td>
	<td><a href="">delete</a></td>
</tr>





</table>


	</div>



</main>



</body>
</html>