@extends('layouts.frontend')
@section('title', 'Login Your Account')

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
                                <p class="">Please login to your account</p>
                            </div>

                            <form action="{{ route('login.request') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example11">Email</label>
                                    <input type="email" name="email" id="form2Example11" class="form-control"
                                           placeholder="email address ..." />
                                    @if($errors->has('email'))
                                        <span style="color: crimson;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22">Password</label>
                                    <input type="password" name="password" id="form2Example22" class="form-control" />
                                    @if($errors->has('password'))
                                        <span style="color: crimson;">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button class="btn btn-outline-success w-100 mb-3" type="submit">Log
                                        in</button>
                                    <a class="text-muted" href="#!">Forgot password?</a>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Don't have an account?</p>
                                    <a href="{{ route('register') }}" class="btn btn-outline-danger">Create A New Account</a>
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
