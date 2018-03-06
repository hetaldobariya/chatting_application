<?php
include('db.php');
if($_POST)
{
	$user = $_POST['user'];
	$msg = $_POST['msg'];
	mysqli_query($conn, "insert into chat(user,msg)values('$user','$msg')");
}

?>

<li class="box">
<b><?php echo $user; ?>:</b><?php echo $msg;?>
</li>