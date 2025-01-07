<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'studentRegister'])->name('studentRegister');

Route::get('/login', function (){
    return redirect('/');
});

Route::get('/', [AuthController::class, 'loadLogin']);
Route::post('/login', [AuthController::class, 'userLogin'])->name('userLogin');

Route::get('/logout', [AuthController::class, 'logout']);




// Route::group(['middleware'=>['web','checkAdmin']],function(){
   
// });

// Route::group(['middleware'=>['web','checkStudent']],function(){
    
// });
Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard']);
Route::get('/dashboard', [AuthController::class, 'studentDashboard']);


