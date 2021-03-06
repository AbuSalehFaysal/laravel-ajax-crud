<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
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

Route::get('/students', [StudentController::class, 'index']);

Route::post('/add-student', [StudentController::class, 'addStudent'])->name('student.add');

Route::get('/students/{id}', [StudentController::class, 'getStudentById']);

Route::put('/student', [StudentController::class, 'updateStudent'])->name('student.update');

Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);

Route::delete('/selected-students', [StudentController::class, 'deleteCheckedStudents'])->name('student.deleteSelected');

Route::get('register', [AuthController::class, 'index']);

Route::post('register', [AuthController::class, 'registerSubmit'])->name('register.submit');

Route::get('/post', [PostController::class, 'index']);

Route::get('/chart', [ChartController::class, 'index']);

Route::get('/bar-chart', [ChartController::class, 'barChart']);
