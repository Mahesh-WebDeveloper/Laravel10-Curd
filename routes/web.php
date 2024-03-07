<?php

use App\Http\Controllers\getdatac;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\TestinController;


// Route::get('/user/{id}', [Users::class, 'userfun']);

// Route::get('/', function () {
//     return view ('welcome');
// });

// Route::get('/testcon',TestinController::class);

Route::get('/',[getdatac::class,'showdata'])->name('welcome');

Route::post('/ins',[getdatac::class,'insertdata'])->name('insert.data');

Route::get('/update',[getdatac::class,'updatedata']);
Route::view('form','/form')->name('f');



Route::get('/del/{id}',[getdatac::class,'delete'])->name('delete.data');

Route::get('/oneview/{id}',[getdatac::class,'onedata'])->name('oneview.data');



Route::get('/update/{id}',[getdatac::class,'updateget'])->name('update.data');

Route::post('/updatefun/{id}',[getdatac::class,'updatedsubmit'])->name('upsub.data');