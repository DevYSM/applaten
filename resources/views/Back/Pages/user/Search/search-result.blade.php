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
                        <h2>Search Result</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End inner header layout -->


    <!--Start Search Result layout -->

    <div class="search-result">
        <div class="container">
            <div class="row">

                <!-- Start Box -->
                @foreach($results as $result)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Start Result Box -->
                        <div class="result-box">
                            <div class="workshop-img">
                                <img src= "{{url('/images/dashboard/seacrh-result/workshop-logo.png')}}" alt="Demo Img">
                            </div>
                            <div class="workshop-information">
                                <h4>{{$result->workshop_name}}</h4>
                                <p>{{$result->workshop_phone}}</p>
                            </div>
                            <div class="actions">
                                {{--<a href="#" class="btn-view-all-details">View All Details</a>--}}
                                <form action="{{url('/profile-workshop')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$result->workshop_id}}" name="workshop_id">
                                    {{--                                    <input type="hidden" value="{{$result->car_id}}" name="car_id">--}}
                                    {{--                                    <input type="hidden" value="{{$result->service_id}}" name="service_id">--}}
                                    <button class="reserve-now" type="submit"> Profile Workshop</button>
                                </form>
                            </div>
                        </div>
                    <!-- End Result Box -->
                </div>
            @endforeach
                 <!-- End Box -->

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
