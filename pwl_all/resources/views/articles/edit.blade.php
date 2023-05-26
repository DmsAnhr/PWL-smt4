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
                            <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control" required="required" name="title"
                                        value="{{ $article->title }}"></br>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <input type="text" class="form-control" required="required" name="content"
                                        value="{{ $article->content }}"></br>
                                </div>
                                <div class="form-group">
                                    <label for="image">Feature Image</label>
                                    <input type="file" class="form-control" required="required" name="image"
                                        value="{{ $article->featured_image }}"></br>
                                    <img width="150px" src="{{ asset('storage/' . $article->featured_image) }}">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Ubah
                                    Data</button>
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
