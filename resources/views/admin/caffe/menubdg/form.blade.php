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
        <h3 class="card-title">Tambah Menu Baru</h3>

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
          <div class="card-header">
            <h3 class="card-title">Masukan Menu baru </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('menubdg.store')}}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputFile">Masukan Foto Menu</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto">
                    <label class="custom-file-label" for="foto">Pilih file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Kategori</label>
                  <select name="kategori_id">
                    @if(!empty(@$data->kategori_id))
                    <option value="{{@$data->kategori_id}}" {{!empty($data->
                      nama_kategori)?'selected':''}}>{{$data->nama_kategori}}</option>
                    @endif
                    @foreach($kategori as $k)
                    <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName">Nama Menu</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama menu">
              </div>
              <div class="form-group">
                <label for="exampleInputName">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan"
                  placeholder="Tambahkan keterangan menu">
              </div>
              <div class="form-group">
                <label for="exampleInputName">Harga Menu</label>
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan Harga">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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