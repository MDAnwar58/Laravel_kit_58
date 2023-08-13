@extends('layouts.backend')
@section('title', 'Dashboard')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <input type="search" id="user_search" class="form-control" placeholder="User Search Here .......">
            </div>
            <div class="col-md-12">
                <div class="user-table">
                    @include('backend.partials.user_table')
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
@endsection

@include('backend.partials.user_edit_modal')
