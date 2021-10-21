<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/imagelightbox.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/custom_css.css">
    <!-- <style>
        label.error {
            color: #ff0000;
        }

        .form-control::placeholder {
            /* color: #6e6e6e */
            color: #2e7596 !important;
        }

        .name::placeholder {
            /* color: #6e6e6e */
            color: #2e7596 !important;
        }

        .loader {
            color: #000;
            z-index: 999999;
            font-size: 90px;
            text-indent: -9999em;
            overflow: hidden;
            width: 1em;
            height: 1em;
            border-radius: 50%;
            margin: 72px auto;
            position: fixed;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
            animation: load6 1.7s infinite ease, round 1.7s infinite ease;
            top: 100px;
            right: 0;
            bottom: 0;
            left: 0;
        }

        @-webkit-keyframes load6 {
            0% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }

            5%,
            95% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }

            10%,
            59% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
            }

            20% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
            }

            38% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
            }

            100% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
        }

        @keyframes load6 {
            0% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }

            5%,
            95% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }

            10%,
            59% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
            }

            20% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
            }

            38% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
            }

            100% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
        }

        @-webkit-keyframes round {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes round {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style> -->
    <title>Contact Us - Pranil Education - Study Abroad in USA, Canada, Australia, New Zealand, UK, Europe</title>
</head>

<body>
    <?php include("top.php") ?>
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.php">Home<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="contact-box pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-map-marker"></i>
                        <div class="content-title">
                            <h3>Address</h3>
                            <p>Pranil Education Services, Ahmedabad, Gujarat. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-envelope"></i>
                        <div class="content-title">
                            <h3>Email</h3>
                            <a href="mailto:info@pranileducation.com"><span class="__cf_email__">info@pranileducation.com</span></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box">
                        <i class="fa fa-phone"></i>
                        <div class="content-title">
                            <h3>Phone</h3>
                            <a href="tel:+917383997679">+91 73839-97679</a>
                            <!-- <a href="tel:+123(456)124">+123(456)124</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Drop us a message for any query</h2>
                <p>If you have an idea, we would love to hear about it.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php require_once('./contact_us_form.html'); ?>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58737.63225105477!2d72.53948796399116!3d23.05672121925439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e837c399233d1%3A0x61599346c24a5c7e!2sPRANIL%20EDUCATION%20SERVICES!5e0!3m2!1sen!2sin!4v1622697303880!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include("footer.php") ?>





    <div class="go-top">
        <i class="fa fa-angle-double-up"></i>
        <i class="fa fa-angle-double-up"></i>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/meanmenu.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/imagelightbox.min.js"></script>

    <script src="assets/js/mixitup.min.js"></script>

    <script src="assets/js/nice-select.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/ajaxchimp.min.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script src="assets/js/custom2.js"></script>

</body>


</html>