@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-keluarga">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Keluarga</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Keluarga</li>
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
                    <div class="card card-solid">
                        <div class="card-body pb-0">
                            <div class="row">
                                @foreach ($keluarga as $i => $k)
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                        <div class="card bg-dark d-flex flex-fill">
                                            <div class="card-header text-muted border-bottom-0">
                                                {{ $k->hubungan }}
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="lead"><b>{{ $k->nama }}</b></h2>
                                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                                            <li class="small"><span class="fa-li"><i
                                                                        class="fa fa-calendar"
                                                                        aria-hidden="true"></i></span> Tanggal Lahir :
                                                                {{ $k->tanggalLahir }}</li>
                                                            <li class="small"><span class="fa-li"><i class="fa fa-info"
                                                                        aria-hidden="true"></i></span> Agama :
                                                                {{ $k->agama }}</li>
                                                            <li class="small"><span class="fa-li"><i
                                                                        class="fa fa-id-badge"
                                                                        aria-hidden="true"></i></span> Gelar :
                                                                {{ $k->gelar }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        @if ($k->hubungan === 'Ayah')
                                                            <img src="../../dist/img/user2-160x160.jpg" alt="user-avatar"
                                                                class="img-circle img-fluid">
                                                        @elseif($k->hubungan === 'Ibu')
                                                            <img src="../../dist/img/user4-128x128.jpg" alt="user-avatar"
                                                                class="img-circle img-fluid">
                                                        @else
                                                            <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar"
                                                                class="img-circle img-fluid">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
