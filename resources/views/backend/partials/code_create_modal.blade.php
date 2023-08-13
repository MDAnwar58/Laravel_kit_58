<div class="modal-xl scroller modal fade" id="main_code_create_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Main Coding</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="main_code_created_frm" class="main_code_created_frm" style="width: 100%">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <input type="hidden" name="admin_id" value="{{ Auth::guard('admin')->user()->id }}">
                            <div class="form-group">
                                <lebal>Title</lebal>
                                <input type="text" name="title" class="form-control">
                                @if($errors->has('title'))
                                    <span style="color: crimson;">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <lebal>Sub Category</lebal>
                                <select name="sub_category_id" class="form-control">
                                    <option value="">(Select Your Category)</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('sub_category_id'))
                                    <span style="color: crimson;">{{ $errors->first('sub_category_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <lebal>Discription</lebal>
                                <textarea name="des" class="main-code-des"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 1</lebal>
                                <textarea name="des1" class="main-code-des1"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 1</lebal>
                                <textarea name="codes1" class="main-code-codes1"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 2</lebal>
                                <textarea name="des2" class="main-code-des2"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 2</lebal>
                                <textarea name="codes2" class="main-code-codes2"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 3</lebal>
                                <textarea name="des3" class="main-code-des3"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 3</lebal>
                                <textarea name="codes3" class="main-code-codes3"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 4</lebal>
                                <textarea name="des4" class="main-code-des4"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 4</lebal>
                                <textarea name="codes4" class="main-code-codes4"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 5</lebal>
                                <textarea name="des5" class="main-code-des5"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 5</lebal>
                                <textarea name="codes5" class="main-code-codes5"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 6</lebal>
                                <textarea name="des6" class="main-code-des6"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 6</lebal>
                                <textarea name="codes6" class="main-code-codes6"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 7</lebal>
                                <textarea name="des7" class="main-code-des7"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 7</lebal>
                                <textarea name="codes7" class="main-code-codes7"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 8</lebal>
                                <textarea name="des8" class="main-code-des8"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 8</lebal>
                                <textarea name="codes8" class="main-code-codes8"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <lebal>Discription 9</lebal>
                                <textarea name="des9" class="main-code-des9"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 9</lebal>
                                <textarea name="codes9" class="main-code-codes9"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 10</lebal>
                                <textarea name="des10" class="main-code-des10"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 10</lebal>
                                <textarea name="codes10" class="main-code-codes10"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 11</lebal>
                                <textarea name="des11" class="main-code-des11"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 11</lebal>
                                <textarea name="codes11" class="main-code-codes11"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 12</lebal>
                                <textarea name="des12" class="main-code-des12"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 12</lebal>
                                <textarea name="codes12" class="main-code-codes12"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 13</lebal>
                                <textarea name="des13" class="main-code-des13"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 13</lebal>
                                <textarea name="codes13" class="main-code-codes13"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 14</lebal>
                                <textarea name="des14" class="main-code-des14"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 14</lebal>
                                <textarea name="codes14" class="main-code-codes14"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Discription 15</lebal>
                                <textarea name="des15" class="main-code-des15"></textarea>
                            </div>
                            <div class="form-group">
                                <lebal>Coding 15</lebal>
                                <textarea name="codes15" class="main-code-codes15"></textarea>
                            </div>

                            <div class="form-group">
                                <lebal>Meta Title</lebal>
                                <input type="text" name="meta_title" class="form-control">
                                @if($errors->has('meta_title'))
                                    <span style="color: crimson;">{{ $errors->first('meta_title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <lebal>Meta Descirption</lebal>
                                <textarea name="meta_des" class="form-control main-code-meta_des" rows="3"></textarea>
                                @if($errors->has('meta_des'))
                                    <span style="color: crimson;">{{ $errors->first('meta_des') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <lebal>Image</lebal>
                                <input type="file" name="image" id="image" data-height="200">
                                @if($errors->has('image'))
                                    <span style="color: crimson;">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary main_code_create_btn">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

