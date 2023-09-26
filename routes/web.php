<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\PendidikanController;
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

// Route::get('/admin','Admin\BerandaController@index');

Route::get('/admin', [BerandaController::class, 'index']);

Route::get('/admin/profile/',[ProfileController::class, 'index']);
Route::put('/admin/profile/{id}',[ProfileController::class, 'update']);


Route::get('/admin/manage-pengalaman',[PengalamanController::class, 'index']);
Route::post('/admin/manage-pengalaman',[PengalamanController::class, 'store']);
Route::get('/admin/manage-pengalaman/{id}',[PengalamanController::class, 'edit']);
Route::put('/admin/manage-pengalaman/{id}',[PengalamanController::class, 'update']);
Route::get('/admin/manage-pengalaman/add',[PengalamanController::class, 'add']);

Route::get('/admin/manage-pendidikan',[PendidikanController::class, 'index']);
Route::get('/admin/manage-pendidikan/add',[PendidikanController::class, 'add']);
Route::post('/admin/manage-pendidikan',[PendidikanController::class, 'store']);
Route::get('/admin/manage-pendidikan/{id}',[PendidikanController::class, 'edit']);
Route::put('/admin/manage-pendidikan/{id}',[PendidikanController::class, 'update']);
Route::delete('/admin/manage-pendidikan/{id}',[PendidikanController::class, 'delete']);