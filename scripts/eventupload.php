<?php
if(isset($_POST['create_event'])){
//$poster=mysqli_real_escape_string($conn,$_POST['author']);
$posterid=mysqli_real_escape_string($conn,$_POST['userid']);
$eventname=mysqli_real_escape_string($conn,$_POST['eventname']);
$orgas=mysqli_real_escape_string($conn,$_POST['organiser']);
$postee=mysqli_real_escape_string($conn,$_POST['postee']);
$venue=mysqli_real_escape_string($conn,$_POST['venue']);
$abtevent=mysqli_real_escape_string($conn,$_POST['aboutevent']);
$contact=mysqli_real_escape_string($conn,$_POST['phone']);
$audience=mysqli_real_escape_string($conn,$_POST['audience']);
$time=mysqli_real_escape_string($conn,$_POST['toe']);
$startdate=mysqli_real_escape_string($conn,$_POST['startdate']);
$enddate=mysqli_real_escape_string($conn,$_POST['enddate']);
$image=mysqli_real_escape_string($conn,$_POST['image']);

$query=mysqli_query($conn,"insert into events (user_id,nameofevent,organisers,picofposter,postee,venue,about,contact,audience,time,startdate,enddate)
values ('$posterid','$eventname','$orgas','$image','$postee','$venue','$abtevent','$contact','$audience','$time','$startdate','$enddate')");
	
if($query){
header("location:events.php");
exit();
}
else{
	echo "<script>alert('error creating event); </script>";
}


	
}


?>
