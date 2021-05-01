<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $password = $request->get('password');
        if ($password === env('ADMIN_KEY')) {
            $request->session()->put('admin_key', $password);
            return redirect(route('collection.index'));
        }
        return redirect()->back()->with('error', 'Invalid password!');
    }
}
