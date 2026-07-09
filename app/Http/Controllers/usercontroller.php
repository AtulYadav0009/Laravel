<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Rules\NoAdminWord;



class usercontroller extends Controller

{
    function userhome()
    {
        $array = ['sudo', 'atul', 'aditya', 'raj'];
        return view('home', ['array' => $array]);
    }

    function userabout()
    {
        return view('about');
    }

    function adminlogin()
    {
        if (View::exists('admin.login')) {
            return view('admin.login');
        } else {
            echo "NO no";
        }
    }

    function submitform(Request $request)
    {
        $request->validate([
           'name' => ['required', new NoAdminWord],
            'email'=>'required',
            'password'=>'required'
        ]);
        return $request;
    }

    function submithardform(Request $request)
    {
         return $request;
    }

    function show(){
        return "Student List";
    }


    function add(){
        return "add new Student";
    }

      function users(){
        $users =  DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
}
