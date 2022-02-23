<header>
		<?php
if(isset($_SESSION['username'])){
	$user=$_SESSION['username'];
	
$query=mysqli_query($conn,"select * from users where username='$user'");
$row=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)==1){
	$userId=$row['user_id'];
	$profile_picture = $row['profile_image'];
}
}  
	?>
<!--profile pic-->
<div class="toprofile">
	<a href="profile.php?id=<?php echo 	$userId; ?>"><img src="<?php echo $profile_picture; ?>" alt="profile-pic"></a>

	<p class="username"><?php echo ucwords($user); ?></p>
</div>
<!--logo box-->
<div class="logo">
	<h1>CampusChat</h1>
</div>

<!--menu-->
<div class="menu-container">
	<!--menu-button-->
	<div class="menu-but">
		<img src="icons/1x/twotone_menu_black_24dp.png" onclick="openNav()" alt="">
	</div>
</div>

<!--sidenav for mobile devices-->
<div id="mysidenav" class="sidenav">
	<div class="navlogo">
<h1>CampusChat</h1>
	</div>
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="index.php">Home</a>
	<a href="blog.php">School Blog</a>
	<a href="discover.php">Discover</a>
		<a href="facebook.com">Find Friends</a>
			<a href="events.php">See School Events</a>
	<a href="login.php?logout='1'">LogOut</a>

<div class="creds">
<div class="dev">
		<p>Made with &hearts; by</p>
		 <p class="name">Akale Godlove</p>
</div>
</div>

</div>
</header>