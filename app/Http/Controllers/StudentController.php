<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
