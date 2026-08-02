<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdformdb;
use Illuminate\Support\Facades\Redirect;

class StdFormDBController extends Controller
{
    function StdFormDB(Request $request)
    {
        $student = new stdformdb;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $student->save();
        if ($student) {
            return Redirect('list');
        } else {
            echo "Nhi hua ";
        }
    }

    function listfunction()
    {
        $stddata = StdFormDB::all();

        return view('list-std', ['students' => $stddata]);
    }

    function delete($id)
    {
        $IsDeleted = StdFormDB::destroy($id);

        if ($IsDeleted) {
            return Redirect('list');
        }
    }

    function edit($id)
    {
        $StdData = StdFormDB::find($id);
        return view('editor', ['data' => $StdData]);
    }
}
