<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medino</title>

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
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medical@example.com</h6>
                        <!-- <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6> -->
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><h2 style="color: red">E-Blood Center</h2></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <!-- <li><a href="register.php">Register</a></li> -->
                        <li><a href="login.php">Login</a></li>
                        <li class="menu-has-children"><a href="">Register</a>
                            <ul>
                                <li><a href="blood_bankReg.php">Blood Bank</a></li>
                                <li><a href="Register.php">Donor</a></li>
                                <li><a href="seeker_reg.php">Seeker</a></li>
                            </ul>
                        </li>

                        <li><form action="search.php" method="post" style="padding-left:100px">
                        <input style="border: 1px solid Red;
                                    border-radius: 4px;" type="text" name="blood_group" placeholder="Blood group" list="blood" required>
    <datalist id="blood">
      <option value="A positive">
      <option value="B positive">
        <option value="AB positive">
      <option value="AB negative">
        <option value="O positive">
      <option value="O nagative">
        <option value="B negative">
      <option value="A negative">  
    </datalist>
                            <input style="border: 1px solid Red;
                                    border-radius: 4px;" type="text" name="location" placeholder="Enter district" list="cityname" required>
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

                            <input style="background-color:#db6767; border-radius: 4px; margin: 4px 2px;
                                    cursor: pointer; color: white; border: 1px solid Red;"  type="submit" value="search">
                        </form></li>
                        			          				           
                    </ul>
                </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3>E- Blood Center</h3>
                    <h1>Leading the way in medical excellence</h1>
                    <!-- <p>Earth greater grass for good. Place for divide evening yielding them that. Creeping beginning over gathered brought.</p> -->
                    <a href="Register.php" class="template-btn mt-3">take appointment Register here</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="assets/images/feature1.png" alt="">
                        <h3>advance technology</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-md-0">
                        <img src="assets/images/feature2.png" alt="">
                        <h3>comfortable place</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature3.png" alt="">
                        <h3>quality equipment</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature4.png" alt="">
                        <h3>friendly staff</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

  
    
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
    <script src="assets/js/main.js"></script>

</body>
</html>
