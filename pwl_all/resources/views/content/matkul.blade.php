@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-matkul">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Matkul</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Matkul</li>
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
                <div class="col-12 bg-dark">
                    <div class="row">
                        <div class="col-1">
                            <div class="row row-jam">
                                <div class="col-12 col-gap" style="border: 0.1px solid #ffffff00;"></div>
                                <div class="col-12 col-hari" style="border: 0.1px solid white;">Senin</div>
                                <div class="col-12 col-hari" style="border: 0.1px solid white;">Selasa</div>
                                <div class="col-12 col-hari" style="border: 0.1px solid white;">Rabu</div>
                                <div class="col-12 col-hari" style="border: 0.1px solid white;">Kamis</div>
                                <div class="col-12 col-hari" style="border: 0.1px solid white;">Jumat</div>
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="row">
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">1</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">2</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">3</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">4</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">5</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">6</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">7</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">8</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">9</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">10</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">11</div>
                                <div class="col-1 col-jam" style="border: 0.1px solid white;text-align: center">12</div>
                                @foreach ($matkul as $i => $m)
                                    <div class="col-matkul col-1 " style="border: 0.1px solid white" mtkl={{ $m->singkatan }} jam={{ $m->totalJam }}>
                                        <h5 style="text-align: center;margin-bottom: 0">{{ $m->singkatan }}</h5>
                                        <span style="text-align: center;width: 100%;display: block;margin-bottom: 10px;">{{ $m->nama }}</span>
                                        <h6 style="text-align: right;font-size: 0.7rem">{{ $m->dosen }}</h6>
                                    </div>
                                @endforeach
                            </div>
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
