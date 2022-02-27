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
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #dc3545;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
                <h1>Update your your available blood stock....</h1>
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
               
                <!-- <div class="col-lg-9">
                    <form action="register_action.php" method="post">
                        <div class="left">
                            <input type="text" placeholder="Enter your name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="text" placeholder="Enter your House name" name="housename" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Hosename'" required>
                            <input type="text" placeholder="Enter your location" name="location" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your location'" required>
                            <input type="text" placeholder="Enter your district" name="district" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your district'" required>
                            <input type="text" placeholder="Enter your age" name="age" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Age'" required>
                            <input type="text" placeholder="Enter your blood group" name="blood" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your blood group'" required>
                            <input type="email" placeholder="Enter email address" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Enter your mobile" name="mobile" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your mobile'" required>
                            <input type="text" placeholder="Enter your username" name="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="text" placeholder="Enter your password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" required>

                       
                        
                           <button type="submit" class="template-btn">Register now</button>
                         </div>
                    </form>
                </div> -->

<form action="update_action.php" method="post">
  <div class="container">
    <!-- <h1>Update </h1> -->
    <p style="color: red;">*    Please fill in this form to update your  details.</p>
    <hr>

    <?php 
                include '../config.php';
                // session_start();
                $id= $_SESSION['log_id'];
                $sql = "SELECT * FROM stock";
                $res = mysqli_query($con,$sql);
                while($data=mysqli_fetch_assoc($res))
                {

                ?>

<label for="name"><b>Blood group A+</b></label>
    <input type="text"  name="a+" value="<?php echo $data['A_positive'];?>"  required>

    <label for="address"><b>Blood group A-</b></label>
    <input type="text"  name="a-" value="<?php echo $data['A_negative'];?>" id="address" required>

    <label for="email"><b>Blood group B+ </b></label>
    <input type="text" name="b+" value="<?php echo $data['B_positive'];?>" id="mobile" required>

    <label for="location"><b>Blood group B-</b></label>
    <input type="text"  name="b-" value="<?php echo $data['B_negative'];?>" id="location" required>

    <label for="district"><b>Blood group AB+</b></label>
    <input type="text"  name="ab+" value="<?php echo $data['ABP'];?>" id="district" required>

    

    <label for="email"><b>Blood group AB-</b></label>
    <input type="text"  name="ab" value="<?php echo $data['ABN'];?>" id="email" required>

    
    <label for="email"><b>Blood group O+</b></label>
    <input type="text"  name="o+" value="<?php echo $data['OP'];?>" id="email" required>

    <label for="email"><b>Blood group O-</b></label>
    <input type="text"  name="o-" value="<?php echo $data['O_negative'];?>" id="email" required>


    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
    <button type="Register" class="registerbtn">Update</button>
  </div>

  <div class="container signin">
    <!-- <p>Already have an account? <a href="#">Sign in</a>.</p> -->
  </div>

  <?php } ?>
</form>

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