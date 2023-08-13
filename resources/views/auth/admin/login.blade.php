@extends('layouts.backend')
@section('title', 'Admin Login')

@section('content')
    {{--=====================    banner start   =====================--}}
    <section style="margin: 10rem 0 0 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Admin Login</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.login.request') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <lebal>Email</lebal>
                                    <input type="email" name="email" placeholder="Enter Your email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <lebal>Password</lebal>
                                    <input type="password" name="password" placeholder="Enter Your email"  class="form-control">
                                </div>
                                <div class="form-action mt-2">
                                    <button type="submit" class="w-100 btn btn-outline-dark">Login</button>
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
