<?php include("config.php") ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="ThemeStarz">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <style>
            .navbar {
                font-size: .875rem;
                font-weight: 500;
                padding-bottom: 0rem;
                padding-top: 0.2rem;
                transition: .3s ease;
            }
            .h3{
                color:#4e4e4e;
                text-align: left;
                font-size: 22px;
                padding-bottom: 12px;
            }
            .card {
                backface-visibility: hidden;
                border: none;
                box-shadow: none;
                margin-bottom: 1.875rem;
                overflow: hidden;
                background-color: #f8f8f8;
                border: 1px solid #707070;
                border-radius: 10px;
            }

            .card-body, .card-footer, .card-header {
                padding: 1rem;
            }
            .card-text{
                font-size: 12px;
                top: -10px;
                position: relative;
                text-align: left;
                left: 18px;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 15px;
            }


            @media only screen and (max-device-width: 767px) {
            }

            @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {

                .subscribe{
                    width: 28% !important;
                    padding: 9px;
                    margin-top: 16px;
                }
                .paddingtop{
                    padding-top:50px;
                }
            }

            @media only screen and (min-device-width: 481px) and (max-device-width: 768px) {

                .container {
                    width: 70%;
                    padding-right: 15px;
                    padding-left: 15px;
                    margin-right: auto;
                    margin-left: auto;
                }

                .ts-block {
                    padding-bottom: 5rem;
                    padding-top: 9rem !important;
                    position: relative;
                }
                 .paddingtop{
                    padding-top:50px;
                }
            }
            @media only screen and (min-device-width: 769px) and (max-device-width: 1024px) {
                .ts-block {
                    padding-bottom: 6.25rem;
                    padding-top: 10.25rem !important;
                }
                .container {
                    max-width: 859px !important;
                }

            }
            @media only screen and (min-device-width: 1025px) and (max-device-width: 1200px) {
                .ts-block {
                    padding-bottom: 6.25rem;
                    padding-top: 8.25rem !important;
                }
            }
        </style>
        <title>Pajawiri Security App</title>

    </head>
    <body data-spy="scroll" data-target=".navbar" class="has-loading-screen" data-bg-parallax="scroll" data-bg-parallax-speed="3">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="" class="" >

            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" 
                 data-bg-color="#282d6f" style="background: rgb(40, 45, 111);">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/Pajawiri_Logo.png" style="width:120px;">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="index.php#page-top">Home 
                                <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="index.php#organize">Features</a>
                            <a class="nav-item nav-link ts-scroll" href="index.php#form-contact">Contact</a>
                            <a class="nav-item nav-link ts-scroll" 
                                    href="https://ravesandbox.flutterwave.com/donate/odrr6nqxjjnk" target="_blank">Donate</a>
                            <a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto" href="subscribe.php">Subscribe</a>


                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->

            <!--end container-->



        </header>

        <main id="ts-content">
            <section class="ts-block text-center mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-xl-4">

                            <p class="h3">Subscription</p>

                            <div class="card" >
                                <a href="javascript:void(0)" class="" data-index="free" style="text-decoration:none;color:#383838;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="text-align:right;">500 NGN</h5>
                                        <h6 class="card-subtitle mb-2 text-muted" style="text-align: left;">
                                            <img src="assets/img/check-mark.png" style="width: 27px;" class="tickmark" /> 
                                            &nbsp;&nbsp;&nbsp;1 Month Usage</h6>
                                        <p class="card-text">One-off fee, No auto payment</p>

                                    </div>
                                </a>
                            </div>




                            <!--div class="">
                                <a href="javascript:void(0)" class="activestatus" data-index="PayPal" style="text-decoration:none;color:#383838;">
                                    <p class="h3" style="    padding: 0;
                                       margin: 0;">Choose Payment</p>
                                    <p style="text-align: left;
                                       padding: 0;
                                       margin: 0;
                                       margin-bottom: 9px;">Paying from Abroad, Use PayPal</p>
                                    <img src="assets/img/p2.png" class="img-fluid paypalclass" />
                                </a>
                            </div-->

                            <div class="mt-4">
                                <a href="javascript:void(0)" class="activestatus" data-index="FlutterWave" style="text-decoration:none;color:#383838;">
                                    <p style="text-align: left;
                                       padding: 0;
                                       margin: 0;
                                       margin-bottom: 9px;">Paying from Africa, Use FlutterWave</p>
                                    <img src="assets/img/p1.png" class="img-fluid flutterclass" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8 col-xl-8 paddingtop">
                            <p class="h3">User Details</p>
                            <h4 style="text-align: left;"> Payment Type: <span id="paymenttypetext"></span></h4>
                            <form id="form-contact1" method="post"
                                  class="clearfix ts-form  ts-inputs__transparent" 
                                  action="https://checkout.flutterwave.com/v3/hosted/pay">
                                <input type="hidden" name="payment_type" id="payment_type" value="" >
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name" style="float:left;">Full Name *</label>
                                            <input type="text" class="form-control" id="form-contact-name"
                                                   name="customer[name]" placeholder="" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>

                                    <!--end col-md-6 col-sm-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-email" style="float:left;">Email *</label>
                                            <input type="email" class="form-control" id="form-contact-email" 
                                                   name="customer[email]" placeholder="" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                </div>
                                <!--end row -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name" style="float:left;">Mobile *</label>
                                            <input type="text" class="form-control" id="form-contact-name"
                                                   name="customer[phone_number]" placeholder="" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name" style="float:left;">City of Residence *</label>
                                            <select class="form-control" id="form-contact-name" 
                                                   name="city" placeholder="" required>
                                                <option value="">Select</option>
                                                <option value="	Delta">	Delta</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Kwara">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                            </select>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                </div>
                                <!--end row -->
                                <div class="form-group clearfix">
                                    <input type="hidden" name="public_key" value="FLWPUBK_TEST-81f5dfce4d4b0008d184fdf91b6f5ac7-X" />

                                    <input type="hidden" name="tx_ref" value="Pajawiri<?= rand(00000, 99999) ?><?= time() ?>" />
                                    <input type="hidden" name="amount" value="100" />
                                    <input type="hidden" name="currency" value="NGN" />
                                    <input type="hidden" name="meta[token]" value="54" />
                                    <input type="hidden" name="redirect_url" value="http://localhost/wiri-frontend/status.php" />

                                    <button type="submit" class="btn btn-primary checkpaymenttype" 
                                            id="form-contact-submit" style="float:left;" >Make Payment</button>
                                </div>
                                <!--end form-group -->
                                <div class="form-contact-status"></div>
                            </form>
                            
                            
                            <div class="container">
   
        
   
</div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <!--end page-->

    <script>
        if (document.getElementsByClassName("ts-full-screen").length) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="assets/js/isInViewport.jquery.js"></script>
    <script src="assets/js/jquery.particleground.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
    <script src="assets/js/jquery.wavify.js"></script>
    <script src="assets/js/custom.js"></script>

    <!--Google map-->



</body>
</html>
