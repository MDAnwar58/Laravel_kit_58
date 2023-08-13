@extends('layouts.frontend')
@section('title', 'Home')

@section('content')
{{--=====================    banner start   =====================--}}
<div class="banner-bg" style='background-image: url("{{ asset('img/banner.jpg') }}");'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Nothing as Easy as Deploying <br> Laravel Apps on Cloud</h1>
                <p>
                    Laravel is the best way in developing platform. <br>
                    easily developing any site on laravel.
                </p>
                @if(Auth::user())
                    <a href="{{ route('kits') }}">Getstart Learning</a>
                @else
                    <a href="{{ route('login') }}">Getstart Learning</a>
                @endif
            </div>
        </div>
    </div>
</div>
{{--=====================    banner end   =====================--}}
{{--=====================    kits start   =====================--}}
<div class="kits-bg mb-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center pb-3">Kits Section</h2>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('img/kits.png') }}" alt="kits">
            </div>
            <div class="col-lg-6 col-md-12">
                <h3>Laravel is a PHP web application framework</h3>
                <p>
                    These kits automatically scaffold your application
                    with the routes, controllers, and views you need to register and
                    authenticate your application's users. Laravel Kit. A simple and
                    elegant desktop application for managing your Laravel applications.
                </p>
                <p>
                    To give you a head start building your new Laravel application,
                    we are happy to offer authentication and application starter kits.
                </p>
                <a href="{{ route('kits') }}">More Kits</a>
            </div>
        </div>
    </div>
</div>
{{--=====================    kits end   =====================--}}

{{--=====================    about start   =====================--}}
<div class="about-bg mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center pb-3">About</h2>
            </div>
            <div class="col-md-12">
                <div class="img" style="background-image: url('{{ asset("img/about.jpg") }}')">
                    <a href="">About Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--=====================    about end   =====================--}}

{{--=====================    contact start   =====================--}}
<div class="contact-bg mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center pb-2">Contact Me</h2>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                @if(Auth::user())
                                    <form id="contact_frm" action="{{ route('contact.store') }}" method="POST"  enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="form-group">
                                            <lebal>Email</lebal>
                                            <input type="email" name="email" id="email" class="form-control">
                                            <div class="email-error-msg mt-2" style="color: red; background-color: rgb(255, 51, 0, .3);
                                                    border-radius: 5px; padding: 5px 0 5px 10px; display: none;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <lebal>Subject</lebal>
                                            <input type="text" name="subject" id="subject" class="form-control">
                                            <div class="subject-error-msg  mt-2" style="color: red; background-color: rgb(255, 51, 0, .3);
                                                    border-radius: 5px; padding: 5px 0 5px 10px; display: none;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <lebal>Message</lebal>
                                            <textarea name="msg" id="msg" class="form-control" rows="5"></textarea>
                                            <div class="msg-error-msg  mt-2" style="color: red; background-color: rgb(255, 51, 0, .3);
                                                    border-radius: 5px; padding: 5px 0 5px 10px; display: none;">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-outline-success w-100">Send</button>
                                        </div>
                                    </form>
                                @else
                                <form id="contact_frm" action="{{ route('contact.store') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="">
                                    <div class="login_error_msg" style="display: none;">
                                        <span>Please <a href="{{ route('login') }}">Login</a> Your Account Then Contact Me</span>
                                    </div>
                                    <div class="form-group">
                                        <lebal class="lebal">Email</lebal>
                                        <input type="text" name="email" class="email form-control" placeholder="Please Enter your email ...">
                                        <div class="email-error-msg mt-2" style="color: red; background-color: rgb(255, 51, 0, .3);
                                                    border-radius: 5px; padding: 5px 0 5px 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <lebal class="lebal">Subject</lebal>
                                        <input type="text" name="subject" class="subject form-control" placeholder="Subject ...">
                                        <div class="subject-error-msg  mt-2" style="color: red; background-color: rgb(255, 51, 0, .3);
                                                    border-radius: 5px; padding: 5px 0 5px 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <lebal class="lebal">Message</lebal>
                                        <textarea name="msg" id="msg" class="msg form-control" rows="5" placeholder="Enter Your Message ..."></textarea>
                                        <div class="msg-error-msg  mt-2" style="color: red; background-color: rgb(255, 51, 0, .3);
                                                    border-radius: 5px; padding: 5px 0 5px 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success w-100 mt-3">Send</button>
                                    </div>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--=====================    contact end   =====================--}}


@endsection
