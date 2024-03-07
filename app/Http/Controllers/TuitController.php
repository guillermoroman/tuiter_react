<?php

namespace App\Http\Controllers;

use App\Models\Tuit;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\Response;


class TuitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return Inertia::render('Tuits/Index', [
            //
        ]);
        
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
    public function show(Tuit $tuit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuit $tuit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuit $tuit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuit $tuit)
    {
        //
    }
}
