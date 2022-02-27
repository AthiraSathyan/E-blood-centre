<?php
include "../config.php";
session_start();
$id = $_SESSION['log_id'];

$Fname= $_POST['name'];
$Hname= $_POST['housename'];
$Location= $_POST['location'];
$District= $_POST['district'];
$Age= $_POST['age'];
$Aadhar = $_POST['aadhar'];
$Email= $_POST['email'];
$weight= $_POST['weight'];
$Diseas= $_POST['diseas'];
$Phone= $_POST['mobile'];
$Donation= $_POST['donation'];


// $row= "INSERT INTO `blood_bank`.`register` (`name`, `log_id`, `house_name`, `location`, `district`, `age`, `gender`, `blood_group`, `aadhar`, `email`,`weight`,`disease`, `mobile`, `username`, `password`, `status`) VALUES ('$Fname', '$log_id', '$Hname', '$Location', '$District', '$Age', '$Gender', '$Blood_group', '$Aadhar', '$Email','$weight','$Diseas', '$Phone', '$User_name', '$Password', 'added')";
$row = "UPDATE register  SET  name ='$Fname', house_name= '$Hname', location= '$Location', district= '$District', age='$Age', aadhar='$Aadhar', email= '$Email', weight='$weight', disease='$Diseas', mobile= '$Phone', last_donation = '$Donation' WHERE log_id='$id'";
mysqli_query($con,$row);
echo"<script>alert('Success');window.location='profile.php'</script>";
?>
