<?php

// App/Http/Controllers/ComicController.php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    
    public function create()
    {
        return view('comics.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic);
    }

   
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
}
