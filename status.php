<?php
include("config.php");
?>
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
                background-color: #282d6f;

                border-radius: 10px;
            }

            .card-body, .card-footer, .card-header {
                padding: 1rem;
            }
            .card-text {
                font-size: 15px;
                /* top: -16px; */
                position: relative;
                text-align: center;
                left: 43px;
                padding: 0 78px;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 15px;
            }

            .card-body, .card-footer, .card-header {
                padding: 4rem;
            }


            @media only screen and (max-device-width: 767px) {
            }

            @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
                
                  .subscribe{
                    width: 28% !important;
                    padding: 9px;
                    margin-top: 16px;
                }

                .ts-block {
                    padding-bottom: 5rem;
                    padding-top: 11rem;
                    position: relative;
                }

                .card-text {
                    font-size: 15px;
                    top: 0;
                    position: relative;
                    text-align: center;
                    left: 0;
                    padding: 0;
                }
                .offset-2 {
                    margin-left: 0;
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

                .ts-block {
                    padding-bottom: 5rem;
                    padding-top: 11rem;
                    position: relative;
                }

                .card-text {
                    font-size: 15px;
                    top: 0;
                    position: relative;
                    text-align: center;
                    left: 0;
                    padding: 0;
                }
                .offset-2 {
                    margin-left: 0;
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

                .card-text {
                    font-size: 15px;
                    /* top: -16px; */
                    position: relative;
                    text-align: l;
                    left: 0;
                    /* padding: 0 78px; */
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

        <?php
        ?>
        <main id="ts-content">
            <section class="ts-block text-center mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-xl-8 offset-2">
                            <?php
                            if ($_GET && $_GET["status"] == "successful") {


                                $tx_ref = $_GET["tx_ref"];
                                $transaction_id = $_GET["transaction_id"];
                                $created_at = date("Y-m-d H:i:s");
                                $sql = "INSERT INTO userpayments (ref_id, transaction_id, created_at)
                                        VALUES ('$tx_ref', '$transaction_id', '$created_at')";
                                $conn->query($sql);
                                $referral_id = "";
                                $sql = "SELECT * FROM referralcodes ORDER BY updated_at ASC LIMIT 0,1";
                                $result = $conn->query($sql);



                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $referral_id = $row["code"];
                                    }
                                    $date = date("Y-m-d H:i:s");
                                    $sql = "UPDATE referralcodes SET updated_at='$date' WHERE code='$referral_id'";
                                    $conn->query($sql);
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                                ?>
                                <img src="assets/img/check-mark.png"  class="tickmark" style="width:60px;" /> 
                                <p class="card-text">A receipt has been sent to your email, and your referee is waiting to accept
                                    Your registration request.</p>
                                <div class="card" >
                                    <a href="javascript:void(0)" class="activestatus" data-index="free"
                                       style="text-decoration:none;color:#383838;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;
                                                        color: #fff !important;
                                                        padding-top: 11px;">
                                                        Your Referral Code is          </h6>
                                                </div>
                                                <div class="col-md-4 p-0">
                                                    <input type="text" readonly class="form-control" 
                                                           value="<?= $referral_id ?>" id="referralcode" /> 
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn" value="Copy" style="float: left;
                                                            border-radius: 0;
                                                            padding: 3px 7px;
                                                            background: green;
                                                            color: #fff;
                                                            font-size: 12px;
                                                            margin-top: 4px;" onclick="myFunction()">Copy </button>
                                                </div>
                                            </div>

                                        </div>

                                </div>

                                <?php
                            } else {
                                ?>


                                <?php
                            }
                            ?>



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
