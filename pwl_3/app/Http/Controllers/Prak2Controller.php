<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prak2Controller extends Controller
{
    public function welcome()
    {
        return view('content2/welcome');
    }

    public function profile(){
        return view('content2/profile')
        ->with('name', 'Dimas Anhar')
        ->with('work', 'Student & Frontend Dev')
        ->with('college', 'D-IV Teknik Informatika Politeknik Negeri Malang')
        ->with('location', 'Malang, Indonesia')
        ->with('skill', 'UI Design Coding Html Css Javascript Sass')
        ->with('note', 'Saya sekarang sedang menimpa ilmu D-IV TI Polinema dan juga Frontend Dev Di Kawan Kreatif');
    }

    public function experience()
    {
        return view('content2/experience');
    }
}
