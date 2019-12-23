<!DOCTYPE html>
<html>
    <head>
        <title>Applatin</title>
        <meta charset="utf-8">
        <!--============ IE FIX==============-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--==============FIRST MOBILE=============-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/font-awesome.min.css"><!-- inclide font-awesome 3 -->
        <link rel="stylesheet" href="css/grid.css"> <!-- include bootstrap grid system -->
        <link href="css/owl.carousel.min.css" rel="stylesheet"><!-- include owl style -->
        <link href="css/owl.theme.default.min.css" rel="stylesheet"><!-- include owl style -->
        <link href="css/jquery-ui.min.css" rel="stylesheet"><!-- include UI Jquery Style -->
        <link href="css/animate.css" rel="stylesheet"><!-- include UI Jquery Style -->
        <link href="css/hover-min.css" rel="stylesheet"><!-- include UI Jquery Style -->
        <link rel="stylesheet" href="css/screen.css"> <!-- inclide custome style file  -->
    </head>

    <body>
        <!-- Start Navbar Layout -->
            @include('layouts.navbar')
        <!-- End Navbar Layout -->
        <!-- Start inner header layout -->
            <div class="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="page-title">
                                <h2>reservation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End inner header layout -->

            <!--Start Search Result layout -->
            <div class="reserve section-bg">
                <div class="container">
                    <div class="row">
                        <!-- Start reserve form -->
                        <form>
                            <!-- Start Row -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="input select">
                                    <label>Car Type</label>
                                    <select>
                                        <option>BMW</option>
                                        <option>KIA</option>
                                        <option>SUZKI</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Start Row -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="input select">
                                    <label>Car Model</label>
                                    <select>
                                        <option>X1</option>
                                        <option>X2</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Start Row -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="input text">
                                    <label>Car Number</label>
                                    <input type="text">
                                </div>
                            </div>
                            <!-- End Row -->
                            <!-- Start Row -->
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <div class="input select">
                                    <label>Workshop Location</label>
                                    <select>
                                        <option>X1</option>
                                        <option>X2</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Start Row -->
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <div class="input select">
                                    <label>Services Type</label>
                                    <select>
                                        <option>X1</option>
                                        <option>X2</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Start Row -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="input submit">
                                    <input type="submit" value="Reserve Now" class="btn ">
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Start Row -->
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <div class="input text">
                                    <label>Service Cost</label>
                                    <input type="text">
                                </div>
                            </div>
                            <!-- End Row -->

                            <!-- Start Row -->
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <div class="input select">
                                    <label>Waiting to</label>
                                    <input type="text">
                                </div>
                            </div>
                            <!-- End Row -->


                        </form>
                        <!-- End reserve form -->
                    </div>
                </div>
            </div>
         <!--End Search Result layout -->

        <!-- Start Footer Layout -->
            @include('layouts.footer')
        <!-- End Footer Layout -->

        <!-- Start Include Js Files -->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.js"></script>
            <script src="js/jquery-ui.js"></script>
            <script src="js/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>
            <script src="js/main.js"></script>
    </body>

</html>
