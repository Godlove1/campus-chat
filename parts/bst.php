		<?php
$cquery = mysqli_query($conn,"SELECT u.user_id,u.username,u.profile_image,u.level, COUNT(*) as novents FROM users u,events a WHERE u.user_id=a.user_id group by a.user_id order by COUNT(*) DESC limit 5");
       
while($row=mysqli_fetch_assoc($cquery)){
									?>
	
	<div class="trend">
		<div class="pic"><img src="<?php echo $row['profile_image']; ?>" alt=""></div>
		<div class="info">
			<p>Articles : <span><?php echo $row['novents']; ?></span> </p>
			<p>Handle : @<span><?php echo $row['username']; ?></span> </p>
			<p>Level : <span><?php echo $row['level']; ?></span></p>
		</div>
	</div>
		<?php } ?>