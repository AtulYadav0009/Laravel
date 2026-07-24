<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Psr\Container\NotFoundExceptionInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/about/{lan?}/{name}', function ($lan,$name) {
//     App::setLocale($lan);
//     return view('about' , compact('name'));
// });

Route::get('/about', function () {

    return view('about');
});

Route::get('user-about', [usercontroller::class, 'userabout']);

Route::get('user-home', [usercontroller::class, 'userhome']);

Route::get('wp-admin', [usercontroller::class, 'adminlogin']);

Route::get('users', [StudentController::class, 'query']);

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
    Route::get('/show', 'show');
    Route::get('/add', 'add');
    Route::get('/delete', 'Delete');
    Route::get('about/{name}', 'about');
});

// Route::get('about/{name}',[StudentController::class,'about']);

Route::get('/std', [StudentController::class, 'GetData']);

Route::get('/api', [UserController::class, 'GetUserApi']);

Route::get('/Query', [UserController::class, 'Query']);

Route::get('/any', [StudentController::class, 'any']);

Route::view('login', 'login');

Route::view('profile', 'profile');

Route::post('loginsubmit', [UserController::class, 'loginsubmit']);

Route::view('files', 'file');

Route::post('files', [UserController::class, 'files']);

// Route::get('language/{lang}', function ($lang) {
//     Session::put('lang',$lang);

//     return redirect('about');

// });


Route::middleware('lang')->group(function () {
    Route::get('/about', function () {

        return view('about');
    });
});
