<?php
include 'header.php';
//sanitizing 
$fn = $sanitizer['name'];
$em = $sanitizer['email'];
$amt = $sanitizer['amount'];

//process into db


// if(empty($fn) || empty($ln)){
//     echo "<script>alert('Kindly fill in your first and last name'); window.location='donate'</script>";
// }elseif(empty($amt) ){
//     echo "<script>alert('Kindly fill in amount to donate'); window.location='donate'</script>";
// }else{

// }



?>



<!--====== PAGE TITLE PART START ======-->
         
<div class="page-title-area" style="background-image: url('img/nurse.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center" style="margin-top: 100px;">
                        <h2 class="title">THANK YOU</h2>
                    </div> <!-- page title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 

    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== Start checkout-area ======-->
    <section class="checkout-area pt-100 pb-30">
        <div class="container">
            <div class="user-actions mb-40">
                <p>Your Donation is well received -- <a href="#">Kindly confirm your payment with the Project Account by calling or sending message to +23480...</a></p>
                <p> <a href="#">And, ensure to obtain your receipt.</a></p>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img  src="img/success.jpg" alt="">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

   



    <!--====== ABOUT EXPERIENCE PART START ======-->
         
    <div class="about-experience-area pb-50" style="margin-top: 10px !important;">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
                    <div class="single-experience mt-30">
                        <img src="img/about1.jpg" alt="">
                        <!-- <div class="experience-overlay">
                            <h5 class="title">Medical Students</h5>
                            <p class="text-white">Good education and health care are essential aspects of the welfare of the population. </p>
                        </div> -->
                    </div> <!-- single experience -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="single-experience mt-30">
                        <img src="img/aboutt2.jpg" alt="">
                        <!-- <div class="experience-overlay">
                            <h5 class="title">Teaching Hospital</h5>
                            <p class="text-white">With FUTA Teaching Hospital, we can provide high-quality medical education to our children and good health care for our people.</p>
                            
                        </div> -->
                    </div> <!-- single experience -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                    <div class="single-experience mt-30">
                        <img src="img/aboutt1.jpg" alt="">
                        <div class="experience-overlay">
                        </div>
                    </div> <!-- single experience -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 

    <!--====== ABOUT EXPERIENCE PART ENDS ======-->

    <?php include 'footer.php' ?>