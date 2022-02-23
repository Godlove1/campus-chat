
<?php include 'scripts/dbconn.php';?>
<?php include 'includes/profheader.php';?>
<?php include 'scripts/comment.php';?>
<!--profile navbar-->
<div class="navbar">
	<div class="username">
		<p><a href="profile.php?id=<?php echo $ID;?>"><?php echo $username; ?></a></p>
	</div>
	<div class="posts nav">
		<a href="profilepost.php?id=<?php echo $ID;?>" class="active">Posts</a>
	
			<?php
 $cquery = mysqli_query($conn,"SELECT COUNT(user_id) as userposts FROM posts WHERE user_id='".$ID."'");
      $result = mysqli_fetch_assoc($cquery);
       echo '<p class="number">' .$result['userposts']. '</p>';
									?>
	</div>
		<div class="articles nav">
		<a href="profilearts.php?id=<?php echo $ID;?>">Articles</a>
		<p class="number">0</p>
			<?php
$cquery = mysqli_query($conn,"SELECT COUNT(user_id) as userarts FROM articles WHERE user_id='".$ID."'");
       $result = mysqli_fetch_assoc($cquery);
             echo '<p class="number">' .$result['userarts']. '</p>';
									?>
	</div>
</div>
	</div>

	<main>

<!--post contianer-->
<div class="post-wrapper">
<?php include 'parts/profpost.php';?>
</div>





	<!--edit profile-->
			<div id="showprofile">
				<p id="close">X</p>
				<form method="POST" enctype="multipart/form-data">
					<legend>Edit Profile</legend>
					<!--	<div class="group">
						<label>Username</label>
						<input type="text" placeholder="new username" name="username" value="<?php //echo $username ?>">
					</div>
					-->
					<div class="group">
						<label>Firstname</label>
						<input type="text" name="fname" value="	<?php echo $fname ?>">
					</div>

					<div class="group">
						<label>lastname</label>
						<input type="text" name="lname" value="<?php echo $lname ?>">
					</div>

					<div class="group">
						<label>Profile Image</label>
						<div class="imgcontainer">
							<img src="" onClick="triggerClick()" id="profileDisplay" class="pro">
						</div>
						<input type="file" name="postimg" onChange="displayImage(this)" id="profileImage">
					</div>

					<div class="group">
						<label>Update your about :</label>
						<textarea name="about" id="" cols="60" rows="5"></textarea>
					</div>

					<div class="group">
						<label>Level</label>
						<input type="text" name="level" value="">
					</div>

					<div class="group">
						<label>Department</label>
						<input type="text" name="dept" value="">
					</div>

					<div class="group">
						<label>Nickname</label>
						<input type="text" placeholder="new nickname" name="nn" value="">
					</div>

					<div class="group">
						<label>Interest</label>
						<input type="text" name="interest" value="">
					</div>

					<input type="submit" value="UPDATE" name="updatebio">
				</form>
			</div>
			<!--end of edit profile-->
			<!--create anevent-->
			<div id="createvent">
				<p id="close-event">X</p>
				<form method="POST" enctype="multipart/form-data">
					<legend>Create An Event</legend>
					<div class="group">
						<label>Event Name</label>
						<input type="text" placeholder="Name of Event" name=" eventname">
					</div>

					<div class="group">
						<label>Organisers</label>
						<input type="text" name="organiser">
						<input type="hidden" name="image" value="<?php echo $pp; ?>">
						<input type="hidden" name="postee" value="<?php echo  $username ?>">
						<input type="hidden" name="userid" value="<?php echo $userId; ?>">
					</div>

					<div class="group">
						<label>Venue</label>
						<input type="text" name="venue">
					</div>

					<div class="group">
						<label>About Event :</label>
						<textarea name="aboutevent" placeholder="A short Description of Event" cols="60" rows="5"></textarea>
					</div>

					<div class="group">
						<label>Contact</label>
						<input type="tel" name="phone" placeholder="Phone Number">
					</div>

					<div class="group">
						<label>Audience</label>
						<input type="text" name="audience" placeholder="Anyone or specify Department or Course">
					</div>

					<div class="group">
						<label>Time of Event</label>
						<input type="time" name="toe">
					</div>

					<div class="group">
						<label>Duration of Event(Start Date)</label>
						<input type="date" name="startdate" placeholder="Day of event">
					</div>

					<div class="group">
						<label>Duration of Event(End Date)</label>
						<input type="date" name="enddate" placeholder="Day of event">
					</div>

					<input type="submit" value="CREATE EVENT" name="create_event">
				</form>
			</div>


<!--go home button-->
<div class="bavk">
<div class="bk">
	<a href="index.php"><img src="icons/1x/outline_home_white_24dp.png" alt=""></a>
</div>
</div>

	</main>

</body>
</php>