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
    <title>Medino</title>

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
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                <?php 
                include '../config.php';
                $id= $_SESSION['log_id'];
                $sql = "SELECT * FROM register WHERE log_id = '$id'";
                $res = mysqli_query($con,$sql);
                while($data=mysqli_fetch_assoc($res))
                {

                ?>
                    <h1 style="color: red;"><?php echo $data['name'];?></h1>
                    <h2 style="color: blue;">Welcome to E-Blood Centre</h2>
                        <p class="pt-3">It feels good,It makes proud,I am a blood donor</p>
                        <p>DONATE BLOOD SAVE LIFE.</p>

                    <?php } ?>
                    
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
