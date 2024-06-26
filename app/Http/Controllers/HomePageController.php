<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function about()
    {
        return view ('about');
    }

    public function vision()
    {
        return view('vision');
    }

    public function history()
    {
        return view ('history');
    }
}