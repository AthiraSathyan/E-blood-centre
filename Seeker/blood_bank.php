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
    <title>Doctors</title>

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
                    <h1>Our donors</h1>
                    <a href="index.html">Home</a> <span>|</span> <a href="doctors.html">Donors</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Specialist Area Starts -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Available Blood Banks</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
           
            <div class="row">
            <?php 
                    include '../config.php';

                    $location = $_POST['location'];
                    $sq="SELECT *FROM blood_bank  ,login  WHERE blood_bank.log_id = login.log_id AND login.status = 'approved' AND blood_bank.district = '$location' ";
                    $res= mysqli_query($con,$sq);
                    while($data = mysqli_fetch_assoc($res))
                    {
                    ?>
                <div class="col-lg-3 col-sm-6">  
                    
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <!-- <img src="../assets/images/doctor1.jpg" alt="" class="img-fluid"> -->
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3><?php echo $data['center_name']; ?></h3>
                                <h6><?php echo $data['district']; ?> <?php echo $data['location']; ?></h6>
                                <h6><?php echo $data['email_id']; ?></h6>
                                <h6><?php echo $data['contact']; ?></h6>

                            </div>
                            <div class="doctor-text text-center">
                            <a href="View_bloodbank.php?id=<?php echo $data['log_id']; ?>" class="genric-btn info">Info</a>
                                <!-- <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p> -->
                                <!-- <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php } ?>
            </div>
           
        </div>
    </section>
    <!-- Specialist Area Starts -->

    <!-- Hotline Area Starts -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+01) – 256 567 550</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotline Area End -->
    
    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">top products</h3>
                            <ul>
                                <li class="mb-2"><a href="#">managed website</a></li>
                                <li class="mb-2"><a href="#">managed reputation</a></li>
                                <li class="mb-2"><a href="#">power tools</a></li>
                                <li><a href="#">marketing service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="../assets/images/feed1.jpg" alt="feed">
                                <img src="../assets/images/feed2.jpg" alt="feed">
                                <img src="../assets/images/feed3.jpg" alt="feed">
                                <img src="../assets/images/feed4.jpg" alt="feed">
                                <img src="../assets/images/feed5.jpg" alt="feed">
                                <img src="../assets/images/feed6.jpg" alt="feed">
                                <img src="../assets/images/feed7.jpg" alt="feed">
                                <img src="../assets/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
