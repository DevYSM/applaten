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
                    @if(!isset($workshop))
                        <span class="caption-subject sbold uppercase"> Add Workshop</span>
                    @else
                        <span class="caption-subject sbold uppercase"> Update Workshop</span>
                    @endif
                </div>

            </div>
            <div class="portlet-body">

            @if(isset($workshop))
                <form action="{{url('admin/edit-workshop')}}" method="post"
                 enctype="multipart/form-data" id="form_sample_1" class="form-horizontal">

                    @else
                    <form action="{{url('admin/add-workshop')}}" method="post"
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
                                @if(isset($workshop))
                                <input type="hidden" name='id_workshop' value='{{$workshop->workshop_id}}' />
                                <input type="text" value="{{$workshop->workshop_name}}" name="workshop_name" required data-required="1" class="form-control" /> </div>
                                @else
                                <input type="text" name="workshop_name" required data-required="1" class="form-control" /> </div>
                                @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Workshop Logo
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="file" name="image" data-required="1" class="form-control" /> </div>
                        </div>






                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                            @if(!isset($workshop))
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
