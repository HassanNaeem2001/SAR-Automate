<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admindash.index');
});
Route::get('/add_batch', function () {
    return view('admindash.addbatch');
})->name('AddBatch');
Route::get('/add_student', function () {
    return view('admindash.addstudent');
})->name('AddStudent');
Route::post('/insert_batch',[AdminController::class,('insert_batch')])->name('batchinsert');
Route::post('/insert_student',[AdminController::class,('insert_student')])->name('studentinsert');