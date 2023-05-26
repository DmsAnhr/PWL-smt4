<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\ProdiModel;
use App\Models\HobiModel;
use Illuminate\Support\Facades\Storage;
use PDF;
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

    public function cetak_pdf($id){
        $mahasiswa = MahasiswaModel::find($id);
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $id)->get();
        $pdf = PDF::loadview('mahasiswa.nilai_pdf', ['mahasiswa'=>$mahasiswa, 'nilai' => $nilai]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create_mahasiswa')
            ->with('prodi', ProdiModel::all())
            ->with('hobi', HobiModel::all())
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
            'no_telp' => 'required|digits_between:6,15',
            'foto' => 'required|image|mimes:jpeg,png,jpg|dimensions:max_width=100,max_height=100',
        ]);

        if ($request->file('foto')) {
            $image_name = $request->file('foto')->store('images', 'public');
        }

        $data = MahasiswaModel::create($request->except(['_token']));
        $data->foto = $image_name;
        $data->save();
        return redirect('mahasiswa')
        ->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $id)->get();
        return view('mahasiswa.nilai', compact('mahasiswa', 'nilai'));
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
            ->with('prodi', ProdiModel::all())
            ->with('url_form', url('/mahasiswa/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nim' => 'required|unique:mahasiswa,nim,'.$id,
    //         'nama' => 'required',
    //         'jk' => 'required|in:l,p,L,P',
    //         'tempat_lahir' => 'required',
    //         'tanggal_lahir' => 'required|date',
    //         'alamat' => 'required',
    //         'no_telp' => 'required|digits_between:6,15',
    //         'foto' => 'nullable|image|mimes:jpeg,png,jpg|dimensions:max_width=100,max_height=100',
    //     ]);
    //     $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
    //     return redirect('mahasiswa')
    //     ->with('success', 'Data berhasil dirubah');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,' . $id,
            'nama' => 'required',
            'jk' => 'required|in:l,p,L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|digits_between:6,15',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $mahasiswa = MahasiswaModel::findOrFail($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jk = $request->jk;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->no_telp = $request->no_telp;
        
        if ($request->hasFile('foto')) {
            // Menghapus foto lama jika ada
            if ($mahasiswa->foto) {
                Storage::disk('public')->delete($mahasiswa->foto);
            }
    
            // Menyimpan foto baru
            $foto_name = $request->file('foto')->store('images', 'public');
            $mahasiswa->foto = $foto_name;
        }

        $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        return redirect('mahasiswa')->with('success', 'Data berhasil diubah');

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
