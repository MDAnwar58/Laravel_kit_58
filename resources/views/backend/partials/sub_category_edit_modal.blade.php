<div class="modal fade" id="sub_category_edit_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="sub_category_update_frm">
                @csrf
                <input type="hidden" id="sub_category_id" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <lebal>Category</lebal>
                        <input type="text" name="name" id="sub_category_edit_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <lebal>Category</lebal>
                        <select name="category_id" id="sub-category_id" class="form-control">
                            <option value="">(Select Your Category)</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary sub_category_update_btn">Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
