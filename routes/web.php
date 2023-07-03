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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/loaderio-dbb9c6f58a90261fa08a6ba054d6527c', function () {
    return view('loaderio-dbb9c6f58a90261fa08a6ba054d6527c');
});

Route::get('/pasien/tampildata', 'App\Http\Controllers\DataController@tampildata');
Route::get('/monitoring', 'App\Http\Controllers\DataController@tampilmonitor');
Route::get('/pasien/tampilsuhu', 'App\Http\Controllers\DataController@tampilsuhu');
Route::get('/pasien/tampilstatus', 'App\Http\Controllers\DataController@tampilstatus');
Route::get('/pasien/tampilangin', 'App\Http\Controllers\DataController@tampilangin');
Route::get('/pasien/tampilkelembaban', 'App\Http\Controllers\DataController@tampilkelembaban');
Route::get('/inputdata/{suhu}/{kelembaban}/{kecepatan_angin}', 'App\Http\Controllers\DataController@inputdata');
Route::get('/inputstatus/{device_id}', 'App\Http\Controllers\DeviceController@inputstatus');

Route::get('/pasien/tampilgrafik', 'App\Http\Controllers\DataController@tampilgrafik');
Route::get('/pasien/cobagrafik', 'App\Http\Controllers\DataController@cobagrafik');
Route::get('/elem/chart', 'App\Http\Controllers\DataController@showchart');

Route::get('/test', 'App\Http\Controllers\DataController@test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/status', [App\Http\Controllers\DeviceController::class, 'showStatus']);
