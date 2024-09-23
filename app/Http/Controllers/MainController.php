<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('index');
    }

    public function about()
    {
        return view ('main.about');
    }

    public function acquisition()
    {
        return view ('main.acquisition');
    }

    public function aerial()
    {
        return view ('main.aerial');
    }

    public function cargo()
    {
        return view ('main.cargo');
    }

    public function charter()
    {
        return view ('main.charter');
    }

    public function contact()
    {
        return view ('main.contact');
    }

    public function blog()
    {
        return view ('main.blog');
    }

    public function fleet()
    {
        return view ('main.fleet');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
