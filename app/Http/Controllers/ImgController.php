<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Redirect;

class ImgController extends Controller
{
    function UploadImg(Request $request)
    {
        // dd($request->file('file'));
        $path = $request->file('file')->store('images', 'public');
        $arraypath = explode('/', $path);
        $ImgPath = $arraypath[1];

        $img = new Image();
        $img->path = $ImgPath;

        if ($img->save()) {
            return Redirect('imgdisplay');
        }
    }

    function ShowImg(Request $request)
    {
        $img = new Image();
        $images = $img->all();
        return view('ImgDisplay', ['images' => $images]);
    }
}
