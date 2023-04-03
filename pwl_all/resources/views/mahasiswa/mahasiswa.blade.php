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
                        <li class="breadcrumb-item active">Mahasiswa</li>
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
                            <a href="{{url ('mahasiswa/create')}}" class="btn btn-success btn-sm">
                                Tambah Data
                            </a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>No Hp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($mhs -> count() > 0)
                                        @foreach ( $mhs as $i => $m )
                                            <tr>
                                                <td>{{$i + 1}}</td>
                                                <td>{{$m -> nim}}</td>
                                                <td>{{$m -> nama}}</td>
                                                <td>{{$m -> jk}}</td>
                                                <td>{{$m -> no_telp}}</td>
                                                <td style="display:flex;">
                                                    <a href={{url('/mahasiswa/'.$m->id. '/edit')}} class="btn btn-warning btn-xs">
                                                        Ubah
                                                    </a>

                                                    <form method="POST" action="{{ url('/mahasiswa/'.$m->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" style="text-align:center;">Belum Ada Data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
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
