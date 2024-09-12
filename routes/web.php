<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'user'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/dashboard', [HomeController::class, 'home'])->name('home');
    Route::get('/add-file', [FileDetailController::class, 'addFile'])->name('addFile');
    Route::get('/file-listing', [FileDetailController::class, 'filesList'])->name('filesList');
    Route::get('/employee-listing', [FileDetailController::class, 'employeeList'])->name('employeeList');
    Route::get('/employee_details', [FileDetailController::class, 'employee_details'])->name('employee_details');
    Route::get('/add-employee', [FileDetailController::class, 'addEmployee'])->name('addEmployee');
    Route::post('/add-employee', [FileDetailController::class, 'addEmployee'])->name('addEmployee');
    Route::get('/file_permission_print/{id}', [FileDetailController::class, 'file_permission_print'])->name('file_permission_print');

    Route::get('/Categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/add-Category', [CategoryController::class, 'create'])->name('addCategory');
    Route::post('/add-Category', [CategoryController::class, 'store'])->name('storeCategory');

    Route::get('/add-employee/{file_id}', [FileDetailController::class, 'addEmployee'])->name('addEmployeeWithFileId');
    Route::get('/file-details/{file_id}', [FileDetailController::class, 'fileDetails'])->name('fileDetails');
    Route::get('/update-file-status/{file_id}/{status_id}', [FileDetailController::class, 'updatefileStatus'])->name('updatefileStatus');
    Route::get('/employee-details/{employee_id}', [FileDetailController::class, 'employeeDetails'])->name('employeeDetails');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/signin', [LoginController::class, 'signin'])->name('signin');
Route::post('/signin', [LoginController::class, 'signin'])->name('signin');

Route::get('forms/{name}', function ($name) {
    return view('Bashir_Forms/' . $name);
});

// Route::get('/{name}', function ($name) {
//     return view('frontend/file.' . $name);
// });
