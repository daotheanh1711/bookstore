<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PostController;


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

Route::get('/', [PageController::class, 'trangchu']);
Route::get('/dangnhap', [UserController::class, 'pagedangnhap'])->name('login');
Route::post('/dangnhap', [UserController::class, 'xulydangnhap']); 
Route::get('/dangxuat', [UserController::class, 'xulydangxuat']);
Route::get('cuahang/{id}/baocao', [PageController::class, 'inbaocao']);

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('', [PageController::class, 'thongke']);
   
    //khuvuc
    Route::get('khuvuc/danhsach', [AreaController::class, 'khuvuc']);
    Route::get('khuvuc/tao', [AreaController::class, 'tao']);
    Route::post('khuvuc/tao', [AreaController::class, 'luu']);
    Route::get('khuvuc/{id}/sua', [AreaController::class, 'sua']);
    Route::put('khuvuc/{id}/sua', [AreaController::class, 'capnhat']);
    Route::delete('khuvuc/{id}', [AreaController::class, 'xoa']);
    //cuahang
    Route::get('cuahang/danhsach', [StoreController::class, 'cuahang']);
    Route::get('cuahang/tao', [StoreController::class, 'tao']);
    Route::post('cuahang/tao', [StoreController::class, 'luu']);
    Route::get('cuahang/{id}/sua', [StoreController::class, 'sua']);
    //thieu
    Route::get('cuahang/{id}/baocao', [StoreController::class, 'inbaocao']);
    Route::delete('cuahang/{id}', [StoreController::class, 'xoa']);
    //baidang
    Route::get('baidang/danhsach', [PostController::class, 'baidang']);
    Route::get('baidang/tao', [PostController::class, 'tao']);
    Route::post('baidang/tao', [PostController::class, 'luu']);
    Route::get('baidang/{id}/sua', [PostController::class, 'sua']);
    Route::put('baidang/{id}/sua', [PostController::class, 'capnhat']);
    Route::delete('baidang/{id}', [PostController::class, 'xoa']);

});