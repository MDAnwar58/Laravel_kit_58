@extends('layouts.frontend')
@section('title', 'Buy And Pay')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="pay-page-bg container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-success mt-5">Please Pay And Access Source Code</h2>
                <p class="text-center text-muted">Send Money And Then Transiction Code Send Me</p>
                <p class="text-center text-muted">Payment Complete And Access Source Code In 24h</p>
                <p class="text-muted text-center">Bkash Account: 01918725999</p>
                <div class="row justify-content-center" style="margin: 2rem 0 0 0;">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Payment</h4>
                            </div>
                            <div class="card-body">
                                <form id="pay_frm" action="" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    @if($errors->has('user_id'))
                                        <span style="color: crimson;">{{ $errors->first('user_id') }}</span>
                                    @endif
                                    <div class="form-group">
                                        <lebal>Bkash Account Number</lebal>
                                        <input type="number" name="number" id="number" class="form-control">
                                        <div class="pay_number mt-1" style="color: crimson; display: none; background-color: rgba(87,0,11,0.2); padding: .3rem 1rem; border-radius: 5px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <lebal>Bkash Transiction Code</lebal>
                                        <input type="text" name="transiction_code" id="transiction_code" class="form-control">
                                        <div class="pay_transiction_code mt-1" style="color: crimson; display: none; background-color: rgba(87,0,11,0.2); padding: .3rem 1rem; border-radius: 5px;">
                                        </div>
                                    </div>
                                    <div class="form-action mt-2">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
@endsection
