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
    <title>Profile</title>

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
  background-color: #ff5555;
  color: white;
}
</style>

</head>
<body>
   

   <!-- Header Area Starts -->
   <?php include 'header.php'; ?>
<!-- Header Area End -->

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Approved Donors</h1>
                <!-- <a href="index.html">Home</a> <span>|</span> <a href="contact.html">Contact Us</a> -->
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->




    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container" style="padding-top: 100px;">
            <div class="row">
               
            <!-- <h1>A Fancy Table</h1> -->

<table id="customers">
  <tr>
    <!-- <th>Blood Group</th> -->
    <th>Name</th>
    <th>Address</th>
    <th>mobile</th>
    <!-- <th>No: Units</th> -->
    <th>Date</th>
    <!-- <th>Action</th> -->
  </tr>

  <?php 
  include '../config.php';
//   session_start();
  $id = $_SESSION['log_id'];    

$sq="SELECT *
FROM seeker_request
JOIN seeker ON (seeker.log_id = seeker_request.user_id)
JOIN register ON (register.log_id = seeker_request.bk_id AND seeker_request.bk_id ='$id' AND seeker_request.status='approved' )";

  $res = mysqli_query($con,$sq);
  while($data = mysqli_fetch_assoc($res))
  {
  ?>
  <tr>
    <td><?php echo $data['seeker_name']; ?></td>
    <td><?php echo $data['address']; ?> <?php echo $data['location']; ?> <?php echo $data['district']; ?></td>
    <td><?php echo $data['mobile']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <!-- <td> <a href="accept.php?email=<?php echo $data['email']; ?>&&id=<?php echo $data['rq_id']; ?>" class="genric-btn success radius">Accept</a>
    <a href="reject.php?email=<?php echo $data['email']; ?>&&id=<?php echo $data['rq_id']; ?>" class="genric-btn danger radius">Reject</a></td> -->

  </tr>
 
  <?php
}
?>
 
</table>

            </div>
        </div>
    </section>
    <!-- Contact Form End -->


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I"></script>
    <script src="../assets/js/vendor/gmaps.min.js"></script>
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
