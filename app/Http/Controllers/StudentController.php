<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Studentmodel;
use \App\Models\User;


class StudentController extends Controller
{
    function show(){
        return "List Of Students";
    }
    function add(){
        return "Add Student";
    }
    function delete(){
        return "Delete Student";
    }

     function about($name){
        return $name;
    }

    function GetData(){
        $student  = \App\Models\Studentmodel::all();
        return view('studentmodel',['Dtaaa' => $student]);
    }

    function query(){
        $response = Studentmodel::all();
        return $response;
    }

    function any(){
        return "This  is Any Function";
    }

     function form(){
        return "This  is Any Function";
    }
}
