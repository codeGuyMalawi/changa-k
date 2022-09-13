<?php

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
    return view('pages.home');
});

Route::get('/cars', function () {
    return view('pages.cars');
});
//public
Route::get('/', [App\Http\Controllers\Dashboard::class, 'index'])->name('/');
Route::get('/cars', [App\Http\Controllers\Dashboard::class, 'explore'])->name('/cars');


//Admin

Route::get('/dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'index'])->name('/dashboard');
Route::put('/update-about/{id}', [App\Http\Controllers\Admin\Dashboard::class, 'updateAbout'])->name('update-about');
Route::put('/update-contact/{id}', [App\Http\Controllers\Admin\Dashboard::class, 'updateContact'])->name('update-contact');
Route::put('/update-policy/{id}', [App\Http\Controllers\Admin\Dashboard::class, 'updatePolicy'])->name('update-policy');
Route::put('/update-terms/{id}', [App\Http\Controllers\Admin\Dashboard::class, 'updateTerms'])->name('update-terms');


//manage cars
Route::get('/car-management', [App\Http\Controllers\Admin\carsController::class, 'index'])->name('/car-management');
Route::post('/add-car', [App\Http\Controllers\Admin\carsController::class, 'store'])->name('/add-car');
Route::get('/edit-car/{id}', [App\Http\Controllers\Admin\carsController::class, 'edit'])->name('/edit-car');
Route::get('/delete-car/{id}', [App\Http\Controllers\Admin\carsController::class, 'delete'])->name('/delete-car');
Route::put('/update-car/{id}', [App\Http\Controllers\Admin\carsController::class, 'update'])->name('update-car');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
