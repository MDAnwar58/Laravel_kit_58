@extends('layouts.backend')
@section('title', 'Admin Register')

@section('content')
    {{--=====================    banner start   =====================--}}
    <section style="margin: 5rem 0 0 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Admin Register</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.register.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <lebal>Name</lebal>
                                    <input type="name" name="name" placeholder="Enter Your Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <lebal>Email</lebal>
                                    <input type="email" name="email" placeholder="Enter Your email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <lebal>Password</lebal>
                                    <input type="password" name="password" placeholder="Enter Your password"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <lebal>Password</lebal>
                                    <input type="password" name="confirm_password" placeholder="Enter Your confirm_password"  class="form-control">
                                </div>
                                <div class="form-action mt-2">
                                    <button type="submit" class="w-100 btn btn-outline-dark">Register</button>
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
