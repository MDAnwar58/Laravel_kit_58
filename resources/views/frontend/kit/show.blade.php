@extends('layouts.frontend')
@section('title', 'Kit Show')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container p-lg-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-warning mb-3">{{ $code->title }} <br> <span class="font-admin-date-comment">Date: {{ date('d F, Y', strtotime($code->created_at)) }}</span> | <span class="font-admin-date-comment">Comments: {{ $comments->count() }}</span></h2>
                <img src="{{ url('upload/images', $code->image) }}"
                     style="height: 70vh; width: 100%" alt="">
                @if($code->des)
                <p class="mt-2">{!! $code->des !!}</p>
                @endif
                @if($code->des1)
                <p class="mt-2">{!! $code->des1 !!}</p>
                @endif
                @if($code->codes1)
                <div class="code">
                    {!! $code->codes1 !!}
                </div>
                @endif
                @if($code->des2)
                <p class="mt-2">{!! $code->des2 !!}</p>
                @endif
                @if($code->codes2)
                <div class="code">
                    {!! $code->codes2 !!}
                </div>
                @endif
                @if($code->des3)
                <p class="mt-2">{!! $code->des3 !!}</p>
                @endif
                @if($code->codes3)
                <div class="code">
                    {!! $code->codes3 !!}
                </div>
                @endif
                @if($code->des4)
                <p class="mt-2">{!! $code->des4 !!}</p>
                @endif
                @if($code->codes4)
                <div class="code">
                    {!! $code->codes4 !!}
                </div>
                @endif
                @if($code->des5)
                <p class="mt-2">{!! $code->des5 !!}</p>
                @endif
                @if($code->codes5)
                <div class="code">
                    {!! $code->codes5 !!}
                </div>
                @endif
                @if($code->des6)
                <p class="mt-2">{!! $code->des6 !!}</p>
                @endif
                @if($code->codes6)
                <div class="code">
                    {!! $code->codes6 !!}
                </div>
                @endif
                @if($code->des7)
                <p class="mt-2">{!! $code->des7 !!}</p>
                @endif
                @if($code->codes7)
                <div class="code">
                    {!! $code->codes7 !!}
                </div>
                @endif
                @if($code->des8)
                <p class="mt-2">{!! $code->des8 !!}</p>
                @endif
                @if($code->codes8)
                <div class="code">
                    {!! $code->codes8 !!}
                </div>
                @endif
                @if($code->des9)
                <p class="mt-2">{!! $code->des9 !!}</p>
                @endif
                @if($code->codes9)
                <div class="code">
                    {!! $code->codes9 !!}
                </div>
                @endif
                @if($code->des10)
                <p class="mt-2">{!! $code->des10 !!}</p>
                @endif
                @if($code->codes10)
                <div class="code">
                    {!! $code->codes10 !!}
                </div>
                @endif
                @if($code->des11)
                <p class="mt-2">{!! $code->des11 !!}</p>
                @endif
                @if($code->codes11)
                <div class="code">
                    {!! $code->codes11 !!}
                </div>
                @endif
                @if($code->des12)
                <p class="mt-2">{!! $code->des12 !!}</p>
                @endif
                @if($code->codes12)
                <div class="code">
                    {!! $code->codes12 !!}
                </div>
                @endif
                @if($code->des13)
                <p class="mt-2">{!! $code->des13 !!}</p>
                @endif
                @if($code->codes13)
                <div class="code">
                    {!! $code->codes13 !!}
                </div>
                @endif
                @if($code->des14)
                <p class="mt-2">{!! $code->des14 !!}</p>
                @endif
                @if($code->codes14)
                <div class="code">
                    {!! $code->codes14 !!}
                </div>
                @endif
                @if($code->des15)
                <p class="mt-2">{!! $code->des15 !!}</p>
                @endif
                @if($code->codes15)
                <div class="code">
                    {!! $code->codes15 !!}
                </div>
                @endif

                <div class="mt-5">
                    <form id="frm_comment" action="{{ route('comment.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="code_id" value="{{ $code->id }}">
                        <input type="hidden" name="name" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                        <div class="form-group">
                            <textarea name="msg" id="comment_msg" class="form-control"></textarea>
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </form>
                    <div class="comment-box">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-start">Comment: @if($comments->count()>0)
                                                                    {{ $comments->count() }}
                                                                @else
                                                                    0
                                                                @endif
                                </h4>
                            </div>
                            <div class="card-body">
                                @if($comments->count()>0)
                                @foreach($comments as $comment)
                                        @if($comment->child->count()>0)
                                            <div class="d-md-flex">
                                                    <div class="img_div">
                                                        <img src="{{ url('img/user.png') }}" style="width: 100px; height: 100px;" class="me-3 user_replay_image" alt="">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h5>{{ $comment->name }}</h5>
                                                        {!! $comment->msg !!}
                                                        <div class="comment_bottom_box mb-3">
                                                <span class="ms-5 replay" style="cursor: pointer;"
                                                      data-bs-toggle="modal" onclick="replay_show({{ $comment->id }})"
                                                      data-bs-target="#replay_modal">
                                                        Replay: {{ $comment->child->count() }}
                                                </span> |
                                                            <span class="ms-2">Date: {{ date('d F, Y', strtotime($comment->created_at)) }}</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="row justify-content-end mt-3 mb-3">
                                                @foreach($comment->child as $replay)
                                                <div class="col-md-10">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-md-flex">
                                                                    <div class="img_div">
                                                                        <img src="{{ url('img/user.png') }}" style="width: 100px; height: 100px;" class="me-3 user_replay_image" alt="">
                                                                    </div>
                                                                    <div class="comment-body">
                                                                        <h5>{{ $replay->name }}</h5>
                                                                        <p>{!! $replay->msg !!}</p>
                                                                        <div class="comment_bottom_box mb-3">
                                                                            <span class="ms-2">Date: {{ date('d F, Y', strtotime($comment->created_at)) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="d-md-flex">
                                                <div class="img_div">
                                                    <img src="{{ url('img/user.png') }}" style="width: 100px; height: 100px;" class="me-3 user_replay_image" alt="">
                                                </div>
                                                <div class="comment-body">
                                                    <h5>{{ $comment->name }}</h5>
                                                    {!! $comment->msg !!}
                                                    <div class="comment_bottom_box mb-3">
                                                <span class="ms-5 replay" style="cursor: pointer;"
                                                      data-bs-toggle="modal" onclick="replay_show({{ $comment->id }})"
                                                      data-bs-target="#replay_modal">
                                                        Replay: {{ $comment->child->count() }}
                                                </span> |
                                                        <span class="ms-2">Date: {{ date('d F, Y', strtotime($comment->created_at)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                @endforeach
                                @else
                                    <div class="data_not_found">
                                        <h2 class="text-center">Comment Is Not Found Here</h2>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $('#comment_msg').summernote({
                height: 150
            });
        });
        $(document).ready(function () {
            $('#replay_msg').summernote({
                height: 130
            });
        });
    </script>

@endsection

@include('frontend.partials.replay_modal')
