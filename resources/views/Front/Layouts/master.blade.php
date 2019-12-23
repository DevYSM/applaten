<!DOCTYPE html>
<html lang="<?php echo Config::get('app.locale'); ?>" dir="<?php (Config::get('app.locale') == 'en') ? print("ltr") : print("rtl") ?>">

<head>
    @include('Front.Includes.head')
</head>

<body class="page-container-bg-solid">
    @include('Front.Layouts.nav')
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <!-- <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Layouts</span>
                            </li>
                        </ul> -->
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class="page-content-inner">
                        @yield('content')
                    </div>
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    @include('front.Layouts.footer')
    @include('front.Includes.scripts')
</body>

</html>