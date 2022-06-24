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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::middleware(['auth',])->group(function(){
    Route::get('/','App\Http\Controllers\DashboardController@login');
    Route::get('dashboard','App\Http\Controllers\DashboardController@index');
    Route::get('etudiant','App\Http\Controllers\EtudiantController@list_etudiant');
  
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
