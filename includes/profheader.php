<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" type="image/png" href="icons/favicon.png"/>
</head>
<body>

<?php
if(isset($_GET['id'])){
$ID=$_GET['id'];
$userReq=mysqli_query($conn,"SELECT * from users where user_id=$ID");
if($row=mySQLi_fetch_array($userReq)){
        $username = $row['username'];
				$fname=$row['fname'];
				$lname=$row['lname'];
				$pp = $row['profile_image'];
				$desc=$row['description']; 
				$level= $row['level'];
				$dept=$row['department'];
				$nn=$row['nicknames'];
				$inter=$row['interests'];
				$time=$row['date_joined'];
			
}

}

?>



<!--the whole header-->
	<div class="header">
		<!--cover pic-->
<div class="coverpic">
<h1>CampusChat</h1>
</div>

<!--pic tur and menu bar-->
<div class="picment">
	<img src="<?php echo $pp; ?>" alt="profile-image">

	<div class="menu">

		<div class="dots" id="dot" onclick="opmenu()">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		</div>

		<div class="ul" id="ul">
			<ul>
				<li id="editprofile">Edit Profile</li>
				<li id="openevent">create Event</li>
			</ul>
		</div>
	</div>

</div>

<!--user info-->
<div class="user-details">
<h1><?php echo $fname.' ' .$lname; ?></h1>
<div class="username">
	<p>@<span><?php echo $username; ?></span> </p>
	<p><span class="join">Joined <?php echo $time = time_stamp($time); ?></span></p>
</div>

<div class="follower">
	<p><span class="no-fo">
			<?php
	 $cquery = mysqli_query($conn,"SELECT COUNT(receiver_id) as followers FROM follow WHERE receiver_id='".$ID."'");
             $result = mysqli_fetch_assoc($cquery);
             echo '<span>'.$result['followers'].'</span>';
									?>
	</span> Followers</p>
</div>

</div>