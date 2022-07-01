<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FormController::class,'signupController']);

Route::get('',[PageOneController::class,'getIndex']);
Route::get('/type/{id}',[PageOneController::class,'getLoaiSp']);
Route::get('/loaisp',[PageOneController::class,'getLoaiSp']);
Route::get('/chitiet',[PageOneController::class,'getChitiet']);
Route::get('/lienhe',[PageOneController::class,'getLienhe']);
Route::get('/about',[PageOneController::class,'getAbout']);

Route :: get('/admin-add-form',[PageController :: class,'getAdminAdd'])->name('add-product');
Route :: post('/admin-add-form',[PageController :: class,'postAdminAdd']);




Route::get('/trangchu',[PageController::class,'getIndex']);
Route::get('/type/{id}',[PageController::class,'getLoaiSp']);

//trang admin
Route::get('/admin',[PageController::class, 'getAdminpage']);
Route::post('/admin',[PageController::class,'postAdminAdd'])->name('admin-add-form');

Route::get('/showadmin',[PageController::class, 'getIndexAdmin']);


Route::get('/detail/{id}',[PageOneController::class,'getDetail']);
Route::get('/admin-edit-form/{id}',[PageController::class,'getAdminEdit']);
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);

