<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admindash.index');
});
Route::get('/add_batch', function () {
    return view('admindash.addbatch');
})->name('AddBatch');
