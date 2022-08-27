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
    return view('welcome');
});

Route::get('upload-file', function() {
    \Storage::disk('google')->put('google-drive.txt', 'Google Drive As Filesystem In Laravel (Duy)');
    dd('Đã upload file lên google drive thành công!');
});

Route::get('/watch', '\App\Http\Controllers\Api\DriveApiController@watch');
//Route::get('/notifications', '\App\Http\Controllers\Api\DriveApiController@notifications');
