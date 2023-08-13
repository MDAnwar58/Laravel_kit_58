@extends('layouts.backend')
@section('title', 'User Info Show')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">User Information</h2>
                    </div>
                    <div class="card-body">
                        <p>Name: {{ $user->first_name }} {{ $user->last_name }}</p>
                        <p>Username: {{ $user->username }}</p>
                        <p>Email: {{ $user->email }}</p>
                        <p>Bkash Account Name: {{ $pay->b_name }}</p>
                        <p>Bkash transiction Code: {{ $pay->transiction_code }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
@endsection

@include('backend.partials.user_edit_modal')
