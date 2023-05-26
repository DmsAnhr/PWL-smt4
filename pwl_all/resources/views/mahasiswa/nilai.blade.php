@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-mhs">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nilai Mahasiwa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Nilai</li>
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
                            <h5>Nama : {{ $mahasiswa->nama }}</h5>
                            <h5>Nim : {{ $mahasiswa->nim }}</h5>
                            <h5>Prodi : {{ $mahasiswa->prodi->nama }}</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>Nilai</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilai as $item)
                                    <tr>
                                        <td>{{ $item->matakuliah->nama }}</td>
                                        <td>4</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>
                                            @if ($item->nilai > 88)
                                                A
                                            @else
                                                B
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
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
