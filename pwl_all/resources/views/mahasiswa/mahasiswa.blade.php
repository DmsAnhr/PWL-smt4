@extends('index')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" menu=".link-mhs">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahasiwa</h1>
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
                            <a type="button" class="btn btn-success btn-sm mb-3 btn-add-data">
                                Tambah Data
                            </a>
                            <table class="table myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Prodi</th>
                                        <th>Gender</th>
                                        <th>No Hp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if ($mhs -> count() > 0)
                                        @foreach ( $mhs as $i => $m )
                                            <tr>
                                                <td style="vertical-align: middle">{{$i + 1}}</td>
                                                <td style="vertical-align: middle">{{$m -> nim}}</td>
                                                <td style="vertical-align: middle">{{$m -> nama}}</td>
                                                <td style="vertical-align: middle">
                                                    <img src="{{ asset('storage/'.$m->foto) }}" alt="Foto Mahasiswa" style="max-height: 100px;max-width: 100px">
                                                </td>
                                                <td style="vertical-align: middle">{{$m -> prodi->nama}}</td>
                                                <td style="vertical-align: middle">{{$m -> jk}}</td>
                                                <td style="vertical-align: middle">{{$m -> no_telp}}</td>
                                                <td style="display: flex;align-items: center">
                                                    <a type="button" href={{url('/mahasiswa/'.$m->id. '/nilai')}} class="btn btn-sm btn-info text-white mx-1">
                                                        Nilai
                                                    </a>
                                                    <a type="button" href={{url('/mahasiswa/'.$m->id. '/edit')}} class="btn btn-sm btn-warning text-white mx-1">
                                                        Ubah
                                                    </a>

                                                    <form method="POST" action="{{ url('/mahasiswa/'.$m->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger text-white mx-1">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" style="text-align:center;">Belum Ada Data</td>
                                        </tr>
                                    @endif --}}
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

    <div id="modalMahasiswa" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="overlay modal-overlay">
                    <i class="fas fa-2x fa-sync fa-spin"></i>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="modalMhsLabel">Form Mahasiswa<span class="form-message text-danger"></span> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow: auto;max-height: 75vh;">
                    <form id="formMahasiswa" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-foto">
                                <label>Foto Saat Ini</label>
                                <br>
                                <img src="" alt="Foto Mahasiswa" width="150" id="previewFoto">
                            </div>
                            <div class="form-group col-12">
                                <label>Foto</label>
                                <input type="file" class="form-control" required="required" name="foto" id="foto" value=""/>
                            </div>
                            <div class="form-group col-6">
                                <label>Nim</label>
                                <input class="form-control" name="nim" type="text" id="nim"/>
                                
                            </div>
                            <div class="form-group col-6">
                                <label>Nama</label>
                                <input class="form-control" name="nama" type="text" id="nama"/>
                                
                            </div>
                            <div class="form-group col-6">
                                <label>Prodi</label>
                                <select name="prodi_id" class="form-control" id="prodi">
                                    <option value="null" selected disabled>Silahkan Pilih</option>
                                    @foreach ($prodi as $p)
                                        <option value="{{ $p->id }}">
                                            {{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Gender</label>
                                <input class="form-control" name="jk" type="text" id="gender"/>
                                
                            </div>
                            <div class="form-group col-6">
                                <label>Tempat lahir</label>
                                <input class="form-control" name="tempat_lahir" type="text" id="tempatLahir"/>
                                
                            </div>
                            <div class="form-group col-6">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir" type="date" id="tglLahir"/>
                                
                            </div>
                            <div class="form-group col-6">
                                <label>No Telp</label>
                                <input class="form-control" name="no_telp" type="text" id="telp"/>
                                
                            </div>
                            <div class="form-group col-6">
                                <label>alamat</label>
                                <input class="form-control" name="alamat" type="text" id="alamat"/>
                                
                            </div>



                            <div class="form-group col-12">
                                <button class="btn btn-md btn-block btn-primary btn-submit-mahasiswa" type="button">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div id="boxDetailMahasiswa">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="" alt="Foto Mahasiswa" width="100" id="detailFoto">
                            </div>
                            <div class="col-12 mt-3">
                                <pre class="pb-0 mb-0 text-white">Nim          :   <span id="detailNim"></span></pre>
                                <pre class="pb-0 mb-0 text-white">Nama      :   <span id="detailNama"></span></pre>
                                <pre class="pb-0 mb-0 text-white">Prodi       :   <span id="detailProdi"></span></pre>
                                <pre class="pb-0 mb-0 text-white">Gender   :   <span id="detailGender"></span></pre>
                                <pre class="pb-0 mb-0 text-white">TTL          :   <span id="detailTtl"></span></pre>
                                <pre class="pb-0 mb-0 text-white">No HP     :   <span id="detailNohp"></span></pre>
                                <pre class="pb-0 mb-0 text-white">Alamat   :   <span id="detailAlamat"></span></pre>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <legend class="text-center">Nilai Semester Mahasiswa</legend>
                                <table class="table" id="tableNilai">
                                    <thead>
                                        <tr>
                                            <th>Mata Kuliah</th>
                                            <th>Semester</th>
                                            <th>Nilai</th>
                                            <th>Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a type="button" class="btn btn-danger btn-cetak-khs"  href="">Cetak KHS</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@push('css')
    <link rel="stylesheet" href="{{asset ('plugins/toastr/toastr.min.css')}}">
    <style>
        #boxDetailMahasiswa pre{
            font-family: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        }
    </style>
@endpush
@push('js')
    <script src="{{asset ('plugins/toastr/toastr.min.js')}}"></script>
    <script>
        var tableMhs = $('.myTable').DataTable({
            iDisplayLength: 10,
            processing: true,
            serverSide: true,
            ajax: "{{ route('mhs.data') }}",
            columns: [
                {
                    "data": null,
                    "searcable": false,
                    "sortable": false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { data: 'nim', name: 'nim' },
                { data: 'nama', name: 'nama' },
                { 
                    data: 'foto', 
                    name: 'foto',
                    render: function(data, type, full, meta) {
                        return '<img src="storage/'+data+'" alt="Foto" style="max-width:50px;max-height:50px;">';
                    }
                },
                { data: 'prodi', name: 'prodi' },
                { data: 'jk', name: 'jk' },
                { data: 'no_telp', name: 'no_telp' },
                { 
                    data: 'id', 
                    name: 'action', 
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                    return `<a class="btn btn-sm btn-info btn-detail text-white" data-id="` + data + `">Detail</a> | <a class="btn btn-sm btn-warning btn-edit text-white" data-id="` + data + `">Edit</a> | <a class="btn btn-sm btn-danger btn-delete" data-id="` + data + `">Delete</a>`;
                }
                }
            ]
        });

        $('.btn-add-data').click(function() {
            $('.btn-confirm-edit').addClass('btn-submit-mahasiswa').removeClass('btn-confirm-edit');
            $('#modalMhsLabel').text('Tambah data');
            $('#formMahasiswa')[0].reset();
            $('#formMahasiswa').show();
            $('#boxDetailMahasiswa, .modal-footer').hide();
            $('.modal-dialog').removeClass('modal-xl').addClass('modal-lg');
            $('.col-foto').removeClass('d-block').addClass('d-none');
            $('#modalMahasiswa').modal('show');
            $('.modal-overlay').hide();
        });

        $('.btn-submit-mahasiswa').click(function(e) {
            e.preventDefault();
            // var formData = $('#formMahasiswa').serialize();
            var formData = new FormData($('#formMahasiswa')[0]);
            $.ajax({
                url: '/mahasiswa',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response.status){
                        toastr.success(response.message);
                        $('#formMahasiswa')[0].reset();
                        tableMhs.ajax.reload();
                    }else{
                        $('.form-message').text(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        $('.myTable').on('click', '.btn-detail', function(e) {
            e.preventDefault();
            $('#formMahasiswa').hide();
            $('#boxDetailMahasiswa, .modal-footer, .modal-overlay').show();
            $('#modalMhsLabel').text('Detail Mahasiswa');
            $('.modal-dialog').removeClass('modal-lg').addClass('modal-xl');
            $('#tableNilai tbody').text('');
            $('#modalMahasiswa').modal('show');
            var mahasiswaId = $(this).data('id');

            $.ajax({
                url: '/mahasiswa/' + mahasiswaId + '/detail',
                type: 'GET',
                success: function(response) {
                    var mahasiswa = response.mahasiswa;
                    var prodi = response.prodi;
                    var nilai = response.nilai;

                    $('#detailFoto').attr('src', 'storage/'+mahasiswa.foto);
                    $('#detailNim').text(mahasiswa.nim);
                    $('#detailNama').text(mahasiswa.nama);
                    $('#detailProdi').text(prodi);
                    if (mahasiswa.jk === 'L') {
                        $('#detailGender').text('Laki-laki');
                    }else{
                        $('#detailGender').text('Perempuan');
                    }
                    $('#detailTtl').text(mahasiswa.tempat_lahir +' / '+mahasiswa.tanggal_lahir);
                    $('#detailNohp').text(mahasiswa.no_telp);
                    $('#detailAlamat').text(mahasiswa.alamat);

                    $.each(nilai, function(index, item) {
                        var html = '<tr>';
                            html += '<td>'+ item.matakuliah.nama +'</td>';
                            html += '<td>4</td>';
                            html += '<td>'+ item.nilai +'</td>';
                            html += '<td>';
                                if (item.nilai > 88) {
                                    html += 'A';
                                            
                                } else {
                                    html += 'B';    
                                }
                            html += '</td>';
                        html += '</tr>';
                        $('#tableNilai tbody').append(html);
                    });

                    $('.btn-cetak-khs').attr('href', '/mahasiswa/'+ mahasiswa.id +'/pdfNilai');
                    $('.modal-overlay').hide();
                },
                error: function(xhr, status, error) {
                    // Proses gagal
                    console.log(xhr.responseText);
                }
            });
        });

        $('.myTable').on('click', '.btn-edit', function(e) {
            e.preventDefault();
            $('#boxDetailMahasiswa, .modal-footer').hide();
            $('#formMahasiswa, .modal-overlay').show();
            $('#modalMhsLabel').text('Edit data');
            $('.modal-dialog').removeClass('modal-xl').addClass('modal-lg');
            $('#modalMahasiswa').modal('show');
            var mahasiswaId = $(this).data('id');

            $.ajax({
                url: '/mahasiswa/' + mahasiswaId + '/edit',
                type: 'GET',
                success: function(response) {
                    if (response.status) {
                        var mahasiswa = response.mahasiswa;

                        // Isi nilai input form update dengan data mahasiswa
                        $('.col-foto').removeClass('d-none').addClass('d-block');
                        $('#previewFoto').attr('src', 'storage/'+mahasiswa.foto);
                        $('#nim').val(mahasiswa.nim);
                        $('#nama').val(mahasiswa.nama);
                        $('#prodi option[value="' + mahasiswa.prodi_id + '"]').prop('selected', true);
                        $('#gender').val(mahasiswa.jk);
                        $('#tempatLahir').val(mahasiswa.tempat_lahir);
                        $('#tglLahir').val(mahasiswa.tanggal_lahir);
                        $('#alamat').val(mahasiswa.alamat);
                        $('#telp').val(mahasiswa.no_telp);
                        
                        $('.btn-submit-mahasiswa').addClass('btn-confirm-edit').removeClass('btn-submit-mahasiswa');
                        $('.modal-overlay').hide();
                    } else {
                        // Tampilkan pesan error jika terjadi kesalahan
                        console.log(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        $('.btn-confirm-edit').click(function(e) {
            e.preventDefault();
            var mahasiswaId = $(this).data('id');
            var formData = new FormData($('#formMahasiswa')[0]);

            $.ajax({
                url: '/mahasiswa/' + mahasiswaId,
                type: 'PUT',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Proses berhasil
                    console.log(response);
                    tableMhs.ajax.reload();
                    toastr.info(response.message);
                    $('#modalMahasiswa').modal('hide');
                    $('#formMahasiswa')[0].reset();
                    $('.col-foto').removeClass('d-block').addClass('d-none');
                    $('#previewFoto').attr('src', '');
                    $('.btn-confirm-edit').addClass('btn-submit-mahasiswa').removeClass('btn-confirm-edit');
                },
                error: function(xhr, status, error) {
                    // Proses gagal
                    console.log(xhr.responseText);
                }
            });
        });

        $('.myTable').on('click', '.btn-delete', function(e) {
            e.preventDefault();
            var mahasiswaId = $(this).data('id');

            // Konfirmasi penghapusan
            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                $.ajax({
                    url: '/mahasiswa/' + mahasiswaId,
                    type: 'DELETE',
                    success: function(response) {
                        toastr.error('Data Mahasiswa telah di hapus');
                        tableMhs.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        // Proses gagal
                        console.log(xhr.responseText);
                    }
                });
            }
        });

        
    </script>
@endpush
