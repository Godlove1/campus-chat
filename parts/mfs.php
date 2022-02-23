	<?php
$cquery = mysqli_query($conn,"SELECT u.user_id,u.username,u.profile_image,u.level, COUNT(*) as nofos FROM users u,follow f WHERE u.user_id=f.receiver_id group by f.receiver_id order by COUNT(*) DESC limit 5");
       
while($row=mysqli_fetch_assoc($cquery)){
									?>
	<div class="trend">
		<div class="pic"><img src="<?php echo $row['profile_image']; ?>" alt=""></div>
		<div class="info">
			<p>Followers : <span><?php echo $row['nofos']; ?></span> </p>
			<p>Name : @<span><?php echo ucwords($row['username']); ?></span> </p>
			<p>Level : <span><?php echo $row['level']; ?></span></p>
		</div>
	</div>
	<?php } ?>