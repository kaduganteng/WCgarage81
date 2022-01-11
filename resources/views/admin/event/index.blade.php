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
        <section class="content">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Event Portal</h3>

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
                                                        Tambah Event
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
                                                <th>Foto Event</th>
                                                <th>Tanggal Perlaksanaan</th>
                                                <th>Nama Event</th>
                                                <th>Rincian Kegiatan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($event as $e)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>
                                                        <a href="{{ asset('upload/' . $e->foto_event) }}"
                                                            class="fancybox" data-fancybox="ggblg"
                                                            data-gallery="gallery" height="50px" width="50px">
                                                            <img src="{{ asset('upload/' . $e->foto_event) }}"
                                                                class="img-fluid mb-2" alt="white sample" width="100px"
                                                                height="100px" />
                                                    </td>
                                                    <td>{{ $e->tgl_event }}</td>
                                                    <td>{{ $e->nama }}</td>
                                                    <td>{!! $e->rkegiatan !!}</td>

                                                    <td>
                                                        <a href="{{ route('event.destroy', $e->id) }}">
                                                            <button class="btn btn-danger" class="btn">
                                                                <ion-icon name="close-circle-outline"></ion-icon>
                                                            </button></a>

                                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                            data-target="#exampleModaledit{{ $e->id }}">
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
    {{-- Modal Event --}}
    <div class="modal fade" id="exampleModalmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Event disini </h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputFile">Masukan Foto Kegiatan</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="foto_event" id="foto_event">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tgl_event" id="tgl_event">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Nama Event</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukan nama Event">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Rincian Kegiatan</label>
                            <textarea name="rkegiatan" id="rkegiatan" cols="30" rows="10"></textarea>
                            {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                            value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
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

    {{-- Modal Edit Event --}}
    @foreach ($event as $e)
        <div class="modal fade" id="exampleModaledit{{ $e->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Event Event disini </h5>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputFile">Masukan Foto Kegiatan</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="foto_event" id="foto_event">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Tanggal Kegiatan</label>
                                <input type="date" class="form-control" name="tgl_event" id="tgl_event">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Nama Event</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ @$e->nama }}"
                                    placeholder="Masukan nama Event">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Rincian Kegiatan</label>
                                <textarea name="rkegiatan" id="rkegiatan" cols="30"
                                    rows="10">{{ empty($e) ? '' : $e->rkegiatan }}</textarea>
                                {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                            value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
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

@endsection
