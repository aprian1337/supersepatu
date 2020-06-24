<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $barang = \App\Barang::where('published', 'Yes')->get();
        return view('home', compact('barang'));
    }


}
