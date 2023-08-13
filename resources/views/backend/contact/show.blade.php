@extends('layouts.backend')
@section('title', 'Contact Show')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Name: {{ $contact->user->first_name }} {{ $contact->user->last_name }} <br></h4>
                        <span>
                            {{ date('d F, Y h:i A', strtotime($contact->created_at)) }} <br>
                        </span>
                        <p>Email: {{ $contact->email }}</p>
                        <p>Subject: <span style="font-weight: bold;">{{ $contact->subject }}</span></p>
                        <p><span class="fw-bold">Contact Info</span>: {!! $contact->msg !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
    {{--    @include('backend.partials.category_edit_modal')--}}
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $('#admin_msg').summernote({
                height:150
            });
        });
    </script>

@endsection

