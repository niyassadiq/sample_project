<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Modeling Studio</title>
    <link rel="icon" type="image/png" href="assets/image/ic_site.png">
    <!------fa-icons----->
    <script src="assets/js/fa-icons.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="assets/sass/interview-project.css">
    <!-- Slick-slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
      <!-- fancybox -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
</head>
<body>
<header class="main-header sticky-top">
        <div class="container">
            <div class="header-row">
                <div class="logo-block">
                    <button onclick="openNav()" type="button"><i class="fa-solid fa-bars menu-btn"></i></button>
                
                    <a href="./" class="center-align">
                       <img src="assets/image/web-logo.png" class="web-logo">
                    </a>        
                </div>

                <div class="nav-bar">
                    <ul>
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li class="active">
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="./">Portfolio</a>
                        </li>
                        <li>
                            <a href="./">Contact Us</a>
                        </li>
                    </ul>

                </div>

            </div>
            <div class="page-name">
                <p class="p-bold" style="color:#fff; margin-top: 20px; text-transform:uppercase">ABOUT US</p>
            </div>
           
        </div>
         <!-- Mobile Menu -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark"></i></a>
                    <ul>
                        <li>
                            <a href="./">home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="./">Portfolio</a>
                        </li>
                        <li>
                            <a href="./">Contact Us</a>
                        </li>
                    </ul>
        </div>
    </header>

    <div class="about-banner section-padding">
     <!-- <span class="shade-ovarly"></span> -->
        <div class="">
            <div class="container side-spacing banner-padding txt-align-center">
                <h1 class="anim-bottom-top">WHAT WE DO</h1>
                <p class="p-style">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh . Loremipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh</p>
                <a href="./" class="site-button">OUR PROJECTS</a>
            </div>
        </div>
    </div>

    <div class="first-section section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>THIS IS A TITLE</h2>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>
    </div>

    <div class="snd-section">
        <div class="row">
            <div class="col-md-6">
                <div class="img-about img1-about "></div>
            </div>
            <div class="col-md-6">
                <div class="ab-content section-padding">
                    <div class="ab-box">
                    <h2>OUR FILMS</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <a href="./" class="site-button">VIEW FILMS</a>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
    <div class="snd-section2">
        <div class="row">
            <div class="col-md-6">
                <div class="ab-content2 section-padding">
                    <div class="ab-box">
                    <h2>OUR FILMS</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                    <a href="./" class="site-button">VIEW FILMS</a>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-about img2-about "></div>
            </div>
        </div>
    </div>
    



<?php include ('footer.php') ?>        