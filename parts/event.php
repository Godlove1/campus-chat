	<?php 
	$query=mySQLi_query($conn,"SELECT * from  events  order by event_id DESC");
			while($row=mySQLi_fetch_array($query)){
				$name=$row['nameofevent'];
       $orga = $row['organisers'];
			 $image=$row['picofposter'];
			 $postee=$row['postee'];
				$venue = $row['venue'];
				$about=$row['about'];
				$contact = $row['contact'];
				$aud=$row['audience']; 
				$time = $row['time'];
				$start=$row['startdate'];
				$end=$row['enddate'];

?>

<div class="event">
<h3><?php echo $name ?></h3>

<div class="posted">
	<img src="<?php echo $image; ?>" alt="">
	<p>Posted by : <span><?php echo ucwords($postee) ?></span>  </p>
</div>

<div class="details">
	<p>2<sup>nd</sup> Organiser : <span><?php echo $orga ?></span> </p>
	<p>Audience : <span><?php echo $aud ?></span> </p>
	<p>Time : <span><?php echo $time ?></span> </p>
	<p>Start Date  :<span><?php echo $start ?></span> </p>
	<p>End Date  :<span><?php echo $end ?></span> </p>
	<p>Venue : <span><?php echo $venue ?></span> </p>
	<p>Contact : <span><?php echo $contact ?></span> </p>
</div>

<div class="thesis">
	<p class="abt">About :</p>
	<p><?php echo $about ?></p>
</div>

</div>
		<?php } ?>