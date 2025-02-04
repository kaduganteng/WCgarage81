@extends('layouts.main')
@section('tittle','Admin Garage 81')
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
<style>
    .col-7 {
        align-content: center;
    }
</style>
{{-- <div class="card-header">
    <h3 class="card-title">Title</h3>

    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div> --}}
<div class="card-body" style="align-content: center">
    <div class="row">
        <div class="col-7">
            <div class="card shadow mb-4 ">
                <div class="card-header">
                    <h3>List Menu Kopi Portal</h3>
                    <a href="listkopi">
                        <button type="button" class="btn btn-success">
                            <ion-icon name="refresh"></ion-icon>Refresh
                        </button>
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModallist">
                        <ion-icon name="add"></ion-icon> Tambah Foto
                    </button>
                </div>
                <div class="card-body" style="overflow: scroll;">
                    <div class="row">

                        @foreach ($listmenu as $l)
                        <div class="item col-sm-2">

                            <a href="{{ asset('upload/' . $l->foto_list) }}" class="fancybox" data-fancybox="ggblg"
                                data-gallery="gallery" height="50px" width="50px">
                                <img src="{{ asset('upload/' . $l->foto_list) }}" class="img-fluid mb-2"
                                    alt="white sample" width="200px" height="200px" />
                            </a>
                            <a href="{{ route('listkopi.destroy', $l->id) }}">
                                <button class="btn btn-danger">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </button>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 ">KETERANGAN</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <p>Foto dalam laman List ini akan muncul di laman web caffe per lokasi , akan muncul berupa
                        coursel
                        (image-slider).
                        </b>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card-body -->

<!-- /.card-footer-->

<div class="modal fade" id="exampleModallist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan Foto Baru</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('listkopi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Masukan Nama Foto</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama foto">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Baru</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_list" id="foto_list">
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


@endsection