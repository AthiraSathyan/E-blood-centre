<?php
include "config.php";

$Fname= $_POST['centername'];
$Reg_num = $_POST['regnum'];
$Location= $_POST['location'];
$District= $_POST['district'];
$Email= $_POST['email'];
$Phone= $_POST['mobile'];
$User_name= $_POST['username'];
$Password= $_POST['password'];
$Password2= $_POST['password2'];

if ($Password == $Password2)
{
$sql="INSERT INTO login(username,password,type,status) VALUES('$User_name','$Password','Bank','null')";
mysqli_query($con,$sql);
$log_id=mysqli_insert_id($con);

$row= "INSERT INTO `blood_bank`.`blood_bank` (`log_id`,`center_name`, `register_number`,`location`, `district`, `email_id`, `contact`, `status`) VALUES ('$log_id','$Fname','$Reg_num', '$Location', '$District', '$Email', '$Phone', 'added')";
mysqli_query($con,$row);
 echo"<script>alert('registration completed');window.location='login.php'</script>";

}
else
{
 echo"<script>alert('Password not matched');window.location='login.php'</script>";

}
?>
