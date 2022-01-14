@extends('layouts.main')
@section('tittle','Admin Garage 81|Tambah Kategori')
@section('content')

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- ISI CONTENT ADMIN -->
<style>
    .btn {
        transition: 1s;

    }

    .btn:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }
</style>
<div class="content">

    <!-- ISI JUDUL KONTEN    -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('kopiportal') }}">
                        <h1>Kopi Portal </h1>
                    </a>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- ISI KONTEN    -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Foto</h3>

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
                <div class="card card-info">

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('kopiportal.storegal')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Masukan Nama Foto</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama foto">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Masukan Foto Baru</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="foto_kopip" id="foto_bdg">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                            <button type="submit" class="btn btn-info">
                                <ion-icon name="save-outline"></ion-icon>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
</div>

@endsection