@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')

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
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori Menu Caffe Garage 81</h3>

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
                      <a href="{{ route('kategorimenu.create') }}">
                        <button class="btn btn-primary btn-round">Tambah Kategori</button></a>
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
                        <a href="{{ route('kategorimenu.destroy',$k->id) }}">
                          <button class="btn btn-danger">Hapus Kategori</button></a>
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
      <div class="modal fade" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Masukan Menu Baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="form" method="post">
              @csrf()
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                    placeholder="Masukan Nama Barang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kategori</label>
                  <input type="text" class="form-control" name="sn" id="sn" placeholder="Masukan Nomor Serial ">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukan Merk ">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukan Merk ">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Harga</label>
                  <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukan Merk ">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Masukan Gambar Menu</label>
                  <input type="file" class="form-control" name="suratpinjam" id="suratpinjam">
                </div>
              </div>
              <div class="modal-footer justify-content-between">

                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-light">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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