<?php
include "../config.php";
session_start();

$Ap = $_POST['a+'];
$A = $_POST['a-'];
$Bp = $_POST['b+'];
$B = $_POST['b-'];
$ABp = $_POST['ab+'];
$ABn = $_POST['ab'];
$Op = $_POST['o+'];
$On = $_POST['o-'];
$id = $_SESSION['log_id'];

$row = "INSERT INTO `blood_bank`.`stock` (`A_positive`, `A_negative`, `B_positive`, `B_negative`, `ABP`, `ABN`, `OP`, `O_negative`, `status`, `bl_id`) VALUES ('$Ap', '$A', '$Bp', '$B', '$ABp', '$ABn', '$Op', '$On', 'added', '$id')";
mysqli_query($con,$row);


echo"<script>alert('Success');window.location='update_stock.php'</script>";

?>