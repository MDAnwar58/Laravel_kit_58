@extends('layouts.backend')
@section('title', 'Mian Code')

@section('content')
    {{--    create modal--}}
    @include('backend.partials.code_create_modal')
    @include('backend.partials.code_edit_modal')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mb-2">
                @if(Session::has('success'))
                    <span style="background-color: rgba(22,73,49,0.24); padding: .3rem 1rem; color: #00572d; border-radius: 5px;">{{ Session::get('success') }}</span>
                @endif
            </div>
            <div class="col-md-12">
                <input type="search" id="main_code_search" class="form-control" placeholder="search code here ......">
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-success"
                                data-bs-toggle="modal" data-bs-target="#main_code_create_modal">
                            Main Code Created
                        </button>
                    </div>
                    <div class="main-code-content">
                        @include('backend.partials.main_code_table')
                    </div>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#image').dropify({});

            $('.main-code-des').summernote({});
            $('.main-code-meta_des').summernote({});
            $('.main-code-des1').summernote({});
            $('.main-code-codes1').summernote({});
            $('.main-code-des2').summernote({});
            $('.main-code-codes2').summernote({});
            $('.main-code-des3').summernote({});
            $('.main-code-codes3').summernote({});
            $('.main-code-des4').summernote({});
            $('.main-code-codes4').summernote({});
            $('.main-code-des5').summernote({});
            $('.main-code-codes5').summernote({});
            $('.main-code-des6').summernote({});
            $('.main-code-codes6').summernote({});
            $('.main-code-des7').summernote({});
            $('.main-code-codes7').summernote({});
            $('.main-code-des8').summernote({});
            $('.main-code-codes8').summernote({});
            $('.main-code-des9').summernote({});
            $('.main-code-codes9').summernote({});
            $('.main-code-des10').summernote({});
            $('.main-code-codes10').summernote({});
            $('.main-code-des11').summernote({});
            $('.main-code-codes11').summernote({});
            $('.main-code-des12').summernote({});
            $('.main-code-codes12').summernote({});
            $('.main-code-des13').summernote({});
            $('.main-code-codes13').summernote({});
            $('.main-code-des14').summernote({});
            $('.main-code-codes14').summernote({});
            $('.main-code-des15').summernote({});
            $('.main-code-codes15').summernote({});
        });
    </script>
@endsection

