@extends('layouts.main')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
</head>


<div class="card">


    <style type="text/css">
        .item {
            transition: .5s ease-in-out;
        }

        .item:hover {
            filter: brightness(80%);
        }
    </style>
    <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Gallery</h4>
                    <div class="card-tools">

                        <button type="button" class="btn btn-info" data-toggle="modal"
                            data-target="#exampleModalgaleri">
                            Tambah Foto
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        @foreach ($galeri as $g)
                        <div class="item col-sm-2">

                            <a href="{{ asset('upload/'. $g->foto_galeri ) }}" class="fancybox" data-fancybox="ggblg"
                                data-gallery="gallery" height="50px" width="50px">
                                <img src="{{ asset('upload/'. $g->foto_galeri) }}" class="img-fluid mb-2"
                                    alt="white sample" width="200px" height="200px" />
                            </a>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<div class="modal fade" id="exampleModalgaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan Foto Baru</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('galeri.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Masukan Nama Foto</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama foto">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Baru</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_galeri" id="foto_galeri">
                        </div>
                    </div>
                    <button type="sumbit" class="btn btn-info">Simpan</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/js/demo.js"></script>


@endsection