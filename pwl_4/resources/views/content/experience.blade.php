@extends('index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header" menu=".link-experience">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Experience</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">experience</li>
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
                <!-- /.col -->
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Read Mail</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i
                                        class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5>Pengalaman Kuliah</h5>
                                <h6>From: dimasputra162003@gmail.com
                                    <span class="mailbox-read-time float-right">27 Feb. 2023 11:12 AM</span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm" data-container="body"
                                        title="Delete">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm" data-container="body"
                                        title="Reply">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm" data-container="body"
                                        title="Forward">
                                        <i class="fas fa-share"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm" title="Print">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>Halo Semua,</p>

                                <p>
                                    Saya akan menyeritakan pengalaman kuliah saya di polinema malang <br>
                                    saya mengambil jurusan D4 Teknik Informasi karna saya sudah suka coding dari kelas 8 smp.
                                    ditahun pertama kami satu angkatan memulai perkuliahan secara daring/online, 
                                    tidak seru rasanya karena tidak bisa bertemu dan berinteraksi dengan teman" lainnya, 
                                    tapi apa boleh buat dikarenakan pandemi yang masih rawan jadi terpaksa tidak bisa berikteraksi langsung.
                                </p>

                                <p>
                                    Di tahun kedua, saya dan teman-teman bis kuliah secara offline/luring,
                                    disini kami dapat mengetahui wajah serta sifat teman" yang selama 1 tahun kebelakang hanya bisa bertatap via layar.
                                    semuanya berjalan seru, teman" maypritas dari luar kota jadi bisa mengetahui budaya dari berbagai daerah,
                                    tak hanya itu dosen" polinema ternyata banyak yang seru dalam mengajari kami, meskipun ada juga yang dianggap tidak seru oleh teman". 
                                </p>

                                <p>
                                    Tiga semester berlalu, kini masuk di semester 4 yang saya tunggu" karena disemester ini sudah mulai banyak matakuliah praktikum.
                                    Saya sangat semangat jika berhadapan dengan matkul praktikum karena sebelumnya saya berasal dari SMK.
                                    Semoga di semerter ini saya bisa mendapat nilai sempurna. AAMIIN
                                </p>

                                <p>Sekian,<br>Dimas</p>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i>
                                    Reply</button>
                                <button type="button" class="btn btn-default"><i class="fas fa-share"></i>
                                    Forward</button>
                            </div>
                            <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i>
                                Delete</button>
                            <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
