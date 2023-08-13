@extends('layouts.backend')
@section('title', 'Mian Code Edit')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="{{ route('admin.main.code.update', $code->id) }}" method="POST" enctype="multipart/form-data" style="width: 100%">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <input type="hidden" name="admin_id" value="{{ $code->admin_id }}">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="main-code-title" class="form-control main-code-title" value="{{ $code->title }}">
                                    @if($errors->has('title'))
                                        <span style="color: crimson;">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select name="sub_category_id" id="main_code_sub_category_id" class="form-control main_code_sub_category_id">
                                        <option value="">(Select Your Category)</option>
                                        @foreach($sub_categories as $sub_category)
                                            <option {{ $code->sub_category_id == $sub_category->id ? 'selected' : '' }} value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('sub_category_id'))
                                        <span style="color: crimson;">{{ $errors->first('sub_category_id') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Discription</label>
                                    <textarea name="des" id="main-code-des" class="main-code-des">{{ $code->des }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 1</label>
                                    <textarea name="des1" id="main-code-des1" class="main-code-des1">{{ $code->des1 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 1</label>
                                    <textarea name="codes1" id="main-code-codes1" class="main-code-codes1">{{ $code->codes1 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 2</label>
                                    <textarea name="des2" id="main-code-des2" class="main-code-des2">{{ $code->des2 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 2</label>
                                    <textarea name="codes2" id="main-code-codes2" class="main-code-codes2">{{ $code->codes2 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 3</label>
                                    <textarea name="des3" id="main-code-des3" class="main-code-des3">{{ $code->des3 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 3</label>
                                    <textarea name="codes3" id="main-code-codes3" class="main-code-codes3">{{ $code->codes3 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 4</label>
                                    <textarea name="des4" id="main-code-des4" class="main-code-des4">{{ $code->des4 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 4</label>
                                    <textarea name="codes4" id="main-code-codes4" class="main-code-codes4">{{ $code->codes4 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 5</label>
                                    <textarea name="des5" id="main-code-des5" class="main-code-des5">{{ $code->des5 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 5</label>
                                    <textarea name="codes5" id="main-code-codes5" class="main-code-codes5">{{ $code->codes5 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 6</label>
                                    <textarea name="des6" id="main-code-des6" class="main-code-des6">{{ $code->des6 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 6</label>
                                    <textarea name="codes6" id="main-code-codes6" class="main-code-codes6">{{ $code->codes6 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 7</label>
                                    <textarea name="des7" id="main-code-des7" class="main-code-des7">{{ $code->des7 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 7</label>
                                    <textarea name="codes7" id="main-code-codes7" class="main-code-codes7">{{ $code->codes7 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 8</label>
                                    <textarea name="des8" id="main-code-des8" class="main-code-des8">{{ $code->des8 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 8</label>
                                    <textarea name="codes8" id="main-code-codes8" class="main-code-codes8">{{ $code->codes8 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Discription 9</label>
                                    <textarea name="des9" id="main-code-des9" class="main-code-des9">{{ $code->des9 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 9</label>
                                    <textarea name="codes9" id="main-code-codes9" class="main-code-codes9">{{ $code->codes9 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 10</label>
                                    <textarea name="des10" id="main-code-des10" class="main-code-des10">{{ $code->des10 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 10</label>
                                    <textarea name="codes10" id="main-code-codes10" class="main-code-codes10">{{ $code->codes10 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 11</label>
                                    <textarea name="des11" id="main-code-des11" class="main-code-des11">{{ $code->des11 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 11</label>
                                    <textarea name="codes11" id="main-code-codes11" class="main-code-codes11">{{ $code->codes11 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 12</label>
                                    <textarea name="des12" id="main-code-des12" class="main-code-des12">{{ $code->des12 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 12</label>
                                    <textarea name="codes12" id="main-code-codes12" class="main-code-codes12">{{ $code->codes12 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 13</label>
                                    <textarea name="des13" id="main-code-des13" class="main-code-des13">{{ $code->des13 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 13</label>
                                    <textarea name="codes13" id="main-code-codes13" class="main-code-codes13">{{ $code->codes13 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 14</label>
                                    <textarea name="des14" id="main-code-des14" class="main-code-des14">{{ $code->des14 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 14</label>
                                    <textarea name="codes14" id="main-code-codes14" class="main-code-codes14">{{ $code->codes14 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Discription 15</label>
                                    <textarea name="des15" id="main-code-des15" class="main-code-des15">{{ $code->des15 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Coding 15</label>
                                    <textarea name="codes15" id="main-code-codes15" class="main-code-codes15">{{ $code->codes15 }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" id="main-code-meta_title" class="form-control main-code-meta_title" value="{{ $code->meta_title }}">
                                    @if($errors->has('meta_title'))
                                        <span style="color: crimson;">{{ $errors->first('meta_title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Meta Descirption</label>
                                    <textarea name="meta_des" id="main-code-meta_des" class="form-control main-code-meta_des" rows="3">{{ $code->meta_des }}</textarea>
                                    @if($errors->has('meta_des'))
                                        <span style="color: crimson;">{{ $errors->first('meta_des') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" id="edit_image" data-default-file="{{ url('upload/images', $code->image) }}" data-height="200">
                                    @if($errors->has('image'))
                                        <span style="color: crimson;">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-action">
                                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#edit_image').dropify({});

            $('#main-code-des').summernote({});
            $('#main-code-meta_des').summernote({});
            $('#main-code-des1').summernote({});
            $('#main-code-codes1').summernote({});
            $('#main-code-des2').summernote({});
            $('#main-code-codes2').summernote({});
            $('#main-code-des3').summernote({});
            $('#main-code-codes3').summernote({});
            $('#main-code-des4').summernote({});
            $('#main-code-codes4').summernote({});
            $('#main-code-des5').summernote({});
            $('#main-code-codes5').summernote({});
            $('#main-code-des6').summernote({});
            $('#main-code-codes6').summernote({});
            $('#main-code-des7').summernote({});
            $('#main-code-codes7').summernote({});
            $('#main-code-des8').summernote({});
            $('#main-code-codes8').summernote({});
            $('#main-code-des9').summernote({});
            $('#main-code-codes9').summernote({});
            $('#main-code-des10').summernote({});
            $('#main-code-codes10').summernote({});
            $('#main-code-des11').summernote({});
            $('#main-code-codes11').summernote({});
            $('#main-code-des12').summernote({});
            $('#main-code-codes12').summernote({});
            $('#main-code-des13').summernote({});
            $('#main-code-codes13').summernote({});
            $('#main-code-des14').summernote({});
            $('#main-code-codes14').summernote({});
            $('#main-code-des15').summernote({});
            $('#main-code-codes15').summernote({});
        });
    </script>
@endsection

