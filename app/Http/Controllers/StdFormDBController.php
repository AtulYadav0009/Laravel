<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdformdb;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\String\TruncateMode;

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
        // return $StdData;
        return view('editor', ['data' => $StdData]);
    }

    function updatedata(Request $request, $id)
    {
        // return $request;
        $StdData = StdFormDB::find($id);
        // return $StdData;
        $StdData->name = $request->name;
        $StdData->email = $request->email;
        $StdData->phone = $request->phone;

        if ($StdData->save()) {
            return redirect('list');
        } else {
            return "Problum";
        }
    }

    function search(Request $request)
    {
        // return $request->search;
        $searchdata = StdFormDB::where('name', 'like', "%$request->search%")->get();
        // return $searchdata;
        return view('list-std', ['students' => $searchdata, 'search' =>$request->search]);
    }

    function MultiDelete(Request $request){
        // return $request->ids;
        $IsMultiDeleted =  StdFormDB::destroy( $request->ids);
        if($IsMultiDeleted){
           return redirect('list');
        }
        else{
            echo "NO Deleted Multiple";
        }
    }
}
