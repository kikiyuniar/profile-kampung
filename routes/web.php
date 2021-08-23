<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BlogsController;
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

Route::get('/', function () {
    return view('front/home');
});
Route::get('/news-front', function () {
    return view('front/blog');
});
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

        Route::get('transparan', [InputController::class, 'index']);
        Route::post('update_transparan', [InputController::class, 'update_transparant']);

        Route::get('news', [BlogsController::class, 'index']);
        Route::post('add_news', [BlogsController::class, 'add_news']);
        Route::get('list_news', [BlogsController::class, 'list']);
        Route::get('/del/{id}', [BlogsController::class, 'del']);
        Route::get('/{slug}', [BlogsController::class, 'detail']);
        Route::get('view_edit_news', [BlogsController::class, 'view_edit_news']);
        Route::post('/action_edit_news', [BlogsController::class, 'action_edit_news']);
    }
);
