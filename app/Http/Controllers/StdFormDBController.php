<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdformdb;

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
            echo "Add HUa";
        } else {
            echo "Nhi hua ";
        }
    }
}
