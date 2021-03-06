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
    Route::post('/getName','App\Http\Controllers\FinanceController@getName');

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
<<<<<<< HEAD
    Route::get('att/{id}','App\Http\Controllers\StudentController@attestation');
=======
    Route::get('attestation/{id}','App\Http\Controllers\StudentController@attestation');
>>>>>>> f35230d968975fba0b84b897097972d1a586a62a
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
    // Route::get('perl','App\Http\Controllers\PersonnelController@list_personnel');
    Route::get('create_personnel','App\Http\Controllers\PersonnelController@create_personnel');
    Route::post('insert_personnel','App\Http\Controllers\PersonnelController@insert_personnel');
    Route::get('edit_personnel/{id}','App\Http\Controllers\PersonnelController@edit_personnel');
    Route::put('update_personnel/{id}','App\Http\Controllers\PersonnelController@update_personnel');
    Route::get('delete_personnel/{id}','App\Http\Controllers\PersonnelController@delete_personnel');
    // END PERSONNEL

    // START COURS
    Route::get('cours','App\Http\Controllers\CoursController@list_cours');
    Route::get('create_cours','App\Http\Controllers\CoursController@create_cours');


    // END COURS

    //START FINANCES
    Route::get('miverval_dash','App\Http\Controllers\FinanceController@index');
    Route::get('list_minos','App\Http\Controllers\FinanceController@list_minerval');
    Route::get('student_list','App\Http\Controllers\FinanceController@list_etudiants');
    Route::get('add_minerval/{id}','App\Http\Controllers\FinanceController@add_minerval');
    Route::get('recu_minos/{id}','App\Http\Controllers\FinanceController@recu_minos');
    Route::post('insert_minerval','App\Http\Controllers\FinanceController@insert_minerval');
    //END FINANCES

    // START SALAIRE
    Route::get('salaire','App\Http\Controllers\SalaireController@index_salaire');
    Route::get('list_salaire','App\Http\Controllers\SalaireController@list_salaire');
    Route::post('insert_salaire','App\Http\Controllers\SalaireController@insert_salaire');


    // END SALAIRE

    // START ENTREE
    Route::get('entree','App\Http\Controllers\EntreeController@list');
    Route::get('create_entree','App\Http\Controllers\EntreeController@create');
    Route::post('insert_entree','App\Http\Controllers\EntreeController@insert');
    Route::get('edit_entree/{id}','App\Http\Controllers\EntreeController@edit_entree');
    Route::put('update_entree/{id}','App\Http\Controllers\EntreeController@update_entree');
    Route::get('delete_entree/{id}','App\Http\Controllers\EntreeController@delete_entree');

    // END ENTREE

    // START SORTIE
    Route::get('list_sortie','App\Http\Controllers\SortieController@list');
    Route::get('add_sortie','App\Http\Controllers\SortieController@create_sortie');
    Route::post('insert_sortie','App\Http\Controllers\SortieController@insert_sortie');
    Route::get('edit_sortie/{id}','App\Http\Controllers\SortieController@edit_sortie');
    Route::put('update_sortie/{id}','App\Http\Controllers\SortieController@update_sortie');
    Route::get('delete_sortie/{id}','App\Http\Controllers\SortieController@delete_sortie');
    // END SORTIE

    //START STATS
    Route::get('stats','App\Http\Controllers\FinanceController@stats');
    Route::get('/downloadPDF','App\Http\Controllers\StudentController@downloadPDF');
    //ENS STATS

    Route::get('test','App\Http\Controllers\StudentController@att');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
