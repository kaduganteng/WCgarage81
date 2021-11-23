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
          <a href="{{ route('menubdg') }}">
            <h1>Homepage Menu Caffe Garage 81 Bandung </h1>
          </a>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- ISI KONTEN    -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Menu Caffe</h3>

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
        <div class="row">
          <div class="col-12">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Caffe Garage Bandung</h3>

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
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                      <a href="{{ route('menubdg.create') }}">
                        <button class="btn btn-primary btn-round">
                          <ion-icon name="add-circle-outline"></ion-icon>Tambah Menu
                        </button></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto Menu</th>
                      <th>Kategori</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>Harga</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($menubdg as $m)
                    <tr>
                      <td>{{ $no++}}</td>
                      <td>
                        <img src="{{ asset('upload/'.$m->foto_menu) }}" height="10%" width="10%" alt="">
                      </td>
                      <td>{{ $m ->kategori_id }}</td>
                      <td>{{ $m ->nama }}</td>
                      <td>{{ $m ->keterangan }}</td>
                      <td>{{ $m ->harga }}</td>
                      <td>
                        <a href="{{ route('menubdg.destroy',$m->id) }}">
                          <button class="btn btn-danger">
                            <ion-icon name="close-circle-outline"></ion-icon>
                          </button></a>

                        <a href="{{  route('menubdg.edit',$m->id) }}"><button class="btn btn-success">
                            <ion-icon name="create-outline"></ion-icon>
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

  </section>
</div>

@endsection