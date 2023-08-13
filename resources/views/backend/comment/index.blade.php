@extends('layouts.backend')
@section('title', 'Comments')

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
                                <th>Comment User Name</th>
                                <th>Code Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($comments->count())
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->code->title }}</td>
                                    <td>
                                        @if($comment->is_read == 0)
                                            <span class="badge bg-warning">unread</span>
                                        @else
                                            <span class="badge bg-success">read</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.comment.show', $comment->id) }}" class="btn btn-sm btn-warning">View</a>
                                        <a href="" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('admin.comment.delete', $comment->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Comments In Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <div class="backend-comment-pagination">
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
{{--    @include('backend.partials.category_edit_modal')--}}
@endsection

