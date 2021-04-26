<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function show($id)
    {
        $collection = Collection::find($id);
        return view('collection.show', ['collection'=>$collection]);
    }
}
