<?php
$query=mysqli_query($conn,"select * from users ");
while($row=mysqli_fetch_array($query)){
	$name=$row['username'];
	$pic=$row['profile_image'];
 $id=$row['user_id'];
?>

<div class="person">
	<div class="profile">
		<img src="<?php echo $pic; ?>" alt="profile-pic">
	</div>
	<div class="name com">
		@<span><?php echo $name; ?></span>
	</div>
	<div class="bt com">
	<form  method="post">
			<input type="submit" value="Follow" name="follow">
			<input type="hidden" name="r_id" value="<?php echo $id; ?>">
			<input type="hidden" name="s_id" value="<?php echo $ID; ?>">
	</form>
	</div>
</div>

<?php } ?>