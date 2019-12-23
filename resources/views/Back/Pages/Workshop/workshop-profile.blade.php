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
                        <h2>workshop portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End inner header layout -->

    <!-- Start Wordshop Profile -->
    <div class="workshop-profile section-bg ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>Portfolio</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="profile white-bg square-box">
                        <div class="workshop-logo text-center">
                            <img class="circle" src="/images/dashboard/seacrh-result/workshop-logo.png" alt="test">
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <strong>Phone: </strong>
                                <span>{{$workshop->workshop_phone}}</span>
                            </li>
                            <li>
                                <strong>Land Line: </strong>
                                <span>{{$workshop->workshop_land_line}}</span>
                            </li>
                            <li>
                                <strong>Address: </strong>
                                @foreach($locations as $location)
                                    <span>{{$location->place}}</span>
                                    <span>{{$location->city}}</span>
                                    <span>{{$location->country}}</span>
                                @endforeach
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="workshop-details  white-bg section-padding square-box">
                        <h3>Name: {{$workshop->workshop_name}}</h3>
                        <p>{{$workshop->workshop_description}}</p>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="hr"></div>
                </div>
                <!-- Start equipment layout -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>equipment</h2>
                    </div>
                </div>
                @foreach($equipments as $equipment)
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="equipment-box square-box white-bg pa-20 text-center">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <h4>{{$equipment->equipment_name}}</h4>
                            <p>{{$equipment->description}}</p>
                        </div>
                    </div>
                @endforeach

                <!-- End equipment layout -->

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="hr"></div>
                </div>
                <!-- Start equipment layout -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h2>Services</h2>
                    </div>
                </div>

                <!-- Start equipment layout -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="services white-bg pa-20">
                        <table>
                            <thead>
                                <tr>
                                    <th>Services</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{$service->service_name}}</td>
                                        <td>{{$service->service_description}}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="actions">
                    {{--<a href="#" class="btn-view-all-details">View All Details</a>--}}
                    <form action="{{url('/reserve-service-workshop')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$result->workshop_id}}" name="workshop_id">
                        {{--                                    <input type="hidden" value="{{$result->car_id}}" name="car_id">--}}
                        {{--                                    <input type="hidden" value="{{$result->service_id}}" name="service_id">--}}
                        <button class="reserve-now" type="submit"> reservation</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Wordshop Profile -->


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
