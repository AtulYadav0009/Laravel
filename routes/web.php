<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Psr\Container\NotFoundExceptionInterface;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->middleware('Checkone');


Route::get('user-about', [usercontroller::class, 'userabout']);

Route::get('user-home', [usercontroller::class, 'userhome']);

Route::get('wp-admin', [usercontroller::class, 'adminlogin']);

Route::get('users', [usercontroller::class, 'test']);

Route::get('/form', function () {
    return view('form');
});


Route::post('/submitform', [UserController::class, 'submitform']);

Route::view('/hardform', 'hardform');

Route::post('/submithardform', [UserController::class, 'submithardform']);

Route::view('/homee', 'homee')->middleware('Checkone');

// Route::view('/student/ds','Dashboard')->name('dsb');
// Route::get('student/show' , [UserController::class,'show']);
// Route::get('student/add' , [UserController::class,'add']);

Route::prefix('student/india')->group(function () {
    Route::view('/ds', 'Dashboard')->name('dsb');
    Route::get('/show', [UserController::class, 'show']);
    Route::get('/add', [UserController::class, 'add']);
});

// Route::get('/show', [StudentController::class, 'show']);
// Route::get('/add', [StudentController::class, 'add']);
// Route::get('/delete', [StudentController::class, 'Delete']);

Route::controller(StudentController::class)->group(function () {
    Route::get('/show','show');
    Route::get('/add','add');
    Route::get('/delete','Delete');
    Route::get('about/{name}','about');
});

// Route::get('about/{name}',[StudentController::class,'about']);

Route::get('/std',[StudentController::class,'GetData']);

Route::get('/api',[UserController::class,'GetUserApi']);