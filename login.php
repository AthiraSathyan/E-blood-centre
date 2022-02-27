<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>

    /*set border to the form*/
      
    form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/
      
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
      
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/
      
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
      
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/
      
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
      
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/
      
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
      
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/
      
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
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
                <h1>Login here....</h1>
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
               
                <div class="col-lg-9">
                    <!-- <form action="login_action.php" method="post">
                        <div class="left">
                            
                            <input type="text" placeholder="Enter your username" name="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="text" placeholder="Enter your password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" required>

                       
                        
                           <button type="submit" class="template-btn">Login</button>
                           <a href="seeker_reg.php" >Register</a>
                         </div>
                    </form> -->

                    <form action="login_action.php" method="post">
     
  
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
  
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
  
            <button type="submit">Login</button>
            <a href="seeker_reg.php" > Register here </a>
        </div>
  
       
    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->


    <!-- Footer Area Starts -->
<?php include 'footer.php'; ?>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I"></script>
    <script src="assets/js/vendor/gmaps.min.js"></script>
    <script src="assets/js/main.js"></script>



</body>
</html>
