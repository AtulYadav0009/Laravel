<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function Signup(Request $req){
        $input = $req->all();
        $input['password'] = bcrypt( $input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MYWEBAPP')->plainTextToken;
        $user['name']= $user->name;
        return ['success'=>true , 'result'=>$success , 'msg'=> 'User Register Successfully'];
    }
}
