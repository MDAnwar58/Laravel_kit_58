@extends('layouts.backend')
@section('title', 'Sub Category')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Sub Category Insert</h4>
                    </div>
                    <div class="card-body">
                        <form id="sub_category_frm">
                            @csrf
                            <div class="form-group">
                                <lebal>Sub Category</lebal>
                                <input type="text" name="name" id="sub_category_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <lebal>Category</lebal>
                                <select name="category_id" id="sub-s-category_id" class="form-control">
                                    <option value="">(Select Your Category)</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sub-category-content">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Sub Category Name</th>
                            <th>Sub Category Slug</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($sub_categories->count())
                            @foreach($sub_categories as $sub_category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $sub_category->name }}</td>
                                    <td>{{ $sub_category->slug }}</td>
                                    <td>{{ $sub_category->category->name }}</td>
                                    <td>
                                        <button data-id="{{ $sub_category->id }}"
                                                class="btn-sm btn btn-success sub_category_edit"
                                                data-bs-toggle="modal" data-bs-target="#sub_category_edit_Modal">
                                            Edit
                                        </button>
                                        <button data-id="{{ $sub_category->id }}" class="btn-sm btn btn-danger sub_category_delete">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">Category In Not Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    {{ $sub_categories->links() }}
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
    @include('backend.partials.sub_category_edit_modal')
@endsection

