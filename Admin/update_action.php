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

// $row = "UPDATE stock  SET  A_positive =$Ap, A_negative = $A, B_positive = $Bp, B_negative = $B, ABP =$ABp, ABN =$AB, OP = $Op, ON =$O WHERE status ='added'";

$row = " UPDATE stock SET A_positive = $Ap, A_negative = $A, B_positive = $Bp, B_negative = $B, ABP =$ABp, ABN =$ABn, OP = $Op, O_negative =$On  WHERE status = 'added' ";
mysqli_query($con,$row);


echo"<script>alert('Success');window.location='update_stock.php'</script>";
?>
