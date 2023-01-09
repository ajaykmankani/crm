<!doctype html>
<html lang="en">

<!-- Mirrored from labartisan.net/demo/halci/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 06:25:30 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!---google fonts hear-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="frontend/assets/css/all.min.css">
    <!--animate css hear-->
    <link rel="stylesheet" href="frontend/assets/css/animate.css">
    <!-- light_case css -->
    <link rel="stylesheet" href="frontend/assets/css/lightcase.css">
    <!--swiper css-->
    <link rel="stylesheet" href="frontend/assets/css/swiper.min.css">
    <!-- shortcut image png is loaded -->
    <link rel="shortcut icon" href="frontend/assets/images/logo/seo.png">
    <!-- style CSS is loaded -->
    <link rel="stylesheet" href="frontend/assets/css/style.css">

    <title>Best Digital Marketing Agency in Delhi NCR - mindyourads.com</title>
</head>

<body data-spy="scroll" class="p-0 style-4 overflow-auto">
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->
    @include('frontend.layout.nav')

    @yield('main')

    <!-- footer area start -->
    <footer>
        <div class="footer-position style-4">
            <div class="animate-bubble style-1 style-2">
                <div class="bubble a-one"></div>
                <div class="bubble a-three"></div>
                <div class="bubble a-four"></div>
                <div class="bubble a-six"></div>
                <div class="bubble a-eight">
                    <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
                </div>
                <div class="bubble a-nine">
                    <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
                </div>
                <div class="bubble a-ten">
                    <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
                </div>
                <div class="bubble a-eleven">
                    <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="footer-media">
                            <a href="#">
                                <img src="frontend/assets/images/logo/logo_white.webp" alt="footer-image"
                                    style="max-width: 57%">
                            </a>
                            <p>
                                At Mind Your Ads we work on the leading edge of marketing, constantly creating new ways
                                for organizations in many industries to communicate with their customers, prospects, and
                                channel partners.
                            </p>
                            <ul class="footer-social">
                                <li>
                                    <a href="https://www.facebook.com/MindYourAds"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/MindYourAds"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/MindYourAds"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/mindyourads"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6  col-12">
                        <div class="footer-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Dwarka, New Delhi, India</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span>+91 9650650212</span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span>info@mindyourads.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6  col-12">
                        <div class="link-us">
                            <h4>Services</h4>
                            <ul>
                                <li>
                                    <a href="#">Lead Generation Agency</a>
                                </li>
                                <li>
                                    <a href="#">Social Media Management</a>
                                </li>
                                <li>
                                    <a href="#">Pay Per Click</a>
                                </li>
                                <li>
                                    <a href="#">Website Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6  col-12">
                        <div class="footer-news">
                            <h4>Contact</h4>
                            <form action="contact" method="post" class="form-control"
                                style="background: transparent; border:none">

                                @csrf
                                <input type="text" name="name" placeholder="Full Name" required
                                    class="form-control ">

                                <input type="tel" name="phone" placeholder="Mobile Number" required
                                    class="form-control mt-2">

                                <input type="email" name="email" placeholder="Email Address" required
                                    class="form-control mt-2">

                                <select data-msg-required="Please select a service." class="form-control mt-2 "
                                    name="service" required>
                                    <option value="" selected>Select Service</option>
                                    <option value="Website Design and Development">Website Design and Development
                                    </option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)
                                    </option>
                                    <option value="Social Media Optimization (SMO)">Social Media Optimization (SMO)
                                    </option>
                                    <option value="Social Media Marketing (SMM)">Social Media Marketing (SMM)</option>
                                    <option value="all of the above">All of the above</option>
                                </select>
                                <input class="mt-2 btn btn-primary w-100" type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-bottom style-two">
        <div class="container">
            <div class="copy-right text-center">
                <p>&copy; 2023 <a href="https://www.mindyourads.com">MindYourAds</a> All Rights Reserved By <a
                        href="https://www.mindyourads.com" target="_blank">MindYourAds.com</a></p>
            </div>
        </div>
    </div>
    <!-- footer area ends -->

    <!--scroll up-->
    <div class="scroll-top style-5">
        <div class="scrollToTop active">
            <span>
                <i class="fas fa-arrow-up"></i>
            </span>
        </div>
    </div>
    <!--scroll up-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Bootstrap JS, then font-awosame, then lightcase Js, then image loaded & isotope Js, than swiper js -->
    <script src="frontend/assets/js/jquery.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/fontawesome.min.js"></script>
    <script src="frontend/assets/js/jquery.waypoints.min.js"></script>
    <script src="frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="frontend/assets/js/count-down.js"></script>
    <script src="frontend/assets/js/isotope-min.js"></script>
    <script src="frontend/assets/js/lightcase.js"></script>
    <script src="frontend/assets/js/swiper.min.js"></script>
    <script src="frontend/assets/js/theia-sticky-sidebar.js"></script>
    <script src="frontend/assets/js/wow.min.js"></script>
    <script src="frontend/assets/js/active.js"></script>
    @include('frontend.layout.popup')
</body>

<!-- Mirrored from labartisan.net/demo/halci/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 06:25:37 GMT -->

</html>
