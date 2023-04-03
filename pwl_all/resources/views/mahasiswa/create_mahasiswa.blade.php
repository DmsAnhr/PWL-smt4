@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-mhs">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hobi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Tambah Mahasiswa</li>
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
                            <form method="POST" action="{{ $url_form }}">
                                @csrf
                                {!! (isset($mhs))? method_field('PUT') : '' !!}
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
                                    <button class="btn btn-sm btn-primary">Simpan</button>
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
