<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::resource('students', StudentController::class);
Route::get('/students/{student}/print', [StudentController::class, 'print'])->name('students.print');
Route::get('/students-export', [StudentController::class, 'export'])->name('students.export');
Route::post('/students/store-step', [StudentController::class, 'storeStep'])->name('students.store-step');
Route::get('/generate-student-id', [StudentController::class, 'generateStudentId'])->name('students.generate-id');
Route::get('/student-id-stream', [StudentController::class, 'studentIdStream'])->name('students.id-stream');
Route::get('/test-realtime', function () {
    return view('test-realtime');
})->name('test.realtime');

Route::get('/documentation', function () {
    return view('documentation');
})->name('documentation');
