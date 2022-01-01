@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')

<head>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<style>
  .jumlah {
    display: flex;
  }
</style>
<!-- ISI CONTENT ADMIN -->
<div class="container">

  <!-- ISI JUDUL KONTEN    -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard </h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- ISI KONTEN    -->
  <div class="jumlah">
    <section class="content">

      <div class="card-body">
        <div class="row">
          @foreach ($stok as $s)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3>{{ $s->jml }}</h3>
                <h5>Caffe Bandung</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('menubdg') }}" class="small-box-footer">Lebih banyak <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach

        </div>

        <div class="row">
          @foreach ($stok2 as $c)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3>{{ $c->jml }}</h3>
                <h5>Caffe Cimahi</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('menucmh') }}" class="small-box-footer">Lebih banyak<i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach

        </div>


        <div class="row">
          @foreach ($stok3 as $k)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3>{{ $k->jml }}</h3>

                <h5>Kopi Portal</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('kopiportal') }}" class="small-box-footer">Lebih banyak<i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
  </div>


  <section class="content">
    <div class="card">

      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Masukan Saran Pengunjung</h3>

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
                      <th>Nama Pengunjung</th>
                      <th>Email</th>
                      <th>Masukan Saran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($saran as $s)
                    <tr>
                      <td>{{ $no++}}</td>
                      <td>{{ $s ->nama }}</td>
                      <td>{{ $s ->email }}</td>
                      <td>{{ $s ->saran }}</td>

                      <td>
                        <a href="{{ route('contactportal.destroy',$s->id) }}">
                          <button class="btn btn-danger" class="btn">
                            <ion-icon name="close-circle-outline"></ion-icon>
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

  <!-- /.card -->

  </section>
</div>

@endsection