<?php

use App\Http\Controllers\admin\product;
use App\Http\Controllers\Dashbord;

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
//php artisan serve
Route::get('/dashbord',Dashbord::class)->name('dashboard');

Route::get('dashboard.products.index',[product::class,'index'])->name('dashboard.products.index');
Route::get('dashboard.products.create',[product::class,'create'])->name('dashboard.products.create');
Route::get('dashboard.products.edit/{id}',[product::class,'edit'])->name('dashboard.products.edit');
Route::post('dashboard.products.store',[product::class,'store'])->name('dashboard.products.store');
