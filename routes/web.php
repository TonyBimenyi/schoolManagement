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
    // START ADMIN
    Route::get('admin','App\Http\Controllers\AdminController@list_admin');
    Route::get('create_admin','App\Http\Controllers\AdminController@create_admin');
    Route::post('insert_admin','App\Http\Controllers\AdminController@insert_admin');
    // END ADMIN

    // START STUDENT
    Route::get('create_student','App\Http\Controllers\StudentController@create_student');
    // END STUDENT

    // START TEACHER
    Route::get('teacher','App\Http\Controllers\TeacherController@list_teacher');
    // END TEACHER
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
