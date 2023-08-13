@extends('layouts.backend')
@section('title', 'Payment Process')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pay-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>User Name</th>
                                    <th>Bkash transiction Code</th>
                                    <th>Bkash Account Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($pays->count()>0)
                                @foreach($pays as $pay)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $pay->user->first_name }} {{ $pay->user->last_name }}</td>
                                    <td>{{ $pay->transiction_code }}</td>
                                    <td>{{ $pay->number }}</td>
                                    <td>
                                        <a href="{{ route('user.info.show', $pay->user->id) }}" class="btn btn-sm btn-primary">View</a>
                                        <button data-id="{{ $pay->id }}" type="button" class="btn btn-sm btn-danger pay_delete">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">User Payment Info Is Not Found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
{{--    @include('backend.partials.category_edit_modal')--}}
@endsection

