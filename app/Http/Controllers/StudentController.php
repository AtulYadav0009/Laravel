<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Studentmodel;
use \App\Models\User;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    function show()
    {
        return "List Of Students";
    }
    function add()
    {
        return "Add Student";
    }
    function delete()
    {
        return "Delete Student";
    }

    function about($name)
    {
        return $name;
    }

    function GetData()
    {
        $student  = \App\Models\Studentmodel::all();
        return view('studentmodel', ['Dtaaa' => $student]);
    }

    function query()
    {
        $response = Studentmodel::all();
        return $response;
    }

    function any()
    {
        return "This  is Any Function";
    }

    function form()
    {
        return "This  is Any Function";
    }

    function student()
    {
        return Studentmodel::all();
    }

    function add2(Request $req)
    {
        return $req->input();
    }

    function AddStudent(Request $req)
    {
        $rule = array(
            'name' => 'required | min:5 | max:10',
            'email' => 'required | email',
            'phone' => 'required'
        );
        $validation = Validator::make($req->all(), $rule);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Studentmodel;
            $student->name = $req->name;
            $student->email = $req->email;
            $student->phone = $req->phone;

            if ($student->save()) {
                return ['result' => 'Success'];
            } else {
                return ['result' => 'Failed'];
            }
        }
    }

    function UpdateStudent(Request $req)
    {
        $student = Studentmodel::find($req->id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;

        if ($student->save()) {
            return ['result' => 'Success'];
        } else {
            return ['result' => 'Failed'];
        }
    }



    function DeleteStudent($id)
    {
        // return $id;
        $student = Studentmodel::destroy($id);

        if ($student) {
            return ["result" => "Data Deleted"];
        } else
            return ["result" => "Data Not  Deleted"];
    }

    function Search($name)
    {
        $student = Studentmodel::where('name', 'like', "%$name%")->get();

        return $student;
    }
}
