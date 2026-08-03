<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgController extends Controller
{
    function UploadImg(Request $request)
    {
        // dd($request->file('file'));
        dd($request->file('file')->store('images', 'public'));
        return $request->file('file')->store('images', 'public');
    }
}
