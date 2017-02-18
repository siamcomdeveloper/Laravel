<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        return view('site.index');
    }
    function about()
    {
        return view('about');
    }
}
