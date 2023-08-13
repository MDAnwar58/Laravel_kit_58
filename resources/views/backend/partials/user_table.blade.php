<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>S. No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if($users->count()>0)
            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->role == 0)
                            <button data-id="{{ $user->id }}" class="btn btn-sm btn-warning permission" id="permission">Permission</button>
                        @else
                            <button type="button" data-id="{{ $user->id }}" class="btn btn-sm btn-success permission_cancel">Permission Cancel</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('user.info.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                        <button data-bs-toggle="modal" data-bs-target="#user_edit-modal"
                                data-id="{{ $user->id }}" class="btn btn-dark btn-sm user_edit_btn">
                            Edit
                        </button>
                        <button type="button" data-id="{{ $user->id }}"
                                class="btn btn-danger btn-sm user_info_delete">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">Users Is Not Found</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
<div class="user-pagination" id="user-pagination">
    {{ $users->links() }}
</div>
