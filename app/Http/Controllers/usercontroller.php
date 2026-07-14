<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HTTP;
use App\Rules\NoAdminWord;
use LDAP\Result;

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
            'email' => 'required',
            'password' => 'required'
        ]);
        $name = $request->password;
        echo $name;
        return $request;
    }

    function submithardform(Request $request)
    {
        return $request;
    }

    function show()
    {
        return "Student List";
    }


    function add()
    {
        return "add new Student";
    }

    function users()
    {
        $users =  DB::select('select * from users');
        return view('users', ['users' => $users]);
    }

    function test()
    {
        return "test";
    }

    function GetUserApi()
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/1");
        $response = $response->body();
        return view('users', ['data' => json_decode($response)]);
    }

    function Query()
    {
        // $result = DB::table('users')->where('id' , '3')->get();
        // return $result;

        $result = DB::table('users')->get();
        return $result;


        // $result = DB::table('users')->insert([
        //     'name'=>'tony',
        //     'email'=>'tony@gmail.com',
        //     'phone'=>'111',
        //     'password'=>'abcd'
        // ]);
        // if($result){
        //     return "Inserted";
        // }
        // else{
        //     return "Not Inserted";
        // }

        // $result = DB::table('users')->where('name', 'Monyy')->update(
        //     [
        //         'name' => 'Monyyy',
        //         'email' => 'mony@gmail.com',
        //         'phone' => '11134567653',
        //         'password' => 'abcdxxxxyyyyyyzzzzzz'
        //     ]
        // );
        // if ($result) {
        //     return "Updated";
        // } else {
        //     return "Not updated";
        // }

        //  $result = DB::table('users')->where('name', 'Monyyy')->delete();
        // return $result;
    }
}
