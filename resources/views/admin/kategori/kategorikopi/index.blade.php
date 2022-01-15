@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- ISI CONTENT ADMIN -->
<div class="content">

    <!-- ISI JUDUL KONTEN    -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Homepage</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- ISI KONTEN    -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Kategori</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            Tambah kategori
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kategori Menu Kopi Portal</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Opsi</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach ($kategori as $k)
                                        <tr>
                                            <td>{{ $no++}}</td>
                                            <td>{{ $k->nama_kategori}}</td>
                                            <td>
                                                <a href="{{ route('kategorikopi.destroy',$k->id) }}">
                                                    <button class="btn btn-danger" class="btn">
                                                        <ion-icon name="trash-outline"></ion-icon>
                                                    </button></a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
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
        <!-- /.card -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukan Kategori Baru</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('kategorikopi.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan Kategori Baru">
                            </div>
                            <button type="sumbit" class="btn btn-info">Simpan</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection