<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');   
});


Route::get('/admin', function () {
    return view('adminlte::page')->name('admin_page');
});

Route::get('/addNewStudentForm', function () {
    return view('add_new_student_form');   
});


// show student form
Route::get('/student', [StudentController::class, 'index'])->name('student');
// add new student
Route::post('/addStudent', [StudentController::class, 'addStudent'])->name('addStudent');
// delete a student
Route::delete('/deleteStudent/{id}', [StudentController::class, 'deleteStudent'])->name('deleteStudent');
// edit student
Route::get('/editStudent/{id}', [StudentController::class, 'editStudent'])->name('editStudent');
// update student
Route::put('/updateStudent/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// API Intergration
Route::get('/posts', [PostController::class, 'index']);

require __DIR__.'/auth.php';
