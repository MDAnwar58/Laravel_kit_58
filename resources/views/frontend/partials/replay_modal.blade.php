<div class="modal-xl scroller modal fade" id="replay_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Replaies</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="replay_form">
                                <form id="replay_frm" method="POST">
                                @csrf
                                <input type="text" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="text" name="p_id" id="p_id" value="">
                                <input type="text" name="code_id" id="code_id" value="{{ $code->id }}">
                                <input type="text" name="name" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}">
                                <div class="form-group">
                                    <textarea name="msg" id="replay_msg"></textarea>
                                    <button type="submit" class="btn btn-warning w-100">Replay</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>

