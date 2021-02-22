<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});
Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/productlist',[productController::class,'index']);

Route::get('/product/create',[productController::class,'create']);
Route::post('/product',[productController::class,'store']);


Route::get('/product/{id}/edit', [productController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [productController::class, 'update'])->name('product.update');


Route::delete('product/{id}/delete', [productController::class, 'destroy'])->name('product.delete');