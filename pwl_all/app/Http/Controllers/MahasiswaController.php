<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\ProdiModel;
use App\Models\HobiModel;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa')
        ->with('prodi', ProdiModel::all());
    }

    public function getMahasiswa(Request $request)
    {
        if ($request->ajax()) {
            $mahasiswas = MahasiswaModel::select(['id', 'prodi_id', 'nim', 'nama', 'jk', 'tempat_lahir', 'foto','tanggal_lahir', 'alamat', 'no_telp'])
                ->with('prodi');
                // ->get();

            return DataTables::of($mahasiswas)
                ->addColumn('prodi', function($mahasiswa) {
                    return optional($mahasiswa->prodi)->nama;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return abort(403);
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
    public function store_old(Request $request)
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
        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    public function store(Request $request)
    {
        if ($request->file('foto')) {
            $gambarPath = $request->file('foto')->store('images', 'public');
        }

        $mhs = new MahasiswaModel;
        $mhs->nama = $request->nama;
        $mhs->prodi_id = $request->prodi_id;
        $mhs->nim = $request->nim;
        $mhs->jk = $request->jk;
        $mhs->tempat_lahir = $request->tempat_lahir;
        $mhs->tanggal_lahir = $request->tanggal_lahir;
        $mhs->alamat = $request->alamat;
        $mhs->no_telp = $request->no_telp;
        $mhs->foto = $gambarPath;
        $mhs->save();

        return response()->json(['status' => true, 'message' => 'Berhasil Menambahkan data Mahasiswa.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */

    public function show_old($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $id)->get();
        return view('mahasiswa.nilai', compact('mahasiswa', 'nilai'));
    }

    public function show($id)
    {
        $mahasiswa = MahasiswaModel::findOrFail($id);
        $nilai = Mahasiswa_MataKuliah::with('matakuliah')->where('mahasiswa_id', $id)->get();
        $prodi = ProdiModel::where('id', $mahasiswa->prodi_id)->value('nama');
        return response()->json([
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
            'nilai' => $nilai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::findOrFail($id);
        $prodi = ProdiModel::all();
        return response()->json([
            'status' => true,
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi
        ]);
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
            if ($mahasiswa->foto) {
                Storage::disk('public')->delete($mahasiswa->foto);
            }
    
            // Menyimpan foto baru
            $foto_name = $request->file('foto')->store('images', 'public');
            $mahasiswa->foto = $foto_name;
        }

        $data = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        return response()->json(['status' => true, 'message' => 'Data mahasiswa berhasil diperbarui.']);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = MahasiswaModel::findOrFail($id);
        $fotoPath = public_path('public/storage/images') . '/' . $mhs->foto;
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }
        Storage::delete($mhs->foto);
        $mhs->delete();

        // if ($request->ajax()) {
        // }
        return response()->json(['message' => 'Data Mahasiswa berhasil dihapus']);
    }
}
