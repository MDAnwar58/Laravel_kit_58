@extends('layouts.backend')
@section('title', 'Contact')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="comment-content">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Day</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($contacts->count())
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $contact->user->first_name }} {{ $contact->user->last_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>
                                        @if($contact->is_read == 0)
                                            <span class="badge bg-info">unread</span>
                                        @else
                                            <span class="badge bg-success">read</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $contact->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-sm btn-warning">View</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Contacts In Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <div class="backend-contact-pagination">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
    {{--    @include('backend.partials.category_edit_modal')--}}
@endsection

