@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<style>
  .btn{
    transition: 1s;

  }
.btn:hover {
transform: rotate( 360deg);
border-radius: 50%;
}
</style>
<!-- ISI CONTENT ADMIN -->
<div class="content">

  <!-- ISI JUDUL KONTEN    -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a href="{{ route('menucmh') }}">
            <h1>Homepage Menu Caffe Garage 81 Cimahi </h1>
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
         <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                      <a href="{{ route('menucmh.create') }}">
                        <button class="btn btn-info btn-round">
                          <ion-icon name="add-circle-outline"></ion-icon>Tambah Menu
                        </button></a>
                    </div>
                  </div>
                </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Caffe Garage Cimahi</h3>

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
                    @foreach ($menucmh as $m)
                    <tr>
                      <td>{{ $no++}}</td>
                      <td>
                        <a href="{{ asset('upload/'. $m->foto_menu ) }}"  class="fancybox"  
                          data-fancybox="ggblg" data-gallery="gallery"  height="50px" width="50px" >
                           <img src="{{ asset('upload/'. $m->foto_menu) }}" class="img-fluid mb-2"
                               alt="white sample" width="100px" height="100px"/>
                      </td>
                      <td>{{ $m ->kategori_id }}</td>
                      <td>{{ $m ->nama }}</td>
                      <td>{{ $m ->keterangan }}</td>
                      <td>{{ $m ->harga }}</td>
                      <td>
                        <a href="{{ route('menucmh.destroy',$m->id) }}">
                          <button class="btn btn-danger" class="btn">
                            <ion-icon name="close-circle-outline"></ion-icon>
                          </button></a>

                        <a href="{{  route('menucmh.edit',$m->id) }}"><button class="btn btn-success" class="btn">
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