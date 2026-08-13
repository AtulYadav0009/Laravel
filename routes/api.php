<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function () {
    return ['name'=>'aditya', 'email'=>'atul@gmail.com'];
});

Route::get('student',[StudentController::class , 'student']);

Route::post('add',[StudentController::class , 'add2']);

Route::post('AddStudent',[StudentController::class , 'AddStudent']);

Route::put('UpdateStudent',[StudentController::class , 'UpdateStudent']);

Route::delete('DeleteStudent/{id}',[StudentController::class , 'DeleteStudent']);


