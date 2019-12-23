@extends('front.layouts.master')
@section('content')
    <div class="s010">
        <form action="/" method="post">
            <div class="inner-form">
                <div class="basic-search">
                    <div class="input-field">
                        <input id="search" type="text" placeholder="Search..." />
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="advance-search">
                    <span class="desc">SEARCH...</span>
                    <div class="row">
                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="area">
                                    <option selected disabled>area</option>
                                    @foreach($Area as $area)
                                        <option  value="{{$area->area_id}}">{{$area->area_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="input-field">
                            <div class="input-select">
                                <select data-trigger="" name="brand">
                                    <option selected disabled>brands</option>
                                    @foreach($brand as $brand)
                                    <option  value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row third">
                        <div class="input-field">
                            <div class="result-count">
                                <span>108 </span>results</div>
                            <div class="group-btn">
                                <button class="btn-delete" id="delete">RESET</button>
                                <button class="btn-search">SEARCH</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
{{--        @if(isset($results))--}}
{{--            <div>--}}
{{--                --}}
{{--            </div>--}}
{{--        @endif--}}
    </div>



@stop
