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

    Route::get('/findProductName','App\Http\Controllers\DashboardController@findProductName');
    Route::post('/getState','App\Http\Controllers\StudentController@getState');

    // START ADMIN
    Route::get('admin','App\Http\Controllers\AdminController@list_admin');
    Route::get('create_admin','App\Http\Controllers\AdminController@create_admin');
    Route::post('insert_admin','App\Http\Controllers\AdminController@insert_admin');
    // END ADMIN

    // START STUDENT
    Route::get('create_student','App\Http\Controllers\StudentController@create_student');
    Route::post('insert_student','App\Http\Controllers\StudentController@insert_student');
    Route::get('student','App\Http\Controllers\StudentController@list_student');
    Route::get('edit_student/{id}','App\Http\Controllers\StudentController@edit_student');
    Route::put('update_student/{id}','App\Http\Controllers\StudentController@update_student');
    Route::get('delete_student/{id}','App\Http\Controllers\StudentController@delete_student');
    // Route::get('attestation/{id}','App\Http\Controllers\StudentController@attestation');
    Route::get('id_etudiant','App\Http\Controllers\InfoController@id_etudiant');
    Route::get('attestation',function(){
        $pdf = PDF::loadView('attestation');
        return $pdf->download('attestation.pdf');
    });
    // END STUDENT

    // START TEACHER
    Route::get('teacher','App\Http\Controllers\TeacherController@list_teacher');
    Route::get('create_teacher','App\Http\Controllers\TeacherController@create_teacher');
    Route::post('insert_teacher','App\Http\Controllers\TeacherController@insert_teacher');
    Route::get('edit_teacher/{id}','App\Http\Controllers\TeacherController@edit_teacher');
    Route::put('update_teacher/{id}','App\Http\Controllers\TeacherController@update_teacher');
    Route::get('delete_teacher/{id}','App\Http\Controllers\TeacherController@delete_teacher');
    // END TEACHER

    // START PERSONNEL
    Route::get('personnel','App\Http\Controllers\PersonnelController@list_personnel');
    Route::get('create_personnel','App\Http\Controllers\PersonnelController@create_personnel');
    Route::post('insert_personnel','App\Http\Controllers\PersonnelController@insert_personnel');
    Route::get('edit_personnel/{id}','App\Http\Controllers\PersonnelController@edit_personnel');
    Route::put('update_personnel/{id}','App\Http\Controllers\PersonnelController@update_personnel');
    Route::get('delete_personnel/{id}','App\Http\Controllers\PersonnelController@delete_personnel');
    // END PERSONNEL
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
