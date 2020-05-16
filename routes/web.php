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
    return view('welcome');
});


Route::get('admin/register', function () {
    return view('auth.admin-register');
});

Route::post('admin/register', 'Auth\AdminRegisterController@create')->name('admin.register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/logout', 'Auth\LoginController@userlogout')->name('user.logout');


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    // Route::post('/register', 'Auth\AdminRegisterController@create')->name('admin.register.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


Route::prefix('teacher')->group(function(){
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');

    Route::get('/register', 'Auth\TeacherRegisterController@showRegisterForm')->name('teacher.register');
    Route::post('/register', 'Auth\TeacherRegisterController@create')->name('teacher.register.submit');

    Route::get('/', 'TeacherController@index')->name('teacher.dashboard');
    Route::get('/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');
});


Route::prefix('student')->group(function(){
    Route::get('/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'Auth\StudentLoginController@login')->name('student.login.submit');

    Route::get('/register', 'Auth\StudentRegisterController@showRegisterForm')->name('student.register');
    Route::post('/register', 'Auth\StudentRegisterController@create')->name('student.register.submit');

    Route::get('/', 'StudentController@index')->name('student.dashboard');
    Route::get('/logout', 'Auth\StudentLoginController@logout')->name('student.logout');
});