<?php
include "config.php";

$Fname= $_POST['name'];
$Hname= $_POST['housename'];
$Location= $_POST['location'];
$District= $_POST['district'];
$Age= $_POST['age'];
$Gender= $_POST['gender'];
$Blood_group= $_POST['blood'];
$Aadhar = $_POST['adhar'];
$Email= $_POST['email'];
$weight= $_POST['weight'];
$Diseas= $_POST['diseas'];
$Phone= $_POST['mobile'];
$User_name= $_POST['username'];
$Password= $_POST['password'];
$Password2= $_POST['password2'];

if($Password == $Password2)
{

$sql="INSERT INTO login(username,password,type,status) VALUES('$User_name','$Password','Donor','null')";
mysqli_query($con,$sql);
$log_id=mysqli_insert_id($con);

$row= "INSERT INTO `blood_bank`.`register` (`name`, `log_id`, `house_name`, `location`, `district`, `age`, `gender`, `blood_group`, `aadhar`, `email`,`weight`,`disease`, `mobile`, `username`, `password`, `last_donation`, `status`) VALUES ('$Fname', '$log_id', '$Hname', '$Location', '$District', '$Age', '$Gender', '$Blood_group', '$Aadhar', '$Email','$weight','$Diseas', '$Phone', '$User_name', '$Password', 'not donated yet', 'added')";

mysqli_query($con,$row);
echo"<script>alert('registration completed');window.location='login.php'</script>";
}
else
{
echo"<script>alert('Password Not Matched');window.location='login.php'</script>";

}
?>
