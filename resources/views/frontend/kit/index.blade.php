@extends('layouts.frontend')
@section('title', 'Kits')

@section('content')
{{--=====================    banner start   =====================--}}
<div class="kit-page-bg container">
    @if(!Auth::user()->role == 1)
    @if($paies->count()>0)
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="p-3" style="border-radius: 5px;background-color: rgb(0, 153, 204, .5); color: white;">Please Wait 24h InshaALLAH You Access Source Code !!.............Check And Then Access You</p>
            </div>
        </div>
    @endif
    @endif
    <div class="row main_code_content">
        {{--sidebar--}}
        <div class="col-lg-3 col-md-12">
            @include('frontend.partials.kit_sidebar')
        </div>
        <div class="col-lg-9 col-md-12">
            <h2 class="text-center mt-5 pb-3">All Laravel Kits</h2>
            <div class="row show-data" id="load_data">
                @include('frontend.partials.main_code')
{{--                <div class="col-md-12" style="display: none;" id="data_not_found">--}}
{{--                    <a href="" class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="card-title text-center text-dark">Data Is Not Found</h3>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="load_data_message" class="mb-3" style="display: none;
                    width: 100%;background:#fff;border-radius: 8px;
                    padding:1px;margin-top: 10px;">
                        <div class="d-flex justify-content-center p-3 loader">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <strong class="ms-3 mt-1">Loading More...</strong>
                        </div>
                    </div>
                    <div id="load_data_message_end" style="padding: 0; margin: 0;">
                        {{--          <h3 class="text-center">End Data</h3>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--=====================    banner end   =====================--}}
@endsection
