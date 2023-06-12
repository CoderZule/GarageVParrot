<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', 'DashboardController@index');

Route::post('/send', 'ContactController@sendEmail')->name('contact.send');

Auth::routes();


Route::group(['middleware' => ['auth', 'Admin']], function () {
    Route::resource('employee', 'EmployeeController');
    Route::resource('service', 'ServiceController');
    Route::resource('opening-hours', 'OpeningHoursController');
});

Route::group(['middleware' => ['auth', 'Employee']], function () {
    Route::resource('vehicle', 'VehicleController');
});


Route::get('/details/{id}', 'HomeController@details')->name('vehicle.details');
