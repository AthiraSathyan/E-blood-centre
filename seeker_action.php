<?php
include "config.php";

$Fname= $_POST['seekername'];
$Address= $_POST['address'];
$Phone= $_POST['mobile'];
$Location= $_POST['location'];
$District= $_POST['district'];
$Email= $_POST['email'];
$User_name= $_POST['username'];
$Password= $_POST['password'];
$Password2= $_POST['password2'];

if($Password2 == $Password)
{

$sql="INSERT INTO login(username,password,type,status) VALUES('$User_name','$Password','Seeker','null')";
mysqli_query($con,$sql);
$log_id=mysqli_insert_id($con);

// $row= "INSERT INTO `blood_bank`.`seeker` (`log_id`, `seeker_name`, `address`, `mobile`, `loc`, `s_district`, `email_id`) VALUES ('$log_id', '$Fname', '$Address', '$Phone', '$Location', '$District', '$Email')";

$row ="INSERT INTO `seeker` (`log_id`, `seeker_name`, `address`, `mobile`, `loc`, `s_district`, `email_id`) VALUES ('$log_id', '$Fname', '$Address', '$Phone', '$Location', '$District', '$Email')";


mysqli_query($con,$row);
echo"<script>alert('registration completed');window.location='login.php'</script>";
}
else
{
echo"<script>alert('Password Not Matched');window.location='login.php'</script>";
}
?>
