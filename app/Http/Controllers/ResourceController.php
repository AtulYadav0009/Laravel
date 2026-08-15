<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Studentmodel;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sudo Su
       return Studentmodel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Sudo Su
         return [ 'result' => 'Create  Success'];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Sudo Su
        return [ 'result' => 'Store Success'];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Sudo Su
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Sudo Su
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Sudo Su
         return [ 'result' => 'Update Success'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Sudo Su
    }
}
