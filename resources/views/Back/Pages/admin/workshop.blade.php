@extends('back.layouts.master')
@section('content')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Blank Page Layout
            <small>blank page layout</small>
        </h1>
    </div>
    <!-- END PAGE TITLE -->
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="index.html">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="#">Blank Page</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span class="active">Page Layouts</span>
    </li>
</ul>
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Workshops </span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{{url('admin/add-workshop')}}"
                                   id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">

                                    <li>
                                            <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>

                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>

                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> Workshop Name </th>
                            <th> City </th>
                            <th> Workshop Number </th>
                            <th> Employees </th>
                            <th> Waiting Spot </th>
                            <th> Joined At </th>
                            <th> Actions </th>
                            <th> Workshop Actions </th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($workshops as $workshop)
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> {{$workshop->workshop_name}} </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> {{$workshop->address}} </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> {{$workshop->shop_phone}} </span>
                            </td>
                            <td class="center"> {{$workshop->employees}} </td>
                            <td class="center"> {{$workshop->waiting_spot}} </td>

                            <td class="center"> {{$workshop->created_at->format('d/m/Y')}} </td>
                            <td>
                                <div class="btn-group">
                                    @if($workshop->request == 0)
                                        <form action="{{url('admin/change-workshop-status')}}" method="post" >
                                            @csrf
                                            <input type="hidden" value="{{$workshop->workshop_id}}" name="workshop">
                                            <button type="submit" class="btn btn-xs red dropdown-toggle" >
                                                <span >Suspended  </span>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{url('admin/change-workshop-status')}}" method="post" >
                                            @csrf
                                            <input type="hidden" value="{{$workshop->workshop_id}}" name="workshop">
                                            <button type="submit" class="btn btn-xs green dropdown-toggle" >
                                                <span > Activated </span>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="btn-group" style="display: flex;  justify-content: space-around;">
                                    <form action="{{url('admin/edit-workshop')}}" method="get">
                                        <input type="hidden" value="{{$workshop->workshop_id}}" name="workshop_id">
                                        <button class="btn btn-xs green dropdown-toggle" type="submit"> Edit
                                        </button>
                                    </form>
                                    <form action="{{url('admin/delete-workshop')}}" method="post" >
                                        @csrf
                                        <input type="hidden" value="{{$workshop->workshop_id}}" name="workshop_id">
                                        <button type="submit" class="btn btn-xs red dropdown-toggle" value="Disable">
                                            <span >Delete</span>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
