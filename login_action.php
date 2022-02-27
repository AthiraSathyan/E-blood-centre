 
<?php
include 'config.php';

session_start();

$Name = $_POST['username'];
$Password=$_POST['password'];

$sql="select * from login where username='".$Name."' and password='".$Password."'";

$res=mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
$_SESSION["log_id"]=$data["log_id"];


if ($data['username']== $Name && $data['password'] == $Password )
{

  if($data['type'] == "Bank" && $data['status']=="approved" ) 
  {
  
    header("location:Blood_bank/index.php");


  }
  elseif($data['type']=="Donor" && $data['status']=="approved"  )
    {
    
        header("location:Donor/index.php");
    }
     elseif($data['type']=="Seeker" && $data['status']=="approved" )
    {
        
        header("location:Seeker/index.php");
    }
    elseif($data['type']=="admin" && $data['status']=="approved" )
    {
        
        header("location:Admin/index.php");
    }
    else
    {
        echo"<script>alert('Not approved'); 
                 window.location.href='index.php';</script>";
    }
}
else
{
    echo"<script>alert('incorrect password'); 
                  window.location.href='login.php';</script>";
}


?>

