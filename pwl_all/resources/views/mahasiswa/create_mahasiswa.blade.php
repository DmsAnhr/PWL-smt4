@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-mhs">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahasiswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('mahasiswa.update', $mhs->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                {!! (isset($mhs))? method_field('PUT') : '' !!}
                                @if (isset($mhs) && $mhs->foto)
                                    <div class="form-group">
                                        <label>Foto Saat Ini</label>
                                        <br>
                                        <img src="{{ asset('storage/'.$mhs->foto) }}" alt="Foto Mahasiswa" width="100">
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" required="required" name="foto" value="{{ isset($mhs)? $mhs->foto : old('foto') }}"/>
                                    @error('foto')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nim</label>
                                    <input class="form-control @error('nim') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->nim : old('nim') }}" name="nim" type="text" />
                                    @error('nim')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->nama : old('nama') }}" name="nama" type="text" />
                                    @error('nama')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label>Kode Prodi</label>
                                    <input class="form-control @error('prodi_id') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->prodi_id : old('prodi_id') }}" name="prodi_id" type="text" />
                                    @error('prodi_id')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label>Prodi</label>
                                    <select name="prodi_id" class="form-control">
                                        <option value="null" selected disabled>Silahkan Pilih</option>
                                        @foreach ($prodi as $p)
                                            <option value="{{ $p->id }}" 
                                                @if(isset($mhs))
                                                    @if($mhs->prodi_id == $p->id)
                                                        selected
                                                    @endif
                                                @endif>{{ $p->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('prodi_id')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input class="form-control @error('jk') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->jk : old('jk') }}" name="jk" type="text" />
                                    @error('jk')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tempat lahir</label>
                                    <input class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir" type="text" />
                                    @error('tempat_lahir')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir" type="date" />
                                    @error('tanggal_lahir')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input class="form-control @error('no_telp') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->no_telp : old('no_telp') }}" name="no_telp" type="text" />
                                    @error('no_telp')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>alamat</label>
                                    <input class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ isset($mhs)? $mhs->alamat : old('alamat') }}" name="alamat" type="text" />
                                    @error('alamat')
                                        <span class="error invalid-feedback">{{ $message }} </span>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
