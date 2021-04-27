<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        return view('collection.index', ['collections'=>Collection::all()]);
    }

    public function show($id)
    {
        return view('collection.show', ['collection'=>Collection::find($id)]);
    }
}
