<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_MataKuliah;
use Illuminate\Http\Request;

class MahasiswaMatKulController extends Controller
{
    public function index()
    {
        $data = Mahasiswa_MataKuliah::all();
        return view('mahasiswa-matakuliah.index', compact('data'));
    }
}
