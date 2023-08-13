@extends('layouts.backend')
@section('title', 'Comment Show')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card p-3">
                        <h4 class="text-center">{{ $comment->code->title }}</h4>
                        <div class=" text-center img">
                            <img src="{{ url('upload/images', $comment->code->image) }}" style="width: 60%; height: 70vh;" alt="{{ $comment->code->title }}">
                        </div>
                        <p>{!! $comment->code->des1 !!}</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Comments</h3>
                    </div>

                    <div class="card-body">

                            <h4>{{ $comment->name }}</h4>
                            <span>{{ date('d F, Y', strtotime($comment->created_at)) }}</span>
                            <p>{!! $comment->msg !!}</p>
                            <div class="d-flex justify-content-end">
                                <span>{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="row justify-content-end">
                                <div class="admin_comment">
                                    <div class="col-md-10">
                                        <h3 class="ms-2">Replaies</h3>
                                    </div>
                                    @if($comment->child->count()>0)
                                        @foreach($comment->child as $replay)
                                            <div class="col-md-10">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>{{ $replay->name }}</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <span>{{ date('d F, Y', strtotime($replay->created_at)) }}</span>
                                                        <p>{!! $replay->msg !!}</p>
                                                        <a href="{{ route('admin.replay.delete', $replay->id) }}" class="btn btn-danger">Delete</a>
                                                        <div class="d-flex justify-content-end">
                                                            <span>{{ $replay->created_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Replay Is Not Found</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-10 mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Replay</h4>
                                        </div>
                                        <form id="admin_replay_frm" action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="admin_id" value="{{ Auth::guard('admin')->user()->id }}">
                                            <input type="hidden" name="p_id" id="p_id" value="{{ $comment->id }}">
                                            <input type="hidden" name="code_id" id="code_id" value="{{ $comment->code->id }}">
                                            <input type="hidden" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                            <div class="form-group">
                                                <textarea name="msg" id="admin_msg" class="admin_msg"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="w-100 btn btn-success">Replay Added</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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

