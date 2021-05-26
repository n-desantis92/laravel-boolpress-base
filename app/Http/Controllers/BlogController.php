<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // prendo i dati dal db
        return view('guest.index');
    }
}
