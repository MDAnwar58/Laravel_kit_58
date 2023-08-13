<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>S. No</th>
            <th>Title</th>
            <th>Code Slug</th>
            <th>Sub Category</th>
            <th>Image</th>
            @php
                foreach ($codes as $item){
                    $item = $item->created_at;
                }
            @endphp
            @if($item)
                <th>Date|Time</th>
            @else
                <th>Update</th>
            @endif
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @if($codes->count()>0)
        @foreach($codes as $code)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $code->title }}</td>
                <td>{{ $code->slug }}</td>
                <td>{{ $code->sub_category->name }}</td>
                <td>
                    <img src="{{ url('upload/images', $code->image) }}" style="width: 50px; height: 50px;" alt="">
                </td>
                <td>
                    @if($code->created_at)
                        {{ date('d-m-Y h:i A', strtotime($code->created_at)) }}
                        <br>
                        {{ $code->created_at->diffForHumans() }}
                    @else
                        {{ date('d-m-Y h:i A', strtotime($code->updated_at)) }}
                        <br>
                        {{ $code->updated_at->diffForHumans() }}
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.main.code.edit', $code->id) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <button type="button" data-id="{{ $code->id }}" class="btn btn-danger btn-sm main-code-delete">Delete</button>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="8">Data Is Not Found</td>
        </tr>
    @endif
    </tbody>
</table>
<div class="backend-main_code-pagination">
    {{ $codes->links() }}
</div>
