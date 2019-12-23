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

    <!-- Start Header Layout -->
    <div class="header home-page-slider">
        <!-- Start Slider Section -->
        <div class="owl-carousel owl-theme">
            <div class="slider-date">
                <img src= "{{url('/images/dashboard/slider-img/1.jpg')}}" alt="">
            </div>
            <div class="slider-date">
                <img src="{{url('/images/dashboard/slider-img/2.jpg')}}" alt="">
            </div>
            <div class="slider-date">
                <img src="{{url('/images/dashboard/slider-img/3.jpg')}}" alt="">
            </div>
        </div>
        <!-- End Slider Section -->

        <!-- Start slider information -->
        <div class="slider-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <p class="main-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit reprehenderit quae quasi consequatur
                        </p>
                        <p  class="sub-text">
                            Lorem ipsum dolor sit amet, Call <i class="fa fa-phone"></i> 1044488
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start slider information -->

        <!-- Start Home page Search -->
        <div class="home-page-search-form">
            <div class="container">
                <div class="row">
                    <form action="/" method="post">
                    @csrf
                        <!-- Start input Row-->
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="input text search">
                                <label>Work Branch</label>
                                <input type="text" placeholder="Work Branch" name="workshop_name">
                            </div>

                            <div class="row">
                                <!-- Start Select Row-->
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <div class="input select city">
                                        <label>City</label>
                                        <select name="location_id">
                                            @foreach($locations as $location)
                                                <option  value="{{$location->location_id}}">{{$location->city}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select Row-->

                                <!-- Start Select Row-->
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <div class="input select place">
                                        <label>Place</label>
                                        <select name="place_id">
                                            <option selected DISABLED >Place</option>
                                            @foreach($locations as $location)
                                                <option value="{{$location->location_id}}">{{$location->place}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select Row-->
                                <!-- Start Select Row-->
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <div class="input select car-type">
                                        <label>Car Type</label>
                                        <select name="car_id">
                                            <option selected DISABLED>Car Type</option>
                                            @foreach($cars as $car)
                                                <option value="{{$car->car_id}}">{{$car->car_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select Row-->
                                <!-- Start Select Row-->
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <div class="input select city">
                                        <label>Workshop Type</label>
                                        <select name="workshop_type_id">
                                            <option selected DISABLED>Workshop Type</option>
                                            <option>Maintenance Center</option>
                                            <option>Workshop</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select Row-->

                                <!-- Start Select Row-->
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <div class="input select place">
                                        <label>Full Type</label>
                                        <select name="full_type_id">
                                            <option selected DISABLED>Full Type</option>
                                            <option>Gas</option>
                                            <option>Soler</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select Row-->
                                <!-- Start Select Row-->
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <div class="input select car-type">
                                        <label>Job</label>
                                        <select name="service_id">
                                            <option selected DISABLED>Service</option>
                                            @foreach($services as $service)
                                                <option value="{{$service->service_id}}">{{$service->service_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select Row-->
                            </div>

                        </div>
                        <!-- End input Row-->

                        <!-- Start Select Row-->
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="input submit">
                                <input type="submit" value="SEARCH">
                            </div>
                        </div>
                        <!-- End Select Row-->


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home page Search -->

    <!-- Start Arrow Dropdown Section  -->
    <div class="arrow-down">
        <a href="#about" class="hvr-float">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
    </div>
    <!-- End Arrow Dropdown Section  -->
    </div>
    <!-- End Header Layout -->

    <!-- Start About Layout -->
        @include('layouts.aboutdashboard')
    <!-- End About Layout -->

    <!-- Start Header Layout -->
        @include('layouts.footer')
    <!-- End Header Layout -->

    <!-- Start Include Js Files -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>
