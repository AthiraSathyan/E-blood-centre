<?php
session_start();
if($_SESSION)
{
	include '../config.php';
	$id=$_GET['id'];
	// $sql="UPDATE login SET status='approved' WHERE log_id='$id'";
	$str="UPDATE login SET status='approved' WHERE log_id='$id'";
	mysqli_query($con, $str);
	echo "<script>alert('Success'); window.location.href='index.php';</script>";
}
else{
	header('Location: ../login.php');
}
?>