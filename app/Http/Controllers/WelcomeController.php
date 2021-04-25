<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $collections = Collection::all();
        return view('welcome', ['collections' => $collections]);
    }
}
