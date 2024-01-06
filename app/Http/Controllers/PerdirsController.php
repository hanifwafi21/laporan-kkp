<?php

namespace App\Http\Controllers;

use App\Models\perdirs;
use Illuminate\Http\Request;

class PerdirsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perdirs = perdirs::all();
        return view('homepage.perdir', compact('perdirs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(perdirs $perdirs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(perdirs $perdirs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, perdirs $perdirs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(perdirs $perdirs)
    {
        //
    }
}
