<?php
session_start();
if($_SESSION)
{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Donor</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="../assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="../assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/css/linearicons.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
  

    <!-- Header Area Starts -->
   <?php include 'header.php' ; ?>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Registered Donors</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="departments.html">Departments</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
        <div class="container">

        <table id="customers">
  <tr>
    <th>Name</th>
    <th>House Name</th>
    <th>Location</th>
    <th>District</th>
    <th>Age</th>
    <th>Blood Group</th>
    <th>Aadhar</th>
    <th>Weight</th>
    <th>Disease</th>
    <th>Mobile</th>
    <th>Email</th>
    <!-- <th>Action</th> -->
    <!-- <th>Action</th> -->
  </tr>


    <?php

include '../config.php';

    $query="SELECT * FROM register,login  WHERE register.log_id = login.log_id AND login.status = 'Approved'  ";
    $result= mysqli_query($con,$query);


    while($data=mysqli_fetch_assoc($result))
    {

    ?>

<tr>
  <td><?php echo $data['name'];?></td>
  <td><?php echo $data['house_name'];?></td>
  <td><?php echo $data['location'];?></td> 
  <td><?php echo $data['district'];?></td>
  <td><?php echo $data['age'];?></td>
  <td><?php echo $data['blood_group'];?></td>
  <td><?php echo $data['aadhar'];?></td>
  <td><?php echo $data['weight'];?></td>
  <td><?php echo $data['disease'];?></td>
  <td><?php echo $data['mobile'];?></td>
  <td><?php echo $data['email'];?></td>
   <!-- <td><a class="btn btn-success" href="Approve_donor.php?id=<?php echo $data['log_id'];?>">Approve</a></td> -->
</tr>
<?php
   }
?>
  </table><br><br>
      


            
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Footer Area Starts -->
<?php include '../footer.php'; ?>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="../assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="../assets/js/vendor/wow.min.js"></script>
    <script src="../assets/js/vendor/owl-carousel.min.js"></script>
    <script src="../assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="../assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="../assets/js/vendor/superfish.min.js"></script>
    <script src="../assets/js/main.js"></script>



</body>
</html>
<?php
}
else
{
header('location:../index.php');
}
?>