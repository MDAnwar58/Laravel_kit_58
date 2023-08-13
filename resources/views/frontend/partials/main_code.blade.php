
@if($codes->count()>0)

@foreach($codes as $code)
<div class="col-md-12 mt-3 main-code-column">
    @if(Auth::user()->role == 0)
        <a href="{{ route('pay') }}" class="card">
            <img src="{{ url('upload/images', $code->image) }}" style="height: 60vh;" alt="{{ $code->name }}">
            <div class="card-body">
                @php
                    $code_id = $code->id;
                    $comments = App\Models\Comment::where('p_id', 0)->where('code_id', $code_id)->get();
                @endphp
                <h5>{{ $code->title }} | <span class="font-admin-date-comment">Admin: {{ $code->admin->name }}</span> | <span class="font-admin-date-comment">Date: {{ date('d-m-Y h:i A', strtotime($code->created_at)) }}</span> | <span class="font-comment">Comments: {{ $comments->count() }}</span></h5>
                <p class="text-dark">{!! $code->des !!}</p>
                <div class="text-end time_code">
                    <span>
                        @if($code->created_at)
                            {{ $code->created_at->diffForHumans() }}
                        @else
                            {{ $code->updated_at->diffForHumans() }}
                        @endif
                    </span>
                </div>
            </div>
        </a>
    @else
        <a href="{{ route('kit.code.show', $code->slug) }}" class="card">
            <img src="{{ url('upload/images', $code->image) }}" style="height: 60vh;" alt="{{ $code->name }}">
            <div class="card-body">
                @php
                    $code_id = $code->id;
                    $comments = App\Models\Comment::where('p_id', 0)->where('code_id', $code_id)->get();
                @endphp
                <h5>{{ $code->title }} | <span class="font-admin-date-comment">Admin: {{ $code->admin->name }}</span> | <span class="font-admin-date-comment">Date: {{ date('d-m-Y h:i A', strtotime($code->created_at)) }}</span> | <span class="font-comment">Comments: {{ $comments->count() }}</span></h5>
                <p>{!! $code->des !!}</p>
                <div class="text-end time_code">
                    <span>
                        @if($code->created_at)
                            {{ $code->created_at->diffForHumans() }}
                        @else
                            {{ $code->updated_at->diffForHumans() }}
                        @endif
                    </span>
                </div>
            </div>
        </a>
    @endif
</div>
@endforeach
@else
    <div class="col-md-12">
        <a href="" class="card">
            <div class="card-body">
                <h3 class="card-title text-center text-dark">Data Is Not Found</h3>
            </div>
        </a>
    </div>
@endif
<div class="col-md-12">
    <div class="code_pagination mt-4 mb-4">
        {!! $codes->links() !!}
    </div>
</div>
{{--        @if($codes->count()>0)--}}
{{--            @foreach($codes as $code)--}}
{{--                <div class="col-md-12 mb-3">--}}
{{--                    @if(Auth::user()->role == 0)--}}
{{--                        <a href="{{ route('pay') }}" class="card">--}}
{{--                            <img src="{{ url('upload/images', $code->image) }}" class="card-img-top" alt="...">--}}
{{--                            <div class="card-body">--}}
{{--                                @php--}}
{{--                                    $code_id = $code->id;--}}
{{--                                    $comments = Comment::with('child.user')--}}
{{--                                                    ->where('code_id', $code_id)--}}
{{--                                                    ->where('p_id', 0)--}}
{{--                                                    ->get();--}}
{{--                                @endphp--}}
{{--                                <h5 class="card-title">{{ $code->title }} | <span class="font-admin-date-comment">Admin: {{ $code->admin->name }}</span> | <span class="font-admin-date-comment">Date: {{ date('d F, Y', strtotime($code->created_at)) }}</span> | <span class="font-admin-date-comment">Comments: @if($comments->count())--}}
{{--                                                                                                                                                                                                                                                                                                                       {{ $comments->count() }}--}}
{{--                                                                                                                                                                                                                                                                                                                        @else--}}
{{--                                                                                                                                                                                                                                                                                                                       0--}}
{{--                                                                                                                                                                                                                                                                                                                        @endif--}}
{{--                                                                                                                                                                                                                                                                                                                        </span></h5>--}}
{{--                                <span class="card-text">{!! $code->meta_des !!}</span><br>--}}
{{--                                <div class="text-end time_count">--}}
{{--                                <span>--}}
{{--                                    @if($code->created_at)--}}
{{--                                        {{ $code->created_at->diffForHumans() }}--}}
{{--                                    @else--}}
{{--                                        {{ $code->updated_at->diffForHumans() }}--}}
{{--                                    @endif--}}
{{--                                </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    @else--}}
{{--                    <a href="{{ route('kit.code.show', $code->slug) }}" class="card">--}}
{{--                        <img src="{{ url('upload/images', $code->image) }}" class="card-img-top" alt="...">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">{{ $code->title }} | <span class="font-admin-date-comment">Admin: {{ $code->admin->name }}</span> | <span class="font-admin-date-comment">Date: {{ date('d F, Y', strtotime($code->created_at)) }}</span> | <span class="font-admin-date-comment">Comments: 2</span></h5>--}}
{{--                            <span class="card-text">{!! $code->meta_des !!}</span><br>--}}
{{--                            <div class="text-end time_count">--}}
{{--                                <span>--}}
{{--                                    @if($code->created_at)--}}
{{--                                        {{ $code->created_at->diffForHumans() }}--}}
{{--                                    @else--}}
{{--                                        {{ $code->updated_at->diffForHumans() }}--}}
{{--                                    @endif--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--            <div class="code_pagination">--}}
{{--                {{ $codes->links() }}--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="col-md-12">--}}
{{--                <a href="" class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h3 class="card-title text-center text-dark">Data Is Not Found</h3>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endif--}}
