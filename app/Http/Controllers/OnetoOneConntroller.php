<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\seller;
use Illuminate\Http\Request;

class OnetoOneConntroller extends Controller
{
    function onetoone()
    {
        $seller = new product();
        return $seller::find(3)->sellerData;
    }

    function onetomany()
    {
        $seller = new seller();
        return $seller::find(2)->productDataMany;
    }

    function manytoone()
    {
        // return "Hello Bhai";
        // $data = Product::all();
        $data = Product::with('seller')->get();
        return $data;
    }
}
