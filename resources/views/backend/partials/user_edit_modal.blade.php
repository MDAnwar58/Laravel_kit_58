<div class="modal fade" id="user_edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Main Coding</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="user_update_frm" class="main_code_created_frm" style="width: 100%">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" class="form-control">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <lebal>First Name</lebal>
                                <input type="text" name="first_name" id="first_name" class="first_name form-control">
                                <div class="user_first_name mt-1" style="color: crimson; background-color: rgba(139,0,0,0.2); padding: .3rem .5rem; border-radius: 5px; display: none;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <lebal>Last Name</lebal>
                                <input type="text" name="last_name" id="last_name" class="last_name form-control">
                                <div class="user_last_name mt-1" style="color: crimson; background-color: rgba(139,0,0,0.2); padding: .3rem .5rem; border-radius: 5px; display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <lebal>Username</lebal>
                        <input type="text" name="username" id="username" class="username form-control">
                        <div class="user_username mt-1" style="color: crimson; background-color: rgba(139,0,0,0.2); padding: .3rem .5rem; border-radius: 5px; display: none;"></div>
                    </div>
                    <div class="form-group">
                        <lebal>Email</lebal>
                        <input type="text" name="email" id="email" class="email form-control">
                        <div class="user_email mt-1" style="color: crimson; background-color: rgba(139,0,0,0.2); padding: .3rem .5rem; border-radius: 5px; display: none;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary user_info_update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

