<?php 
$page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Title ======-->
    <title>CCPC FUTATH</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/icon.jpeg" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome Pro css ======-->
    <link rel="stylesheet" href="assets/css/all.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="assets/js/apexcharts"></script>
    <style>
        .active {
            color: #0ca879 !important;
        }
        .single-banner .banner-overlay {
            display: flex;
            align-items: center;
            height: 690px;
            background: none !important;
            /* background: linear-gradient(90deg, #0c5adb 0%, rgba(12, 90, 219, 0.6) 50%, rgba(255, 255, 255, 0) 100%); */
        }

        #chart {
        max-width: 100%;
        margin: 35px auto;
        }

        

        .single-banner .banner-overlay .banner-content p {
            font-weight: 700;
            font-size: 16px;
            color: #fff;
            padding-right: 10px;
            padding-top: 1px !important;
            padding-bottom: 1px !important;
            background: #2b3735;
            border-radius: 5px;
            opacity: 0.8;
            padding-left: 10px;
        }

        .single-banner .banner-overlay .banner-content span {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: lowercase;
            padding-bottom: 10px;
        }
        
        .what-we-do-item:hover {
            background-color: #b1c7b8 !important;
        }

        .who-we-are-area .what-we-do-item a {
            background: #0ca879 !important;
            color: #fff;
        }
        .who-we-are-area .what-we-do-item a:hover {
            background: #fff !important;
            color: #0ca879;
        }

        .get-in-touch-area .form-area .input-box button {
            border-radius: 0;
            margin-top: 20px;
            background: #0ca879;
            border-color: #0ca879;
            color: #fff;
        }

        .get-in-touch-area .get-map::before {
            position: absolute;
            content: '';
            height: 0;
            width: 0;
            border-bottom: 400px solid #0ca879;
            border-left: 400px solid transparent;
            right: -20px;
            bottom: -635px;
        }

        .about-intro-area .intro-thumb a {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-75%, -50%);
            height: 120px;
            width: 120px;
            text-align: center;
            border-radius: 50%;
            line-height: 120px;
            background: #0ca879;
            color: #c5d5e7;
            font-size: 20px;
        }
        .about-intro-area .intri-content a {
            border-radius: 0;
            padding: 0 45px;
            margin-top: 45px;
            background: #0ca879;
            color: #fff;
            border-color: #0ca879;
        }

        .about-intro-area .intri-content span {
            color: #0ca879;
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
        }

       

        .about-intro-area .intro-thumb::before {

        position: absolute;
        content: '';
        bottom: -20px;
        left: -20px;
        width: 0;
        height: 0;
        border-bottom: 400px solid #0ca879;
        border-right: 400px solid transparent;
        z-index: -1;

        }
        .page-title-area .page-title-item {
            padding-top: 200px;
        }
        .page-title-area {
            height: 420px;
            background: #a9c7ec;
            position: relative;
        }
    
        .about-experience-area .experience-item span {
            color: #0ca879;
            font-weight: 700;
            position: relative;
        }

        .about-experience-area .experience-item span::before {
            position: absolute;
            content: '';
            right: -100px;
            top: 25px;
            height: 2px;
            width: 70px;
            background: #0ca879;
        }
        .about-intro-area .intri-content span::before {
            position: absolute;
            content: '';
            right: -100px;
            top: 10px;
            height: 2px;
            width: 70px;
            background: #0ca879;
        }

        .about-experience-area {
            padding-top: 30px !important;
        }
        .about-experience-area .single-experience .experience-overlay:hover {
            background-color: transparent !important;
        }
        .page-title-area::before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(../img/nurse);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .banner-active .slick-arrow.next {
            right: 20px;
            margin-top: 100px;
        }

        .banner-active .slick-arrow.prev {
            left: 20px;
            margin-top: 100px;
        }
        .fnt {
            font-size: 18px !important;
            color: #111 !important;
        }

        .fntx {
            font-size: 18px !important;
            color: #fff !important;
        }

        @media only screen and (max-width: 600px) {
            .single-banner .banner-overlay .banner-content p {
                font-weight: 400;
                font-size: 14px;
                color: #fff;
                padding-right: 10px;
                padding-top: 0 !important;
                padding-bottom: 0px !important;
                border-radius: 5px;
                opacity: 0.8;
            }

            .mb {
                color: crimson !important;
            }

            .banner-content {
                margin-top: 350px !important;
                margin-left: 20px !important;
            }

            .sid{
                width: 100%;
            }
        }

        .padding-0{
            padding-right:0;
            padding-left:0;
        }

        .ipd {
            padding-left: 15px;
            color: #fff;
        }

        .plans-item::before {
            /* background: transparent !important; */
            background: #fff;
            opacity: 0.3;
        }


        .services-plans-area .plans-item::before {

        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #dcebee;
        z-index: -1;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;

        }

    </style>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="538f150c-2b0e-49cf-b1c5-00c5f0fe3920";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area header-area-2 header-area-4" >
        <div class="header-top pl-30 pr-30 white-bg bkg">
            <div class="row align-items-center">
                <div class="col-md-12 col-sm-12">
                    <div class="header-left-side text-center text-sm-left">
                        <ul>
                            <li><a href="#" style="font-size: 22px;"> We need your financial support to make the Teaching Hospital a reality.</a></li>
                            <li><a class="main-btnx" href="donate">Donate Now<i class="fal fa-long-arrow-right"></i></a></li> 
                        </ul>
                    </div>
                </div>
                
                <!-- <div class="col-md-6 col-sm-5">
                    <div class="header-right-social text-center text-sm-right">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="header-nav">
            <div class="navigation" style="background-color: #e8e9ec !important;">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="index"><img src="img/pnglogo.png" width="70" height="70" alt="">CCPC FUTATH</a> <!-- logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button> <!-- navbar toggler -->

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                                <a class="nav-link <?php if($page =='index.php'){echo 'active';}else{}?>" href="index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page =='update.php'){echo 'active';}else{}?>" href="update">Project Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page =='ccpc.php' || $page =='media.php' || $page =='project.php'){echo 'active';}else{}?>" href="#">Committees</a>
                                <ul class="sub-menu">
                                    <li><a href="ccpc" class="mb">Central Committee</a></li>
                                    <li><a href="project" class="mb">Project Committee</a></li>
                                    <li><a href="media" class="mb">Media Committee</a></li>
                                </ul> <!-- sub menu -->
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link <?php if($page =='donate.php'){echo 'active';}else{}?>" href="donate">Donate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page =='contact.php'){echo 'active';}else{}?>" href="contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page =='faq.php'){echo 'active';}else{}?>" href="faq">FAQ</a>
                            </li> 
                        </ul> 
                    </div> <!-- navbar collapse -->
                    <!-- <div class="navbar-btn mr-100">
                        <a class="main-btn" href="donate">Make Donation <i class="fal fa-long-arrow-right"></i></a>
                    </div> -->
                </nav>
            </div> <!-- navigation -->
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->