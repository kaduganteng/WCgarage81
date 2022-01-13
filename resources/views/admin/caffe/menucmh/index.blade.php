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
        <div class="card-body">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">Gallery</h4>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#exampleModalgaleri">
                                    Tambah Foto
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            @foreach ($gcmh as $g)
                                <div class="item col-sm-2">

                                    <a href="{{ asset('upload/' . $g->foto_cmh) }}" class="fancybox"
                                        data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                        <img src="{{ asset('upload/' . $g->foto_cmh) }}" class="img-fluid mb-2"
                                            alt="white sample" width="200px" height="200px" />
                                    </a>
                                    <a href="{{ route('menucmh.destroygal', $g->id) }}">
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
                                    <h3 class="card-title">Caffe Garage Cimahi</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#exampleModalmenu">
                                                        Tambah Menu
                                                    </button>
                                                </div>
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
                                                    <td>{{ $no++ }}</td>
                                                    <td>
                                                        <a href="{{ asset('upload/' . $m->foto_menu) }}"
                                                            class="fancybox" data-fancybox="ggblg"
                                                            data-gallery="gallery" height="50px" width="50px">
                                                            <img src="{{ asset('upload/' . $m->foto_menu) }}"
                                                                class="img-fluid mb-2" alt="white sample" width="100px"
                                                                height="100px" />
                                                    </td>
                                                    <td>{{ $m->nama_kategori }}</td>
                                                    <td>{{ $m->nama }}</td>
                                                    <td>{!! $m->keterangan !!}</td>
                                                    <td>{{ $m->harga }}</td>
                                                    <td>
                                                        <a href="{{ route('menucmh.destroy', $m->id) }}">
                                                            <button class="btn btn-danger" class="btn">
                                                                <ion-icon name="trash-outline"></ion-icon>
                                                            </button></a>

                                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                            data-target="#exampleModaledit{{ $m->id }}">
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </button>
                                                        </a>
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
    {{-- Modla Galeri Cimahi --}}
    <div class="modal fade" id="exampleModalgaleri" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Foto Baru</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menucmh.storegal2') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Masukan Nama Foto</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama foto">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Masukan Foto Baru</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="foto_cmh" id="foto_cmh">
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

    {{-- Modal Menu Cimahi --}}
    <div class="modal fade" id="exampleModalmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Menu </h5>
                </div>
                <div class="modal-body">
                    <form action="{{ empty($datacmh) ? route('menucmh.store') : route('menucmh.update', $datacmh->id) }}"
                        method="POST" enctype="multipart/form-data">
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
                                        @foreach ($kategori as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Nama Menu</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ @$datacmh->nama }}"
                                placeholder="Masukan nama menu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="30"
                                rows="10">{{ empty($datacmh) ? '' : $datacmh->keterangan }}</textarea>
                            {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
              value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Harga Menu</label>
                            <input type="text" class="form-control" name="harga" id="harga"
                                value="{{ @$datacmh->harga }}" placeholder="Masukan Harga">
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

    {{-- Modal Edit Cimahi --}}
    @foreach ($menucmh as $m)
        <div class="modal fade" id="exampleModaledit{{ $m->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Menu </h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/editcmh' . $m->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
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
                                                @if (!empty(@$datacmh->kategori_id))
                                                    <option value="{{ @$datacmh->kategori_id }}"
                                                        {{ !empty($datacmh->nama_kategori) ? 'selected' : '' }}>
                                                        {{ $datacmh->nama_kategori }}</option>
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
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        value="{{ @$m->nama }}" placeholder="Masukan nama menu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" cols="30"
                                        rows="10">{{ empty($m) ? '' : $m->keterangan }}</textarea>
                                    {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                                                    value="{{ @$m->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Harga Menu</label>

                                    <input type="text" class="form-control" name="harga" id="harga"
                                        value="{{ @$m->harga }}" placeholder="Masukan Harga">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <ion-icon name="save-outline"></ion-icon>Selesai
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
    @endforeach


@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#keterangan'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

</div>
</div>
</div>
</div>
@endsection
@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#keterangan'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
