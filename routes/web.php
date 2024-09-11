<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'user'], function(){
    Route::get('/',['uses' => 'HomeController@home','as' => 'home']);
    Route::get('/dashboard',['uses' => 'HomeController@home','as' => 'home']);
    Route::get('/add-file',['uses' => 'FileDetailController@addFile','as' => 'addFile']);
    Route::get('/file-listing',['uses' => 'FileDetailController@filesList','as' => 'filesList']);
    Route::get('/employee-listing',['uses' => 'FileDetailController@employeeList','as' => 'filesList']);
    Route::get('/employee_details',['uses' => 'FileDetailController@employee_details','as' => 'employee_details']);
    Route::get('/add-employee',['uses' => 'FileDetailController@addEmployee','as' => 'addEmployee']);
    Route::post('/add-employee',['uses' => 'FileDetailController@addEmployee','as' => 'addEmployee']);
    Route::get('/file_permission_print/{id}',['uses' => 'FileDetailController@file_permission_print','as' => 'file_permission_print']);

    Route::get('/Categories',['uses' => 'CategoryController@index','as' => 'addEmployee']);
    Route::get('/add-Category',['uses' => 'CategoryController@create','as' => 'addEmployee']);
    Route::post('/add-Category',['uses' => 'CategoryController@store','as' => 'addCategory']);

    Route::get('/add-employee/{file_id}',['uses' => 'FileDetailController@addEmployee','as' => 'addEmployee']);
    Route::get('/file-details/{file_id}',['uses' => 'FileDetailController@fileDetails','as' => 'fileDetails']);
    Route::get('/update-file-status/{file_id}/{status_id}',['uses' => 'FileDetailController@updatefileStatus','as' => 'updatefileStatus']);
    Route::get('/employee-details/{employee_id}',['uses' => 'FileDetailController@employeeDetails','as' => 'employeeDetails']);
    Route::get('/logout',['uses' => 'LoginController@logout','as' => 'logout']);
});
Route::get('/signin',['uses' => 'LoginController@signin','as' => 'signin']);
Route::post('/signin',['uses' => 'LoginController@signin','as' => 'signin']);


Route::get('forms/{name}', function ($name) {
    return view('Bashir_Forms/'.$name);
});

// Route::get('/{name}', function ($name) {
//     return view('frontend/file.'.$name);
// });


