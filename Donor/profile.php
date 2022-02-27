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
    <!-- <section class="banner-area">
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
                    <h2 style="color: blue;">Welcome to our Blood Bank</h2>
                        <p class="pt-3">Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn't seed stars were.</p>
                        <p>Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn't seed stars were the boring.</p>

                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </section> -->
    <!-- Banner Area End -->



                    
    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
        <div class="container" >
            <div class="row" style="padding-left: 250px">
                <div >
                    <div style="width: 720px; padding: 50px; border: 2px solid gray; margin: 2; background-color: #b0cbe9; border-radius:15px; ">
                        <img src="assets/images/feature1.png" alt="">

                        <?php 
                include '../config.php';
                // session_start();
                $id= $_SESSION['log_id'];
                $sql = "SELECT * FROM register WHERE log_id = '$id'";
                $res = mysqli_query($con,$sql);
                while($data=mysqli_fetch_assoc($res))
                {

                ?>
                        <h2 style="color: red;"><?php echo $data['name'];?></h2><br>
                        <h3>ADDRESS: <?php echo $data['house_name'];?></h3>
                        <h3>CONTACT:<?php echo $data['mobile'];?></h3>
                        <h3>LOCATION:<?php echo $data['location'];?></h3>
                        <h3>DISTRICT:<?php echo $data['district'];?></h3>
                        <h3>EMAIL:   <?php echo $data['email'];?></h3>
                        <h3>AGE: <?php echo $data['age'];?></h3>
                        <h3>GENDER: <?php echo $data['gender'];?></h3>
                        <h3>BLOOD GROUP: <?php echo $data['blood_group'];?></h3>
                        <h3>AADHAR: <?php echo $data['aadhar'];?></h3>
                        <h3>WEIGHT: <?php echo $data['weight'];?></h3>
                        <h3>DISEASE: <?php echo $data['disease'];?></h3>
                        <h3>Last Donated: <?php echo $data['last_donation'];?></h3>


                        <div class="button-group-area">
                        <a href="update_profile.php?id=<?php echo $data['log_id']; ?> " class="genric-btn success">UPDATE</a>
                        </div>

                    </div>

                    <?php } ?>
                </div>



                
                <!-- <div class="col-lg-3 col-md-6">
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
                </div> -->
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
