@extends('back.layouts.master')
@section('content')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <!-- <i class="icon-settings font-red"></i> -->
                        @if(isset($service))
                        <span class="caption-subject sbold uppercase"> Update Service</span>
                        @else
                        <span class="caption-subject sbold uppercase"> Save Service</span>
                        @endif
                    </div>
                </div>
                <div class="portlet-body">
                    @if(isset($service))
                    <form action="{{url('admin/add/service-edit')}}" method="post" enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">

                    @else
                    <form action="{{url('admin/cars/brand/add')}}" method="post" enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">
                    @endif
                        <div class="form-body">
                            @csrf
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>


                            <div class="form-group">
                                <label class="control-label col-md-3"> Service
                                    <span class="required" > * </span>
                                </label>
                                <div class="col-md-4">
                                    @if(isset($service))
                                        <input type="hidden" name="service_id" value="{{$service->service_id}}" />
                                        <input type="text" name="service_name" required data-required="1"
                                        class="form-control" value="{{$service->service_name}}"/> </div>
                                    @else
                                        <input type="text" name="car_type" required data-required="1"
                                        class="form-control" /> </div>
                                    @endif
                                </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Service
                                <span class="required" > * </span>
                            </label>
                            <div class="col-md-4">
                                @if(isset($service))
                                    <input type="hidden" name="service_id" value="{{$service->service_id}}" />
                                    <input type="text" name="service_name" required data-required="1"
                                           class="form-control" value="{{$service->service_name}}"/> </div>
                            @else
                                <input type="text" name="car_model" required data-required="1"
                                       class="form-control" /> </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"> Service
                        <span class="required" > * </span>
                    </label>
                    <div class="col-md-4">
                        @if(isset($service))
                            <input type="hidden" name="service_id" value="{{$service->service_id}}" />
                            <input type="text" name="service_name" required data-required="1"
                                   class="form-control" value="{{$service->service_name}}"/> </div>
                    @else
                        <input type="text" name="car_year" required data-required="1"
                               class="form-control" /> </div>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label col-md-3"> Service
                    <span class="required" > * </span>
                </label>
                <div class="col-md-4">
                    @if(isset($service))
                        <input type="hidden" name="service_id" value="{{$service->service_id}}" />
                        <input type="text" name="service_name" required data-required="1"
                               class="form-control" value="{{$service->service_name}}"/> </div>
                @else
                    <input type="text" name="car_kilo" required data-required="1"
                           class="form-control" /> </div>
            @endif
        </div>




                        <div class="form-group">
                            <label class="control-label col-md-3">Description
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">

                            @if(isset($service))
                                <textarea type="text" name="description" required data-required="1"
                                class="form-control">{{$service->description}} </textarea>

                             @else
                             <textarea type="text" name="chassis_number" required data-required="1"
                                class="form-control"></textarea>
                             @endif
                            </div>
                        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Description
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">

                @if(isset($service))
                    <textarea type="text" name="description" required data-required="1"
                              class="form-control">{{$service->description}} </textarea>

                @else
                    <textarea type="text" name="fuel_type" required data-required="1"
                              class="form-control"></textarea>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Description
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">

                @if(isset($service))
                    <textarea type="text" name="description" required data-required="1"
                              class="form-control">{{$service->description}} </textarea>

                @else
                    <textarea type="text" name="transmission" required data-required="1"
                              class="form-control"></textarea>
                @endif
            </div>
        </div>






                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    @if(!isset($service))
                                        <button type="submit" class="btn green">car</button>
                                    @else
                                        <button type="submit" class="btn green">Update</button>

                                    @endif
                                    <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>



    <!-- END PAGE BASE CONTENT -->

@stop
