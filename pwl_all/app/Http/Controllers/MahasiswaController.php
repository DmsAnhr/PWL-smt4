<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::all();
        return view('mahasiswa/mahasiswa')
                -> with('mhs',$mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create_mahasiswa')
            ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required',
            'jk' => 'required|in:l,p,L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|digits_between:6,15'
        ]);
        $data = MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswa')
        ->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs',$mahasiswa)
            ->with('url_form', url('/mahasiswa/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,'.$id,
            'nama' => 'required',
            'jk' => 'required|in:l,p,L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|digits_between:6,15'
        ]);
        $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('mahasiswa')
        ->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect ('mahasiswa')
            ->with('success', 'Data berhasil dihapus');
    }
}
