@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-kendaraan">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kendaraan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Kendaraan</li>
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

                    <!-- Profile Image -->
                    <div class="card card-primary">
                        <table class="table">
                            <th>no</th>
                            <th>Nopol</th>
                            <th>Merk</th>
                            <th>Nama Kendaraan</th>
                            <th>Tahun Buat</th>
                            <th>Warna</th>
                            @foreach ($kendaraan as $i => $k)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $k->nopol }}</td>
                                <td>{{ $k->merk }}</td>
                                <td>{{ $k->jenis }}</td>
                                <td>{{ $k->tahun_buat }}</td>
                                <td>{{ $k->warna }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
