<footer class="footer-main">
        <div class="footer-body section-padding side-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12 sm-0fit">

                        <ul class="fit-box">
                            <li><img src="assets/image/footer-info.png" class="footer-info-img"></li>
                            <li class="footer-nav-link">
                                <h3>Lorem ipsum</h3>
                            </li>
                            <li class="footer-nav-link">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Repellat cum vitae fugitest, eaque ea quod pariatur numquam</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 m-50 col-12 border-sides sm-none display-flex justify-content-center align-item-center">
                        <div class="about-logo-block fit-box">
                            <img src="assets/image/footer-web-logo.png"class="footer-web-logo">   
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 sm-0fit">
                            <ul class="social-meadia-links">
                                <li>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                            </ul>
                        <ul  class="fit-box">
                            <li> <h3>Contact</h3></li>
                            <li class="footer-nav-link">
                                <p>Address Address AddressAddressAddress AddressAddressAddress</p>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="footer-bottom side-spacing">
            <p>Copyright © <?php echo date("Y"); ?> Team71. All Rights Reserved.    |     Designed by  <a href="./">Niyas</a></p>
        </div>
</footer>

    <div class="scrollTop-widget">
        <div class="scrollTop"><i class="fa-solid fa-arrow-up"></i></div>
    </div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    
<script type="text/javascript">
    $(".single-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
            dots: true,
            arrows: false,
            speed: 1000,
    }); 
    
    $(".slide-col-2").slick({
        slidesToShow: 2,
        infinite:true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
            // dots: false, Boolean
            arrows: false,

            responsive: [
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
    });
</script> 

<script>
        // Start marquee
        $('.marquee-container').marquee({
            direction: 'left',
            duration: 20000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true
        });
    </script>


</body>
</html>    