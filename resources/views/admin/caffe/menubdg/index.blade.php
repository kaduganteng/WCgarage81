@extends('layouts.main')
@section('tittle', 'Admin Garage 81')
@section('content')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- ISI CONTENT ADMIN -->
<div class="content">

    <!-- ISI JUDUL KONTEN    -->
    <section class="content-header">
        <div class="container-fluid">
          
        </div><!-- /.container-fluid -->
    </section>

    <!-- ISI KONTEN    -->

    <div class="card-body">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                     <h3>Gallery</h3>
          <a href="menubdg">
            <button type="button" class="btn btn-success">
              <ion-icon name="refresh"></ion-icon>Refresh
            </button>
          </a>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalgaleri">
            <ion-icon name="add"></ion-icon>
            Tambah Foto
          </button>
                </div>
                <div class="card-body" style="overflow: scroll;">
                    <div class="row">

                        @foreach ($gbdg as $g)
                        <div class="item col-sm-2">
                            <a href="{{ asset('upload/' . $g->foto_bdg) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                <img src="{{ asset('upload/' . $g->foto_bdg) }}" class="img-fluid mb-2" alt="white sample" width="200px" height="200px" />
                            </a>
                            <a href="{{ route('menubdg.destroygal', $g->id) }}">
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
    </div>
    <section class="content">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Daftar MenuCaffe Garage Bandung</h3>
                <a href="menubdg">
                  <button type="button" class="btn btn-success">
                    <ion-icon name="refresh"></ion-icon>Refresh
                  </button>
                </a>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalmenu">
                  <ion-icon name="add"></ion-icon>
                  Tambah Menu
                </button>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div>
                    <div>
                        <div>
                            
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
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <a href="{{ asset('upload/' . $m->foto_menu) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                    <img src="{{ asset('upload/' . $m->foto_menu) }}" class="img-fluid mb-2" alt="white sample" width="100px" height="100px" />
                                                </a>
                                            </td>
                                            <td>{{ $m->kategori_id }}</td>
                                            <td>{{ $m->nama }}</td>
                                            <td>{!! $m->keterangan !!}</td>
                                            <td>{{ $m->harga }}</td>
                                            <td>
                                                <a href="{{ route('menubdg.destroy', $m->id) }}">
                                                    <button class="btn btn-danger" class="btn">
                                                        <ion-icon name="trash-outline"></ion-icon>
                                                    </button></a>

                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModaledit{{ $m->id }}">
                                                    <ion-icon name="create-outline"></ion-icon>
                                                </button>
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
{{-- modal galeri menu bdg --}}
<div class="modal fade" id="exampleModalgaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan Foto Baru</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('menubdg.storegal') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Masukan Nama Foto</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama foto">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Baru</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_bdg" id="foto_bdg">
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
{{-- modal menu --}}
<div class="modal fade" id="exampleModalmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan Menu </h5>
            </div>
            <div class="modal-body">
                <form action="{{ empty($databdg) ? route('menubdg.store') : route('menubdg.update', $databdg->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Menu</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_menu" id="foto_menu">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Kategori</label>
                            <div class="input-group">
                                <select name="kategori_id" class="form-control">
                                    @if (!empty(@$databdg->kategori_id))
                                    <option value="{{ @$databdg->kategori_id }}" {{ !empty($databdg->nama_kategori) ? 'selected' : '' }}>
                                        {{ $databdg->nama_kategori }}
                                    </option>
                                    @endif
                                    @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Menu</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ @$databdg->nama }}" placeholder="Masukan nama menu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" cols="30" rows="10">{{ empty($databdg) ? '' : $databdg->keterangan }}</textarea>
                        {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
              value="{{ @$databdg->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Harga Menu</label>
                        <input type="text" class="form-control" name="harga" id="harga" value="{{ @$databdg->harga }}" placeholder="Masukan Harga">
                    </div>

                    <button type="submit" class="btn btn-info">
                        Selesai
                    </button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
</div>


{{-- modal edit --}}
@foreach ($menubdg as $m)
<div class="modal fade" id="exampleModaledit{{ $m->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Menu </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('/editbdg' . $m->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
          <div class="card-body">
             <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Menu</label>
                         <div class="input-group" >
                              <img src="{{ asset('upload/' . $m->foto_menu) }}" class="img-fluid mb-2" alt="white sample" width="100px" height="100px" />
                            </div>
                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_menu" id="foto_menu" value="{{ @$m->foto_menu }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Kategori</label>
                            <div class="input-group">
                                <select name="kategori_id" class="form-control">
                                    @if (!empty(@$databdg->kategori_id))
                                    <option value="{{ @$databdg->kategori_id }}" {{ !empty($databdg->nama_kategori) ? 'selected' : '' }}>
                                        {{ $databdg->nama_kategori }}
                                    </option>
                                    @endif
                                    @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Menu</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ @$m->nama }}" placeholder="Masukan nama menu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Keterangan</label>
                        <textarea name="keterangan" id="keteranganedit{{ $m->id }}" cols="30" rows="10">{{ empty($m) ? '' : $m->keterangan }}</textarea>
                        {{-- <input type="text" class="form-control" name="keterangan" id="keteranganedit"
            value="{{ @$m->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Harga Menu</label>
                        <input type="text" class="form-control" name="harga" id="harga" value="{{ @$m->harga }}" placeholder="Masukan Harga">
                    </div>

                   <button type="submit" class="btn btn-info">
                            <ion-icon name="save-outline"></ion-icon>
                        </button>
                </form>
            </div>
    </div>
                  
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
</div>
@endforeach



@endsection
@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#keterangan'))
        .catch(error => {
            console.error(error);
        });
</script>
@foreach ($menubdg as $m)
    <script>
    ClassicEditor
        .create(document.querySelector('#keteranganedit{{$m->id}}'))
        .catch(error => {
            console.error(error);
        });
</script>
@endforeach


@endsection