<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;


Route::get('/',[PageController::class,'index']);

// class
Route::get('/classes', [ClassController::class, 'index']);

Route::get('/create-class', function () {
   return view('createclass');
});

Route::post('/class-create', [ClassController::class, 'create']);

Route::get('/class-delete/{id}', [ClassController::class, 'delete']);

Route::get('/class-view/{id}', [ClassController::class, 'view']);

Route::get('/class-retrieve/{id}', [ClassController::class, 'retrieve']);

Route::put('/class-update/{id}', [ClassController::class, 'update'])->name('class.update');


// student
Route::get('/students', [StudentController::class, 'index']);

// Route::get('/create-student', function () {
//    return view('createstudent');
// });

Route::get('/create-student',[StudentController::class, 'extract']);

Route::post('/student-create', [StudentController::class, 'create']);

Route::get('/student-delete/{id}', [StudentController::class, 'delete']);

Route::get('/student-view/{id}', [StudentController::class, 'view']);

Route::get('/student-retrieve/{id}', [StudentController::class, 'retrieve']);

Route::put('/student-update/{id}', [StudentController::class, 'update'])->name('student.update');

Route::post('/students/{id}/add-subject', [StudentController::class, 'addSubject']);

Route::post('/students/{id}/remove-subject', [StudentController::class, 'removeSubject']);



// subjects

Route::get('/subjects', [SubjectController::class, 'index']);

Route::get('/create-subject', function () {
   return view('createsubject');
});

Route::post('/subject-create', [SubjectController::class, 'create']);

Route::get('/subject-delete/{id}', [SubjectController::class, 'delete']);

Route::get('/subject-view/{id}', [SubjectController::class, 'view']);

Route::get('/subject-retrieve/{id}', [SubjectController::class, 'retrieve']);

Route::put('/subject-update/{id}', [SubjectController::class, 'update'])->name('subject.update');


//sports

Route::get('/sports', [SportsController::class, 'index']);