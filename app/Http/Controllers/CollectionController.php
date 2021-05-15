<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Database\Factories\CollectionFactory;
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

    public function add()
    {
        $collection = new Collection([
            'title'=>'New collection',
            'subtitle'=>'',
            'description'=>'']);
        $collection->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        return view('collection.edit', ['collection'=>Collection::find($id)]);
    }

    public function delete($id)
    {
        Collection::destroy($id);
        return redirect()->back();
    }
}
