
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edugrowth</title>
    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/animate/animate.css" rel="stylesheet">
    <!-- Mobile Menu Css -->
    <link href="assets/css/slicknav.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="particles/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            background: #fff !important;
        }

        .tab-content {
            border-top: 1px solid #1CB5E0 !important;
            border-left: 2px solid #1CB5E0 !important;
            border-right: 2px solid #1CB5E0 !important;
            border-bottom: 2px solid #1CB5E0 !important;
        }

        .nav-tabs {
            border-bottom: none !important;
            margin-left: 12px;
            width: 100%;
        }

        .nav-tabs li {
            color: white;
            border: none;
            outline: none;
            cursor: pointer;
            width: 16%;
            margin-right: 5px;
        }

        .nav-tabs li a {
            color: #fff;
            background: linear-gradient(to right, #0f7fb5 0%, #0f81b6 100%) !important;
        }

        .nav-tabs>li>a:hover {
            background: #fff !important;
            border-color: #00bfd8 !important;
            color: #555 !important;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            background: #fff !important;
        }

        .tab-content {
            padding: 20px !important;
        }

        .tab-figure {
            width: 80%;
            margin-left: 30px;
        }

        .tab-content-part h2 {
            color: #555 !important;
            text-align: center;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .tab-content-part p {
            font-size: 15px !important;
            line-height: 25px !important;
        }

        section {
            padding-top: 0px !important;
            padding-bottom: 80px !important;
        }

        .home-services-wrapper {
            padding-top: 30px !important;
        }

        #particles-js {
            width: 100%;
            height: 100%;
            /* background-color: #b61924; */
            background-image: url(style.css);
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background: rgb(215, 27, 136) !important;
            background: linear-gradient(90deg, rgba(215, 27, 136, 0.865983893557423) 0%, rgba(91, 84, 199, 0.969625350140056) 48%, rgba(11, 116, 138, 1) 100%) !important;
            height: 450px !important;
        }

        .banner-content {
            text-align: center;
            color: #fff;
            margin-top: 10% !important;
            position: absolute;
            left: 15%;
        }

        .banner-content h1 {
            font-size: 60px !important;
            margin-bottom: 15px !important;
        }

        .banner-content p {
            font-size: 20px !important;
            line-height: 25px !important;
        }

        .common-features {
            text-align: center;
            padding: 0 50px;
            margin-bottom: 3rem;
        }

        .common-features h5 {
            font-size: 20px !important;
            margin-bottom: 10px !important;
            margin-top: 5px !important;
        }

        .common-features p {
            font-size: 15px !important;
            line-height: 15px !important;
        }

        #stats {
            display: none !important;
        }

        .top-wrapper {
            padding: 4px 0px !important;
        }

        .our-gallery-wrapper .owl-carousel .owl-item img {
            height: 125px !important;
            width: 100% !important;
        }

        .our-gallery-wrapper .owl-nav {
            top: 70% !important;
        }

        #first-slider .slide1,
        .slide2,
        .slide3 {
            background-image: url(images/lang/1376-development_lifecycle.jpg) !important;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .footer-top-area {
            background: #253139;
            padding: 25px 0 65px !important;
        }

        .list-inline {
            margin-top: 30px !important;
        }

        .footer-widget-content p {
            line-height: 20px !important;
        }

        .footer-about-info-area .footer-widget-content {
            margin-top: 25px !important;
        }

        .footer-conatct-menu li {
            margin: 6px 0px;
        }

        .contact-form .form-control {
            border: 1px solid #ddd !important;
            box-shadow: none;
            height: 50px;
            margin-bottom: 30px;
            padding-left: 25px;
            background: #fff !important;
        }
        .title-left {
            text-align: left !important;
            margin: 20px 0px 6px !important;
        }

        .title-left h2 {
            color: #01b1d7;
            font-size: 30px !important;
            font-weight: 400;
            margin: 0;
        }

        .title-right {
            text-align: right !important;
            margin: 20px 0px 6px !important;
        }

        .title-right h2 {
            color: #01b1d7;
            font-size: 30px !important;
            font-weight: 400;
            margin: 0;
        }

        .service {
            margin-bottom: 10px !important;
        }
    </style>
    @livewireStyles
</head>

<body>
    @yield('content')

    <div class="footer-wrapper ">
        <div class="footer-top-area ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="footer-about-info-area footer-top-content ">
                            <div class="footer-widget-heading ">
                                <h3>About Us</h3>
                            </div>
                            <div class="footer-widget-content ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem en molestiae quis, maiores explicabo inventore sit quos. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <ul class="footer-social-menu list-inline ">
                                    <li><a href="javascript:void(0) "><i class="fa fa-facebook "></i></a></li>
                                    <li><a href="javascript:void(0) "><i class="fa fa-twitter "></i></a></li>
                                    <li><a href="javascript:void(0) "><i class="fa fa-instagram "></i></a></li>
                                    <li><a href="javascript:void(0) "><i class="fa fa-linkedin-square "></i></a></li>
                                    <li><a href="javascript:void(0) "><i class="fa fa-skype "></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="footer-tags-widget ">
                            <div class="footer-widget-heading ">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="footer-widget-content ">
                                <ul class="footer-widget-menu ">
                                    <li> <a href="javascript:void(0) ">College</a> </li>
                                    <li> <a href="javascript:void(0) ">Study</a></li>
                                    <li> <a href="javascript:void(0) ">Courses</a></li>
                                    <li> <a href="javascript:void(0) ">Blog</a> </li>
                                    <li> <a href="javascript:void(0) ">Educare</a> </li>
                                    <li> <a href="javascript:void(0) ">Youth</a> </li>
                                    <li> <a href="javascript:void(0) ">Students</a> </li>
                                    <li> <a href="javascript:void(0) ">Blog</a> </li>
                                    <li> <a href="javascript:void(0) ">Design</a> </li>
                                    <li> <a href="javascript:void(0) ">Animation</a> </li>
                                    <li> <a href="javascript:void(0) ">Tution</a> </li>
                                    <li> <a href="javascript:void(0) ">Study</a></li>
                                    <li> <a href="javascript:void(0) ">Blog</a> </li>
                                    <li> <a href="javascript:void(0) ">College</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="footer-contact ">
                            <div class="footer-widget-heading ">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="footer-widget-content ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <ul class="footer-conatct-menu ">
                                    <li> <a href="javascript:void(0) "><i class="fa fa-envelope "></i><span>Email :</span> info@sbtechnosoft.com</a> </li>
                                    <li> <a href="javascript:void(0) "><i class="fa fa-phone "></i> <span>Phone : </span> +1 123 456 7890</a> </li>
                                    <li> <a href="javascript:void(0) "><i class="fa fa-map-o "></i><span>Address :</span> 34 street, NY 10018</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6 ">
                        <div class="footer-instagram ">
                            <div class="footer-widget-heading ">
                                <h3>Instagram Photos</h3>
                            </div>
                            <div class="footer-instagram-widget footer-widget-content ">
                                <a href="javascript:void(0) "><img src="images/testimonials1.png " alt=" "></a>
                                <a href="javascript:void(0) "><img src="images/testimonials2.png " alt=" "></a>
                                <a href="javascript:void(0) "><img src="images/testimonials3.png " alt=" "></a>
                                <a href="javascript:void(0) "><img src="images/testimonials3.png " alt=" "></a>
                                <a href="javascript:void(0) "><img src="images/testimonials2.png " alt=" "></a>
                                <a href="# "><img src="images/testimonials1.png " alt=" "></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="copyright-wrapper ">
            <div class="container ">
                <p>&copy; Copyright <span id="year "></span> Idea Tech Solution | All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer Wrapper End -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery/jquery-1.12.0.min.js "></script>
    <script src="assets/bootstrap/js/bootstrap.min.js "></script>
    <script src="assets/jquery/plugin.js "></script>
    <script src="assets/jquery/plugins.js "></script>
    <script src="assets/jquery/slider.js "></script>
    <script src="assets/owl-carousel/js/owl.carousel.js "></script>
    <script src="assets/wow/wow.min.js "></script>
    <script src="assets/jquery/jquery.slicknav.js "></script>
    <script src="js/custom.js "></script>
    <script src="particles/js/particles.min.js"></script>
    <script src="particles/js/app.js"></script>
    <script src="/js/app.js"></script>
    <!-- stats.js -->
    <script src="particles/js/lib/stats.js"></script>

    <script>
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    </script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

<!-- Mirrored from sbtechnosoft.com/edugrowth/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 11:08:12 GMT -->

</html>
