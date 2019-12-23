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
                    @if(!isset($brand))
                        <span class="caption-subject sbold uppercase"> Add Brand</span>
                    @else
                        <span class="caption-subject sbold uppercase"> Update Brand</span>
                    @endif
                </div>

            </div>
            <div class="portlet-body">

            @if(isset($brand))
                <form action="{{url('admin/edit-brand')}}" method="post"
                 enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">

                    @else
                    <form action="{{url('admin/cars/brand/add')}}" method="post"
                    enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">
                    @endif
                    <div class="form-body">
                        @csrf
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                @if(isset($brand))
                                <input type="hidden" name='brand_id' value='{{$brand->brand_id}}' />
                                <input type="text" value="{{$brand->brand_name}}" name="brand_name" required data-required="1" class="form-control" /> </div>
                                @else
                                <input type="text" name="brand_name" required data-required="1" class="form-control" /> </div>
                                @endif
                    </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Brand Logo
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="file" name="image" data-required="1" class="form-control" /> </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Country
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="country" required>
                                @if(!isset($brand))
                                <option value="" disabled selected >Select...</option>
                                    @foreach($countries as $country)
                                            <option value="{{$country->country_id}}" >{{$country->country_name}}</option>
                                    @endforeach
                                @else

                                @foreach($countries as $country)
                                        @if($country->country_id == $brand->id_country)
                                            <option selected  value="{{$country->country_id}}" >{{$country->country_name}}</option>
                                        @else
                                        <option value="{{$country->country_id}}">{{$country->country_name}}</option>
                                        @endif
                                @endforeach
                                @endif

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" name="status" required>
                                    @if(isset($brand) && $brand->status===0)
                                    <option value="0"  selected>Disabled</option>
                                    <option value="1">Active</option>
                                    @elseif(isset($brand) && $brand->status===1)
                                    <option value="1"  selected>Active</option>
                                    <option value="0">Disabled</option>
                                    @else
                                            <option value="" disabled selected>Select...</option>
                                            <option value="1"> Active</option>
                                            <option value="0">Disabled</option>

                                        @endif
                               </select>
                            </div>
                        </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                            @if(!isset($brand))
                                <button type="submit" class="btn green">Submit</button>
                            @else
                                <button type="submit" class="btn green">Update</button>
                            @endif
                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                            </div>
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
