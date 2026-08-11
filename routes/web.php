<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StdFormDBController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OnetoOneConntroller;
use Illuminate\Support\Facades\Route;
use Psr\Container\NotFoundExceptionInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


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
    // Route::get('/delete', 'Delete');
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

Route::get('language/{lang}', function ($lang) {
    Session::put('lang', $lang);

    return redirect('about');
});


Route::middleware('lang')->group(function () {
    Route::get('/about', function () {

        return view('about');
    });
});

Route::view('StdFormDB', 'StdFormDB');

Route::POST('StdFormDB', [StdFormDBController::class, 'StdFormDB']);

Route::get('list', [StdFormDBController::class, 'listfunction']);
Route::get('delete/{id}', [StdFormDBController::class, 'delete']);
Route::get('edit/{id}', [StdFormDBController::class, 'edit']);

Route::put('updatedata/{id}', [StdFormDBController::class, 'updatedata']);

Route::get('search', [StdFormDBController::class, 'search']);

Route::post('MultiDelete', [StdFormDBController::class, 'MultiDelete']);

Route::view('upload', 'upload');

Route::POST('UploadImg', [ImgController::class, 'UploadImg']);

Route::get('imgdisplay', [ImgController::class, 'ShowImg']);

Route::view('home1', 'home1');

Route::view('about1', 'about1');

Route::view('home2', 'home2');

Route::view('login2', 'login2');

Route::get('smalllatter', [ImgController::class, 'smalllatter']);

Route::get('save2', [ImgController::class, 'save2']);

Route::get('onetoone', [OnetoOneConntroller::class, 'onetoone']);

Route::get('onetomany', [OnetoOneConntroller::class, 'onetomany']);

Route::get('manytoone', [OnetoOneConntroller::class, 'manytoone']);


Route::get('mail', [MailController::class, 'sendmail']);

Route::POST('formmail', [MailController::class, 'formmail']);
Route::view('formmail', 'formMail');

Route::get('fluentstr', function () {
    $strtest = "i am sudo ji";
    //    $strtest = Str::ucfirst(trim($strtest));
    //    $strtest = Str::camel(trim($strtest));

    $strtest = Str::of($strtest)->ucfirst($strtest)->camel(trim($strtest));

    echo  $strtest;
});

Route::get('routemodelbinding/{key:name}', [MailController::class, 'routemodelbinding']);

Route::get('inlineblade', [MailController::class, 'inlineblade']);

