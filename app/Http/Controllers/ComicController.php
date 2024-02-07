<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('guest.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>['required','unique:comics', 'min:6','max:200'],
            'description' => ['required', 'min:4', 'max:255'],
            'price' => ['required', 'min:1', 'max:50'],
            'series' => ['required', 'min:1', 'max:80'],
            'type' => ['required', 'min:1', 'max:40'],
            'sale_date' => ['required'],
            'thumb' => ['required', 'min:4', 'url:http,https'],
        ], [
            'title.required' => 'Non va bene, inserisci un titolo'
        ]);

        $data = $request->all();

        // $newComic = new Comic();
        // $newComic->title = $newComicData['title'];
        // $newComic->description = $newComicData['description'];
        // $newComic->thumb = $newComicData['thumb'];
        // $newComic->price = $newComicData['price'];
        // $newComic->series = $newComicData['series'];
        // $newComic->sale_date = $newComicData['sale_date'];
        // $newComic->type = $newComicData['type'];
        // $newComic->save();

        $newComic = Comic::create($data);
        return redirect()->route('comics.show', $newComic->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);

        // dd($request->all(), $id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
