<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil user yang login
        $user = Auth::user();

        return view('dashboard', compact('user'));
    }
}
