<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AjaxController;

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

Route::resource('patients', PatientController::class);

// نمایش فرم ورود اطلاعات و ذخیره آنها در پایگاه داده
Route::get('patients', [AjaxController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');

// دریافت اطلاعات یک سطر از اطلاعات ذخیره شده در پایگاه داده
Route::get('getData/{id}', [AjaxController::class, 'getData']);
Route::get('/patient/show', 'AjaxController@show');







Route::get('/modal' , function () {
    return view('form.modal');
});

Route::get('/test' , function () {
    return view('form.test');
});

