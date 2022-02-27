<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Register</title>

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
                <h1>Register here....</h1>
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
                            <input type="email"  placeholder="Enter email address" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Enter your mobile" name="mobile" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your mobile'" required>
                            <input type="text" placeholder="Enter your username" name="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="text" placeholder="Enter your password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" required>

                       
                        
                           <button type="submit" class="template-btn">Register now</button>
                         </div>
                    </form>
                </div> -->

<form action="register_action.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="housename" id="address" required>

    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="location" id="location" required>

    <label for="district"><b>District</b></label>
    <!-- <input type="text" placeholder="Enter district" name="district" id="district" required> -->

    <input type="text" name="district" placeholder="Enter district" list="cityname">
    <datalist id="cityname">
      <option value="Ernakulam">
      <option value="Idukki">
        <option value="Trissur">
      <option value="Kottayam">
        <option value="Alappuzha">
      <option value="Thiruvanthapuram">
        <option value="Kozhikode">
      <option value="Kazargode">
        <option value="Pathanamthitta">
      <option value="Vayanad">
        <option value="Malappuram">
      <option value="Kollam">
        <option value="Palakkad">
      <option value="Kannur">
    </datalist>

    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age" required>
    <br>
    <br>
    <div>
    <label for="age"><b>Gender</b></label><br>

             <input type="radio" id="male" name="gender" value="male">
             <label for="male">Male</label>
             <input type="radio" id="female" name="gender" value="female">
             <label for="female">Female</label>
             <input type="radio" id="other" name="gender" value="other">
             <label for="other">Other</label>
          </div>
          <br>

    <label for="age"><b>Blood Group</b></label>
    <input type="text" placeholder="Enter Blood Group" name="blood" id="blood" required>

    <label for="age"><b>Aadhar</b></label>
    <input type="text" placeholder="Enter  Aadhar Number" name="adhar"  required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="weight"><b>Weight</b></label>
    <input type="text" placeholder="Enter Weight" name="weight" id="weight" required>

    <label for="email"><b>If any Diseases </b></label>
    <input type="text" placeholder="If any diseases" name="diseas" id="diseas" required>

    <label for="email"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" id="mobile" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="username" required>

    <label for="pswd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" id="password" required>

    <label for="pswd"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password2" id="password" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="Register" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

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
