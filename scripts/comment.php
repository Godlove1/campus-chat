<?php
if (isset($_POST['send_comment']))
{
$content_comment=$_POST['comment'];
$post_id=$_POST['post_id'];
$user_id=$_POST['user_id'];



$commented=mySQLi_query($conn,"INSERT INTO comments (post_id,user_id,comment_content)
VALUES ('$post_id','$user_id','$content_comment')");

if($commented){
	header("location:index.php");
exit();
}else{
echo "<script>
alert('error sending comment');
</script>";
}

}

?>
