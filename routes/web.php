<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UmkmComtroller;

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

Route::get('/', [Controller::class, 'home']);
Route::get('/news_front', [BlogsController::class, 'news_front']);
Route::get('/struktur_org', [StrukturController::class, 'struktur_front']);
Route::get('/umkm', [UmkmComtroller::class, 'umkm_front']);

// Route::get('/struktur_org', function () {
//     return view('front/struktur');
// });
// Route::get('/umkm', function () {
//     return view('front/umkm');
// });
Route::get('/download', [NewsController::class, 'view_download']);
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::group(
    ['middleware' => 'auth'],
    function () {

        Route::get('/admin', [AdminController::class, 'dashboard']);

        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
        Route::post('register', [AuthController::class, 'register']);
        Route::get('list_account', [AuthController::class, 'list']);
        Route::get('/delete/{id}', [AuthController::class, 'delete']);

        Route::get('/edit/{id}', [AuthController::class, 'show_edit_account']);
        Route::post('action_edit_account', [AuthController::class, 'action_edit_account']);
        Route::get('list_contact', [ContactController::class, 'view_contact']);

        Route::get('transparan', [InputController::class, 'index']);
        Route::post('update_transparan', [InputController::class, 'update_transparant']);
        Route::get('view_struktur', [StrukturController::class, 'add_struktur']);
        Route::get('view_umkm', [UmkmComtroller::class, 'add_umkm']);

        Route::post('/action_edit_news', [BlogsController::class, 'action_edit_news']);
        Route::get('news', [BlogsController::class, 'index']);
        Route::post('add_news', [BlogsController::class, 'add_news']);
        Route::get('list_news', [BlogsController::class, 'list']);
        Route::get('/del/{id}', [BlogsController::class, 'del']);
        Route::get('/{id}', [BlogsController::class, 'detail']);
        Route::get('view_edit_news', [BlogsController::class, 'view_edit_news']);

        Route::post('add_contact', [ContactController::class, 'add_contact']);
        Route::get('/del/{id}', [ContactController::class, 'del']);
        Route::post('post_struktur', [StrukturController::class, 'post_struktur']);
        Route::post('post_umkm', [UmkmComtroller::class, 'post_umkm']);
    }
);
