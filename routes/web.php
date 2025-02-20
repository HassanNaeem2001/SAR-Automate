<?php

use Illuminate\Support\Facades\Route;
use App\Models\Role;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/student',function () {
    return view('StudentViews/dashboard');
});
Route::get('/staffregister',function () {
    return view('StaffViews/register');
});
Route::get('/role',function () {
    return view('StaffViews/rolesadd');
});
Route::get('allroles',function(){
    $roles = Role::all();
    return view('StaffViews.allroles',compact('roles'));
})->name('allroles');
Route::post('/addrole', [StudentController::class,('addrole')])->name('addrole');