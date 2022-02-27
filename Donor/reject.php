<?php
include '../config.php';
$id = $_GET['id'];
$sq = "UPDATE seeker_request SET status ='rejected'  WHERE rq_id = '$id'";
mysqli_query($con,$sq);

$receiver = $_GET['email'];
$subject = "Blood Bank seeker request ";
$body = "Hi, there... Sorry your request rejected try next time..";
$sender = "From:syammohananofficial@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo"<script>alert('Success');window.location='index.php'</script>";
}else{
    echo"<script>alert('Error');window.location='index.php'</script>";
}

// $id = $_GET['id'];
// $sq = "UPDATE seeker_request SET status ='approved'  WHERE r_id = '$id'";
// mysqli_query($con,$sq);


?>