<?php

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
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/admissions', function () {
    return view('admissions');
});
Route::get('/staffs', function () {
    return view('staff');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact-us', function () {
    return view('contact_us');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/profile', 'ProfilesController@profile')->name('profile');
    Route::get('/add_student', 'HomeController@add_student')->name('add.student');
    // Route::get('/all_students', 'HomeController@all_students')->name('all.students');
    Route::get('/add_user', 'HomeController@add_user')->name('add.user');
    Route::get('/add_staff', 'HomeController@add_staff')->name('add.staff');
    Route::get('/all_staffs', 'HomeController@all_staffs')->name('all.staffs');

    /*****Student Controller Routes*****/
    Route::post('/student/add', ['uses' => 'StudentsController@add_student', 'as' => 'student.add']);
    Route::get('/all_students', 'StudentsController@all_students')->name('all.students');
    Route::get('/student/delete/{id}', ['uses' => 'StudentsController@delete_student', 'as' => 'student.delete']);
});

