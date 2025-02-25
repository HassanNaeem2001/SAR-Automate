<?php

use Illuminate\Support\Facades\Route;
use App\Models\Role;
use App\Models\Staff;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student',function () {
    return view('StudentViews/dashboard');
});
Route::get('/staffregister',function () {
    $roles = Role::get();
    return view('StaffViews/register',compact('roles'));
});
Route::get('/role',function () {
    return view('StaffViews/rolesadd');
});
Route::get('allroles',function(){
    $roles = Role::all();
    return view('StaffViews.allroles',compact('roles'));
})->name('allroles');
Route::post('/addrole', [StudentController::class,('addrole')])->name('addrole');
Route::post('/addstaff', [StudentController::class,('addstaff')])->name('addstaff');
Route::get('allstaff',function(){
    $staffs = DB::table('staff')
    ->join('roles', 'staff.StaffRole', '=', 'roles.id')
    ->select('staff.*', 'roles.RoleName')
    ->get();
    return view('StaffViews.allstaff',compact('staffs'));
})->name('allstaff');

Route::get('/addstd',function () {
    return view('StudentViews/studentregister');
})->name('addstd');
Route::get('/addbatch',function () {
    return view('StudentViews/batchregister');
})->name('addbatch');
Route::get('/addcoursefamily',function () {
    return view('StudentViews/addcoursefamily');
})->name('addcoursefamily');

Route::post('inscoursefamily',[StudentController::class,('insertcoursefamily')])->name('inscoursefamily');