<?php
include '../config.php';
$id = $_GET['id'];
$sq = "UPDATE blood_request SET status ='approved'  WHERE r_id = '$id'";
mysqli_query($con,$sq);
$receiver = $_GET['email'];
$subject = "Blood Bank seeker request ";
$body = "Hi, there... your request accepted";
$sender = "From:syammohananofficial@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo"<script>alert('Success');window.location='index.php'</script>";
}else{
    echo"<script>alert('Error');window.location='index.php'</script>";
}

$id = $_GET['id'];
$sq = "UPDATE blood_request SET status ='approved'  WHERE r_id = '$id'";
mysqli_query($con,$sq);


?>