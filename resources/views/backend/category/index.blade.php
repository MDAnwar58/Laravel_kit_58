@extends('layouts.backend')
@section('title', 'Category')

@section('content')
    {{--=====================    banner start   =====================--}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Category Insert</h4>
                    </div>
                    <div class="card-body">
                        <form id="category_frm" action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <lebal>Category</lebal>
                                <input type="text" name="name" id="category_name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="category-content">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($categories->count())
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <button data-id="{{ $category->id }}"
                                                class="btn-sm btn btn-success category_edit"
                                                data-bs-toggle="modal" data-bs-target="#category_create_Modal">
                                            Edit
                                        </button>
                                        <button data-id="{{ $category->id }}" class="btn-sm btn btn-danger category_delete">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">Category In Not Found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
    {{--=====================    banner end   =====================--}}
    <!-- Modal -->
    @include('backend.partials.category_edit_modal')
@endsection

