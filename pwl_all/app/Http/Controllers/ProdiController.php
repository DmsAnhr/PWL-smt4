<?php

namespace App\Http\Controllers;

use App\Models\ProdiModel;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = ProdiModel::all();
        
        return view('prodi.index', compact('prodi'));
    }
}
