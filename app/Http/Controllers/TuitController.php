<?php

namespace App\Http\Controllers;

use App\Models\Tuit;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;


class TuitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return Inertia::render('Tuits/Index', [
            //
            'tuits' => Tuit::with('user:id,name')->latest()->get(),
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->tuits()->create($validated);

        return redirect(route('tuits.index'));
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
    public function update(Request $request, Tuit $tuit): RedirectResponse
    {
        $this->authorize('update', $tuit);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $tuit->update($validated);
 
        return redirect(route('tuits.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuit $tuit): RedirectResponse
    {
        $this->authorize('delete', $tuit);
 
        $tuit->delete();
 
        return redirect(route('tuits.index'));
    }
}
