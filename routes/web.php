<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admindash.index');
});
// Route::get('/add_batch', function () {
//     return view('admindash.addbatch');
// })->name('AddBatch');
// Route::get('/add_student', function () {
//     return view('admindash.addstudent');
// })->name('AddStudent');
Route::get('/add_batch',[AdminController::class,('getfaculties')])->name('AddBatch');
Route::get('/add_student',[AdminController::class,('getbatch')])->name('AddStudent');
Route::post('/insert_student',[AdminController::class,('addstudent')])->name('InsertStudent');
Route::post('/insert_batch',[AdminController::class,('insert_batch')])->name('batchinsert');
Route::get('/get_students',[AdminController::class,('get_students')])->name('ViewStudents');
Route::get('/add_faculty',function(){
    return View('admindash.addfaculty');
})->name('AddFaculty');
Route::post('/insert_faculty',[AdminController::class,('insert_faculty')])->name('InsertFaculties');
