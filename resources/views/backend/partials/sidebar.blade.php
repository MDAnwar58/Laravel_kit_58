<div class="card sidebar-card">
    <div class="card-header">
        <h4 class="text-center">SideBar</h4>
    </div>
    <div class="card-body">
        <ul class="nav-navbar">
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link
                    {{ Route::is('admin.home') ? 'active' : '' }} {{ Route::is('user.info.show') ? 'active' : '' }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.payment.process') }}" class="nav-link
                    {{ Route::is('admin.payment.process') ? 'active' : '' }}">
                    Payment Process
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category') }}" class="nav-link
                    {{ Route::is('admin.category') ? 'active' : '' }}">
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.sub.category') }}" class="nav-link
                    {{ Route::is('admin.sub.category') ? 'active' : '' }}">
                    Sub Category
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.main.code') }}" class="nav-link
                    {{ Route::is('admin.main.code') ? 'active' : '' }}">Main Code</a>
            </li>
            <li class="nav-item">
                @php
                    $comment_count = App\Models\Comment::where('is_read', 0)->get();
                @endphp
                <a href="{{ route('admin.comment') }}" class="nav-link
                    {{ Route::is('admin.comment') ? 'active' : '' }} {{ Route::is('admin.comment.show') ? 'active' : '' }}">Comments <span class="badge bg-success">
                        @if($comment_count->count()>0)
                        {{ $comment_count->count() }}
                        @else
                            0
                        @endif
                    </span>
                </a>
            </li>
            <li class="nav-item">
                @php
                    $contact_count = App\Models\Contact::where('is_read', 0)->get();
                @endphp
                <a href="{{ route('admin.contact') }}" class="nav-link
                    {{ Route::is('admin.contact') ? 'active' : '' }} {{ Route::is('admin.contact.show') ? 'active' : '' }}">Contact
                    <span class="badge bg-info">
                        @if($contact_count->count()>0)
                            {{ $contact_count->count() }}
                        @else
                            0
                        @endif
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
