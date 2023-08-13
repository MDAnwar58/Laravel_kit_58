@extends('layouts.frontend')
@section('title', 'Register Your Account')

@section('content')
    {{--=====================    banner start   =====================--}}
    <section style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-center">
                                <h3 class="navbar-brand fs-3"><span class="span1">Laravel</span> <span class="span2">Kits</span></h3>
                                <p class="">Please Create your account</p>
                            </div>

                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">First Name</label>
                                            <input type="name" name="first_name" id="form2Example11" class="form-control"
                                                   placeholder="Enter Your First Name...." />
                                            @if($errors->has('first_name'))
                                                <span style="color: crimson;">{{ $errors->first('first_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Last Name</label>
                                            <input type="name" name="last_name" id="form2Example11" class="form-control"
                                                   placeholder="Enter Your Last Name...." />
                                            @if($errors->has('last_name'))
                                                <span style="color: crimson;">{{ $errors->first('last_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Username</label>
                                    <input type="username" name="username" id="form2Example11" class="form-control"
                                           placeholder="Enter Your Username...." />
                                    @if($errors->has('username'))
                                        <span style="color: crimson;">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" id="form2Example11" class="form-control"
                                           placeholder="email address......." />
                                    @if($errors->has('email'))
                                        <span style="color: crimson;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" id="form2Example22" placeholder="password" class="form-control" />
                                    @if($errors->has('password'))
                                        <span style="color: crimson;">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="confirm_password">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="form2Example22" class="form-control" placeholder="confirm password" />
                                    @if($errors->has('confirm_password'))
                                        <span style="color: crimson;">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                </div>

                                <div class="">
                                    <button class="btn btn-outline-success w-100 mb-3" type="submit">
                                        Register</button>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">You have an account?</p>
                                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-danger">Login</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--=====================    banner end   =====================--}}
@endsection
