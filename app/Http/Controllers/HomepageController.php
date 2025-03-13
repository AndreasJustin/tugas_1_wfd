<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Welcome to FoodNesia!';
        $head = 'Home';
        return view('index',[
            'title' => $title,
            'head' => $head
        ]);
    }

    public function about(){
        $title = 'About Us';
        $head = 'About';
        return view('about',[
            'title' => $title,
            'head' => $head
        ]);
    }
    public function catalog()
    {
        $title = 'Catalog';
        $head = 'Catalog';
        return view('catalog',[
            'title' => $title,
            'head' => $head
        ]);
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
