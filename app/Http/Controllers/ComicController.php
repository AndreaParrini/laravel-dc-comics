<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('comics.admin.index', ['comics' => Comic::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // Validate Data
        $val_data = $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required|min:20|max:1000',
            'thumb' => 'nullable|max:255',
            'price' => 'required',
            'sale_date' => 'required',
            'type' => 'nullable|max:255',
            'series' => 'nullable|max:255'
        ]);

        //dd($val_data);
        //$data = $request->all();

        // Create the resources
        $newComic = Comic::create($val_data);

        return to_route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.admin.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.admin.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $val_data = $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required|min:20|max:1000',
            'thumb' => 'nullable|max:255',
            'price' => 'required',
            'sale_date' => 'required',
            'type' => 'nullable|max:255',
            'series' => 'nullable|max:255'
        ]);

        //dd($val_data);
        $comic->update($val_data);

        return to_route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();

        return to_route('comics.index');
    }
}
