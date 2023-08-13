$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// category insert
$(document).on('submit', '#category_frm', function (event) {
    event.preventDefault();
    $.ajax({
       type:"POST",
       url:"admin-category-store",
        data:$('#category_frm').serialize(),
        success: function (data) {
            if (data.status == 200)
            {
                $('.category-content').load(location.href+' .category-content');
                $('#category_name').val('');
                toastr["success"](data.success)
                toastr.options = {
                    "closeButton": true,
                    "debug": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        }
    });
})
// category insert

// category edit
$(document).on('click', '.category_edit', function () {
    let id = $(this).data('id');

    $.ajax({
       type:"GET",
       url:"/admin-category-edit/"+id,
       success: function (data) {
           $('#category_id').val(data.id);
           $('#category_edit_name').val(data.name);
       }
    });
});
// category edit


// category update
$(document).on('submit', '#category_edit_frm', function (event) {
    event.preventDefault();
    let id = $("#category_id").val();
    $('.category_update_btn').text('loading ...');
    $.ajax({
       type:"POST",
       url:"/admin-category-update/"+id,
        data:$('#category_edit_frm').serialize(),
       success: function (data) {
           if (data.status == 200)
           {
               $('.category-content').load(location.href+' .category-content');
               $('#category_create_Modal').modal("hide");
               $('.category_update_btn').text('Update changes');
               toastr["success"](data.success)
               toastr.options = {
                   "closeButton": true,
                   "debug": true,
                   "newestOnTop": true,
                   "progressBar": true,
                   "positionClass": "toast-top-right",
                   "preventDuplicates": true,
                   "showDuration": "300",
                   "hideDuration": "1000",
                   "timeOut": "5000",
                   "extendedTimeOut": "1000",
                   "showEasing": "swing",
                   "hideEasing": "linear",
                   "showMethod": "fadeIn",
                   "hideMethod": "fadeOut"
               }
           }
       }
    });
});
// category update


// category delete


$(document).on('click', '.category_delete', function () {
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/admin-category-delete/"+id,
        success: function (data) {
            if (data.status == 200)
            {
                $('.category-content').load(location.href+' .category-content');
                toastr["success"](data.success)
                toastr.options = {
                    "closeButton": true,
                    "debug": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        }
    });
});

// category delete


// sub category insert
$(document).on('submit', '#sub_category_frm', function (event) {
    event.preventDefault();
    $.ajax({
       type:"POST",
       url:"/admin-sub-category-store",
       data:$('#sub_category_frm').serialize(),
       success: function (data) {
               if (data.status == 200)
               {
                   $('.sub-category-content').load(location.href + ' .sub-category-content');
                   $('#sub_category_name').val('');
                   $('#sub-s-category_id').val('');
                   toastr["success"](data.success)
                   toastr.options = {
                       "closeButton": true,
                       "debug": true,
                       "newestOnTop": true,
                       "progressBar": true,
                       "positionClass": "toast-top-right",
                       "preventDuplicates": true,
                       "showDuration": "300",
                       "hideDuration": "1000",
                       "timeOut": "5000",
                       "extendedTimeOut": "1000",
                       "showEasing": "swing",
                       "hideEasing": "linear",
                       "showMethod": "fadeIn",
                       "hideMethod": "fadeOut"
                   }
               }
       }
    });
});
// sub category insert

// sub category edit
$(document).on('click', '.sub_category_edit', function () {
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/admin-sub-category-edit/"+id,
        success: function (data) {
            $('#sub_category_id').val(data.id);
            $('#sub_category_edit_name').val(data.name);
            $('#sub-category_id').val(data.category_id);
        }
    });
});
// sub category edit

// sub category update
$(document).on('submit', '#sub_category_update_frm', function (event) {
    event.preventDefault();
    let id = $("#sub_category_id").val();
    $('.sub_category_update_btn').text('loading ...');
    $.ajax({
        type:"POST",
        url:"/admin-sub-category-update/"+id,
        data:$('#sub_category_update_frm').serialize(),
        success: function (data) {
                if (data.status == 200)
                {
                    $('.sub_category_update_btn').text('Update changes');
                    $('#sub_category_edit_Modal').modal("hide");
                    $('.sub-category-content').load(location.href + ' .sub-category-content');
                    toastr["success"](data.success)
                    toastr.options = {
                        "closeButton": true,
                        "debug": true,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }
        }
    });
});
// sub category update


// sub category delete


$(document).on('click', '.sub_category_delete', function () {
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/admin-sub-category-delete/"+id,
        success: function (data) {
                if (data.status == 200)
                {
                    $('.sub-category-content').load(location.href+' .sub-category-content');
                    toastr["success"](data.success)
                    toastr.options = {
                        "closeButton": true,
                        "debug": true,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }
        }
    });
});

// sub category delete


// main code insert
// form reset
// $('.main_code_created_frm')[0].reset();
// reset dropify
// reload button
// main code insert
$(document).on('submit', '#main_code_created_frm', function (event) {
    event.preventDefault();
    let formData = new FormData(this);
    $('.main_code_create_btn').text('loading ...');
    $.ajax({
        type: "POST",
        url: "/admin-main-main_code-store",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == 200)
            {
                $("#main_code_created_frm")[0].reset();
                    $('.main-code-content').load(location.href + ' .main-code-content');
                    // $('.main_code_created_frm').load(location.href + ' .main_code_created_frm');
                    $('#main_code_create_modal').modal('hide');
                    var drEvent = $('#image').dropify({});
                    drEvent = drEvent.data('dropify');
                    drEvent.resetPreview();
                    drEvent.clearElement();
                    $('.main_code_create_btn').text('Save changes');
                    toastr["success"](data.success)
                    toastr.options = {
                        "closeButton": true,
                        "debug": true,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }
        }
    });
});


// main code edit
// $(document).on('click', '.main_code_edit', function () {
//     let id = $(this).data('id');
//
//     $.ajax({
//         type:"GET",
//         url:"/admin-main-main_code-edit/"+id,
//         success: function (data) {
//             console.log(data);
//             $('#code_id').val(data.id);
//             $('.main-code-title').val(data.title);
//             $('.main_code_category_id').val(data.category_id);
//             $('.main_code_sub_category_id').val(data.sub_category_id);
//
//             $('#main-code-des1').value(data.des1);
//             $('#main-code-codes1').value(data.codes1);
//             $('#main-code-des2').val(data.des2);
//             $('#main-code-codes2').val(data.codes2);
//             $('#main-code-des3').val(data.des3);
//             $('#main-code-codes3').val(data.codes3);
//             $('#main-code-des4').val(data.des4);
//             $('#main-code-codes4').val(data.codes4);
//             $('#main-code-des5').val(data.des5);
//             $('#main-code-codes5').val(data.codes5);
//             $('#main-code-des6').val(data.des6);
//             $('#main-code-codes6').val(data.codes6);
//             $('#main-code-des7').val(data.des7);
//             $('#main-code-codes7').val(data.codes7);
//             $('#main-code-des8').val(data.des8);
//             $('#main-code-codes8').val(data.codes8);
//             $('#main-code-des9').val(data.des9);
//             $('#main-code-codes9').val(data.codes9);
//             $('#main-code-des10').val(data.des10);
//             $('#main-code-codes10').val(data.codes10);
//             $('#main-code-des11').val(data.des11);
//             $('#main-code-codes11').val(data.codes11);
//             $('#main-code-des12').val(data.des12);
//             $('#main-code-codes12').val(data.codes12);
//             $('#main-code-des13').val(data.des13);
//             $('#main-code-codes13').val(data.codes13);
//             $('#main-code-des14').val(data.des14);
//             $('#main-code-codes14').val(data.codes14);
//             $('#main-code-des15').val(data.des15);
//             $('#main-code-codes15').val(data.codes15);
//             $('#main-code-meta_title').val(data.meta_title);
//             $('#main-code-meta_des').val(data.meta_des);
//             // $('.dropify').val(data.codes15);
//         }
//     });
// });
// main code edit

// main code delete
$(document).on('click', '.main-code-delete', function () {
    let id = $(this).data('id');
    $.ajax({
        type:"GET",
        url:"/admin-main-main_code-delete/"+id,
        success: function (data) {
                if (data.status == 200)
                {
                    $('.main-code-content').load(location.href+' .main-code-content');
                    toastr["success"](data.success)
                    toastr.options = {
                        "closeButton": true,
                        "debug": true,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }
        }
    });
});
// main code delete


// show sdie main code
$(document).on('click', '.code_show', function (){
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/kits-side-sub_category/"+id,
        success: function (data) {
            $('.show-data').html(data);
        }
    });
});

// search autocomplete
var availableTags = [];

$.ajax({
        method:"POST",
        url:"/kits-side-search-code",
        success: function (data) {
            autoComplete(data);
        }
});

function autoComplete(availableTags)
{
    $(".search").autocomplete({
        source: availableTags
    })
}

// search
$(document).on('submit', '#searchfrm', function (event) {
    event.preventDefault();

    $.ajax({
        type:"POST",
        url:"/kits-side-search",
        data:$('#searchfrm').serialize(),
        success: function (data) {
            $('.show-data').html(data);
        }
    });
});


// autoload pagination in laravel
// var limit = 3;
// var start = 0;
// var action = 'inactive';
// // loadData(limit, start);
// function loadData(limit, start)
// {
//     $.ajax({
//         type:"POST",
//         url:"/kits-auto-load-pagination",
//         data:{limit:limit, start:start},
//         cache:false,
//         success:function(data)
//         {
//             $('.show-data').append(data);
//             $('#load_data_message').show();
//             if (limit == 0)
//             {
//                 $('#data_not_found').show();
//                 $('#load_data_message_end').hide();
//             }
//             if(data == '')
//             {
//                 $('#load_data_message').hide();
//                 $('#load_data_message_end').html("<div style='width: 100%;background:#fff;border-radius: 8px;padding:1px;margin-top: 10px;'><p style='text-align: center;font-weight: bold;'>End</p></div>'");
//                 action = 'active';
//             }else
//             {
//                 $('#load_data_message').show();
//                 action = "inactive";
//             }
//         }
//     });
// }
//
//
// if(action == 'inactive')
// {
//     action = 'active';
//     loadData(limit, start);
// }
// $(window).scroll(function(){
//     if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
//     {
//         action = 'active';
//         start = start + limit;
//         setTimeout(function(){
//             loadData(limit, start);
//         }, 1000);
//     }
// });

function code_pagination(page)
{
    $.ajax({
        url:"/kits-code-pagination?page="+page,
        success: function (data)
        {
            $('.show-data').html(data);
        }
    });
}
$(document).on('click', '.code_pagination a', function(event){
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    code_pagination(page);
});

// payment

$(document).on('submit', '#pay_frm', function (event) {
    event.preventDefault();

    $.ajax({
        type:"POST",
        url:"/pay-store",
        data:$('#pay_frm').serialize(),
        success: function (data) {
            if (data.status)
            {
                toastr["success"](data.success)
                toastr.options = {
                    "closeButton": true,
                    "debug": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                $('#number').val('');
                $('#transiction_code').val('');
            }
        },
        error: function (data) {
            if (data.responseJSON.errors.number)
            {
                $('.pay_number').show();
                $('.pay_number').text(data.responseJSON.errors.number);
            }
            if (data.responseJSON.errors.transiction_code)
            {
                $('.pay_transiction_code').show();
                $('.pay_transiction_code').text(data.responseJSON.errors.transiction_code);
            }
        }
    });
});
$(document).on('keyup', '#number', function () {
    $('.pay_number').hide();
});
$(document).on('keyup', '#transiction_code', function () {
    $('.pay_transiction_code').hide();
});



$(document).on('click', '.permission', function () {
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/admin-home-user-role/"+id,
        success: function (data) {
            if (data)
            {
                $('.user-table').load(location.href+' .user-table');
            }
        }
    });
});
$(document).on('click', '.permission_cancel', function () {
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/admin-home-user-role/"+id,
        success: function (data) {
            if(data)
            {
                $('.user-table').load(location.href+' .user-table');
            }
        }
    });
});

// user edit
$(document).on('click', '.user_edit_btn', function () {
    let id = $(this).data('id');

    $.ajax({
       type:"GET",
       url:"/admin-home-user-edit/"+id,
       success: function (data) {
           $('#id').val(data.id);
           $('#first_name').val(data.first_name);
           $('#last_name').val(data.last_name);
           $('#email').val(data.email);
           $('#username').val(data.username);
       }
    });
});

// user info update
$(document).on('submit', '#user_update_frm', function (event) {
    event.preventDefault();
    let id = $("#id").val();
    $('.user_info_update').text('loading .....');

    $.ajax({
       type:"POST",
       url:"/admin-home-user-update/"+id,
        data:$('#user_update_frm').serialize(),
       success: function (data) {
           if (data)
           {
               $('#user_edit-modal').modal('hide');
               $('.user-table').load(location.href+' .user-table');
               $('.user_info_update').text('Update');
           }
       },
        error: function (data) {
            console.log(data);
            $('.user_first_name').show();
            $('.user_first_name').text(data.responseJSON.errors.first_name);
            $('.user_last_name').show();
            $('.user_last_name').text(data.responseJSON.errors.last_name);
            $('.user_username').show();
            $('.user_username').text(data.responseJSON.errors.username);
            $('.user_email').show();
            $('.user_email').text(data.responseJSON.errors.email);
        }
    });
});
// user erros hide
$(document).on('keyup', '.first_name', function () {
    $('.user_first_name').hide();
});
$(document).on('keyup', '.last_name', function () {
    $('.user_last_name').hide();
});
$(document).on('keyup', '.username', function () {
    $('.user_username').hide();
});
$(document).on('keyup', '.email', function () {
    $('.user_email').hide();
});

// user info delete
$(document).on('click', '.user_info_delete', function () {
    let id = $(this).data('id');

    $.ajax({
        type:"GET",
        url:"/admin-home-user-destory/"+id,
        success: function (data) {
            if (data.status)
            {
                $('.user-table').load(location.href+' .user-table');
            }
        }
    });
});
// user name search
$(document).on('keyup', '#user_search', function () {
    let search = $(this).val();

    $.ajax({
       type:"GET",
        url:"admin-home-user-info-search",
        data:{search:search},
        success: function (data) {
            console.log(data);
            $('.user-table').html(data);
        }
    });
});
// user table pagination
function user_table_pagination(page)
{
    $.ajax({
        url:"/admin-home-user-info-pagination?page="+page,
        success: function (data)
        {
            $('.user-table').html(data);
        }
    });
}
$(document).on('click', '#user-pagination a', function (event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    user_table_pagination(page);
});

// main code search pagination
function main_code_search_pagination(page, search="")
{
    $.ajax({
        url:"/admin-main-main_code-search-pagination?page="+page+"&search="+search,
        success: function (data) {
            $('.main-code-content').html(data);
        }
    });
}
$(document).on('keyup', '#main_code_search', function(){
    var search = $('#main_code_search').val();
    var page = $('#hidden_page').val();
    main_code_search_pagination(page, search);
});

$(document).on('click', '.backend-main_code-pagination a', function(event){
    event.preventDefault();
    var search = $('#main_code_search').val();
    var page = $(this).attr('href').split('page=')[1];
    main_code_search_pagination(page, search);
});

// payment process delete
$(document).on('click', '.pay_delete', function () {
    let id = $(this).data('id');

    $.ajax({
       type:"GET",
       url:"/admin-payment-process-destory/"+id,
       success: function (data) {
           if (data.status)
           {
               $('.pay-table').load(location.href+' .pay-table');
               toastr["success"](data.success)
               toastr.options = {
                   "closeButton": true,
                   "debug": true,
                   "newestOnTop": true,
                   "progressBar": true,
                   "positionClass": "toast-top-right",
                   "preventDuplicates": true,
                   "showDuration": "300",
                   "hideDuration": "1000",
                   "timeOut": "5000",
                   "extendedTimeOut": "1000",
                   "showEasing": "swing",
                   "hideEasing": "linear",
                   "showMethod": "fadeIn",
                   "hideMethod": "fadeOut"
               }
           }
       }
    });
});
// function code_pagination(page)
// {
//     $.ajax({
//         url:"/kits-code-pagination?page="+page,
//         success: function (data)
//         {
//             $('.show-data').html(data);
//         }
//     });
// }
// $(document).on('click', '.code_pagination a', function(event){
//     event.preventDefault();
//     var page = $(this).attr('href').split('page=')[1];
//     code_pagination(page);
// });

// contact
$(document).on('submit', '#contact_frm', function (event) {
    event.preventDefault();
    let url = $(this).attr('action');
    let post = $(this).attr('method');

    $.ajax({
        type:post,
        url:url,
        data:$('#contact_frm').serialize(),
        success: function (data) {
            if (data.status)
            {
                toastr["success"](data.success)
                toastr.options = {
                    "closeButton": true,
                    "debug": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }


                $('#email').val('');
                $('#subject').val('');
                $('#msg').val('');
            }
        },
        error: function(data) {
            // user id error
            if (data.responseJSON.errors.user_id)
            {
                $('.login_error_msg').show();
            }
            if (data.responseJSON.errors.email)
            {
                $('.email-error-msg').show();
                $('.email-error-msg').text(data.responseJSON.errors.email);
            }
            if (data.responseJSON.errors.subject)
            {
                $('.subject-error-msg').show();
                $('.subject-error-msg').text(data.responseJSON.errors.subject);
            }
            if (data.responseJSON.errors.msg)
            {
                $('.msg-error-msg').show();
                $('.msg-error-msg').text(data.responseJSON.errors.msg);
            }
        }
    });
});
$(document).on('keyup', '.email', function () {
    $('.email-error-msg').hide();
});
$(document).on('keyup', '.subject', function () {
    $('.subject-error-msg').hide();
});
$(document).on('keyup', '.msg', function () {
    $('.msg-error-msg').hide();
});


// comment
$(document).on('submit', '#frm_comment', function (event) {
   event.preventDefault();
    let url = $(this).attr('action');
    let post = $(this).attr('method');

    $.ajax({
       type:post,
       url:url,
       data:$('#frm_comment').serialize(),
       success: function (data) {
               if (data.status)
               {
                   $('.comment-box').load(location.href+' .comment-box');
                   toastr["success"](data.success)
                   toastr.options = {
                       "closeButton": true,
                       "debug": true,
                       "newestOnTop": true,
                       "progressBar": true,
                       "positionClass": "toast-top-right",
                       "preventDuplicates": true,
                       "showDuration": "300",
                       "hideDuration": "1000",
                       "timeOut": "5000",
                       "extendedTimeOut": "1000",
                       "showEasing": "swing",
                       "hideEasing": "linear",
                       "showMethod": "fadeIn",
                       "hideMethod": "fadeOut"
                   }
                   $('#comment_msg').val('');
               }
       }
    });
});

$(document).on('submit', '#replay_frm', function (event) {
    event.preventDefault();

    $.ajax({
       type:"POST",
       url:"/replay-store",
       data:$('#replay_frm').serialize(),
        success: function (data) {
            if (data.status)
            {
                $('.comment-box').load(location.href+' .comment-box');
                $('#replay_msg').summernote('reset');
                // document.getElementById("replay_frm").reset();
                $("#replay_frm")[0].reset();
                // $('#replay_form ').load(location.href + ' #replay_form>*', '');
                // $('#replay_frm').reload();
                toastr["success"](data.success)
                toastr.options = {
                    "closeButton": true,
                    "debug": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                $('#replay_modal').modal('hide');
            }
        }
    });
});

function replay_show(id)
{
    $('#p_id').val(id);
}

$(document).on('submit', '#admin_replay_frm', function (event) {
    event.preventDefault();

    $.ajax({
       type:"POST",
       url:"/admin-comment-replay",
       data:$('#admin_replay_frm').serialize(),
       success: function (data) {
           if (data.status)
           {
               $('.admin_comment').load(location.href+' .admin_comment');
               $('#admin_msg').summernote('reset');
               // $("#admin_replay_frm")[0].reset();
               toastr["success"](data.success)
               toastr.options = {
                   "closeButton": true,
                   "debug": true,
                   "newestOnTop": true,
                   "progressBar": true,
                   "positionClass": "toast-top-right",
                   "preventDuplicates": true,
                   "showDuration": "300",
                   "hideDuration": "1000",
                   "timeOut": "5000",
                   "extendedTimeOut": "1000",
                   "showEasing": "swing",
                   "hideEasing": "linear",
                   "showMethod": "fadeIn",
                   "hideMethod": "fadeOut"
               }
           }
       }
    });
});
