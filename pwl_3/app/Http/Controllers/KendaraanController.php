<?php

namespace App\Http\Controllers;

use App\Models\KendaraanModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){
        $kendaraan = KendaraanModel::all();
        return view('content2/kendaraan')
                -> with('kendaraan',$kendaraan);
    }
}
