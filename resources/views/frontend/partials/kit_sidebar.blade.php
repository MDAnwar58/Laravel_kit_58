<div class="card mt-5">
    <div class="card-header">
        <h4 class="text-center card-title">Manu</h4>
    </div>
    <ul>
        <li>
            @if ($categories->count() > 0)
                @foreach ($categories as $category)
                    <span class="">
                        <button class="category_btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#{{ $category->name }}" aria-expanded="false" aria-controls="collapseExample">
                            {{ $category->name }}
                        </button>
                    </span><br>
                    @if ($category->sub_category->count() > 0)
                        @foreach ($category->sub_category as $sub_category)
                            <div class="collapse" id="{{ $category->name }}">
                                <div class="card card-body code_show" data-id="{{ $sub_category->id }}"
                                    style="cursor: pointer;">
                                    <span class="">{{ $sub_category->name }}</span>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="collapse" id="{{ $category->name }}">
                            <div class="card card-body">
                                {{ $category->name }} Project Not Found
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
        <li>Category Not Found</li>
        @endif
        </li>
    </ul>
</div>
