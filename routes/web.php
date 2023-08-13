<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\User\LoginController;
use App\Http\Controllers\Auth\User\RegisterController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\KitController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\PayController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CommentController;

use App\Http\Controllers\Auth\Admin\LogController;
use App\Http\Controllers\Auth\Admin\RegController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\CodeController;
use App\Http\Controllers\Backend\BCommentController;
use App\Http\Controllers\Backend\BackendContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('frontend.welcome');
//});


//frontend
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login/request', 'userLogin')->name('login.request');
    Route::get('/logout', 'logout')->name('logout');
});
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register/store', 'store')->name('register.store');
});
Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});
Route::controller(KitController::class)->group(function () {
    Route::get('/kits', 'index')->name('kits');
    Route::get('/kits-side-sub_category/{id}', 'sub_category');
    Route::post('/kits-side-search-code', 'searchCode');
    Route::post('/kits-side-search', 'search');
    Route::post('/kits-side-search-load-code', 'searchLoad')->name('search.load.code');
//    Route::post('/kits-auto-load-pagination', 'pagination');
    Route::get('/kits-code-pagination', 'pagination');
    Route::get('/kit-code-show/{slug}', 'show')->name('kit.code.show');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});
Route::controller(PayController::class)->group(function () {
    Route::get('/pay', 'index')->name('pay');
    Route::post('/pay-store', 'store');
});
Route::controller(App\Http\Controllers\Frontend\ContactController::class)->group(function () {
    Route::post('/contact-store', 'store')->name('contact.store');
});
Route::controller(CommentController::class)->group(function () {
    Route::post('/comment-store', 'store')->name('comment.store');
    Route::post('/replay-store', 'storeReplay');
});
//Route::controller(ReplayController::class)->group(function () {
//    Route::post('/replay-store', 'storeReplay')->name('replay.store');
//});

//backend

Route::controller(LogController::class)->group(function () {
    Route::get('/admin-login', 'login')->name('admin.login');
    Route::post('/admin-login/request', 'loginRequest')->name('admin.login.request');
    Route::get('/admin-logout', 'AdminLogout')->name('admin.logout');
});
Route::controller(RegController::class)->group(function () {
    Route::get('/admin-reg-main-page-01918@3', 'adminRegister')->name('admin.register');
    Route::post('/admin-reg-store', 'adminRegisterStore')->name('admin.register.store');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/admin-home', 'index')->name('admin.home');
    Route::get('/admin-home-user-role/{id}', 'role');
    Route::get('/admin-home-user-edit/{id}', 'edit');
    Route::post('/admin-home-user-update/{id}', 'update');
    Route::get('/admin-home-user-destory/{id}', 'destory');
    Route::get('/admin-home-user-info-show/{id}', 'show')->name('user.info.show');
    Route::get('/admin-home-user-info-search', 'search');
    Route::get('/admin-home-user-info-pagination', 'pagination');
});
Route::controller(PaymentController::class)->group(function () {
    Route::get('/admin-payment-process', 'index')->name('admin.payment.process');
    Route::get('/admin-payment-process-show/{id}', 'show')->name('admin.payment.process.show');
    Route::get('/admin-payment-process-destory/{id}', 'destory');
});
Route::controller(CategoryController::class)->group(function () {
    Route::get('/admin-category', 'index')->name('admin.category');
    Route::post('/admin-category-store', 'store');
    Route::get('/admin-category-edit/{id}', 'edit');
    Route::post('/admin-category-update/{id}', 'update');
    Route::get('/admin-category-delete/{id}', 'destory');
});
Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/admin-sub-category', 'index')->name('admin.sub.category');
    Route::post('/admin-sub-category-store', 'store');
    Route::get('/admin-sub-category-edit/{id}', 'edit');
    Route::post('/admin-sub-category-update/{id}', 'update');
    Route::get('/admin-sub-category-delete/{id}', 'destory');
});
Route::controller(CodeController::class)->group(function () {
    Route::get('/admin-main-main_code', 'index')->name('admin.main.code');
    Route::post('/admin-main-main_code-store', 'store');
    Route::get('/admin-main-main_code-edit/{id}', 'edit')->name('admin.main.code.edit');
    Route::put('/admin-main-main_code-update/{id}', 'update')->name('admin.main.code.update');
    Route::get('/admin-main-main_code-delete/{id}', 'destory');
    Route::get('/admin-main-main_code-search-pagination', 'searchPagination');
});
Route::controller(BCommentController::class)->group(function () {
    Route::get('/admin-comment', 'index')->name('admin.comment');
    Route::get('/admin-comment-show/{id}', 'show')->name('admin.comment.show');
    Route::post('/admin-comment-replay', 'replay')->name('admin.comment.replay');
    Route::get('/admin-comment-edit/{id}', 'edit');
    Route::post('/admin-comment-update/{id}', 'update');
    Route::get('/admin-comment-delete/{id}', 'destory')->name('admin.comment.delete');
    Route::get('/admin-replay-delete/{id}', 'destoryReplay')->name('admin.replay.delete');
});
Route::controller(BackendContactController::class)->group(function () {
    Route::get('/admin-contact', 'index')->name('admin.contact');
    Route::get('/admin-contact-show/{id}', 'show')->name('admin.contact.show');
    Route::get('/admin-contact-delete/{id}', 'destory')->name('admin.contact.delete');
});

