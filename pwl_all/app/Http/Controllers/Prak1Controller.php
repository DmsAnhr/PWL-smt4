<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prak1Controller extends Controller
{
    public function home()
    {
        return view('content/home');
    }
    public function about()
    {
        return view('content/about-us');
    }
    // public function program()
    // {
    //     return view('content/program');
    // }
    // public function product()
    // {
    //     return view('content/product');
    // }
    public function news()
    {
        return view('content/news')
        ->with('news', 'Ini hasil dari parameter data dari controller');
    }
    public function contact()
    {
        return view('content/contact-us');
    }
}
