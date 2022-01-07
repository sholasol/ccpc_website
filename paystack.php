<?php include 'header.php' ?>
    <!--====== PAGE TITLE PART START ======-->
         
    <div class="page-title-area" style="background-image: url('img/nurse.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center" style="margin-top: 100px;">
                        <h2 class="title">DONATION</h2>
                    </div> <!-- page title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 

    <!--====== PAGE TITLE PART ENDS ======-->

     <!--====== CONTACT US PART START ======-->

     <div class="contact-us-area bg_cover" style="background-image: url(img/paralax.jpg)">
        <div class="contact-overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <span style="color: #fff !important;">Payment Gateway</span>
                            <h2 class="title">We value your contribution</h2>
                        </div> <!-- sevtion title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-details d-flex">
                            <div class="contact-thumb wow slideInLeft" data-wow-duration=".5s" data-wow-delay="0s">
                                <img src="img/about1.jpg" alt="">
                            </div>
                            <div class="contact-form-area">
                                <form action="process.php" method="POST">
                                    <div class="input-title">
                                        <h3 class="title">Kindly help to make FUTATH a reality</h3>
                                    </div> <!-- input title -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="text" name="name" placeholder="Full Name Here">
                                                <i class="fal fa-user"></i>
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box mt-30">
                                                <input type="email" name="email" placeholder="Email Here">
                                                <i class="fal fa-envelope-open"></i>
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mt-30">
                                                <input type="number" name="amount" placeholder="Donation Amount">
                                                <i class="fal fa-credit-card"></i>
                                            </div> <!-- input box -->
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mt-30">
                                                <button class="main-btn wow slideInUp" data-wow-duration="1.5s" data-wow-delay="0s" type="submit" name="submit">Continue <i class="fal fa-long-arrow-right"></i></button>
                                            </div> <!-- input box -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- contact details -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </div>

    <!--====== CONTACT US PART ENDS ======-->


    <?php include 'footer.php' ?>