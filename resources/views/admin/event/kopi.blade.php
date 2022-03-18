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


            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- ISI KONTEN    -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-3 " style="">
                    <!-- /.card -->
                    <div class="card shadow mb-4">

                        <div class="card-header">

                            <h1 style="text-align: center">Event Kopi Portal</h1>



                        </div>
                        <!-- /.card-header -->
                        @foreach ($eventkopi as $e)

                        <a style="text-align: center" href="{{ asset('upload/' . $e->foto_event) }}" class="fancybox"
                            data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                            <img src="{{ asset('upload/' . $e->foto_event) }}" class="img-fluid mb-2" alt="white sample"
                                width="400px" height="400px" />
                        </a>


                        <div class="card-body">

                            <strong><i class="fas fa-book mr-1"></i> Nama Event</strong>

                            <p class="text-muted">
                                {{ $e->nama }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i>Lokasi</strong>

                            <p class="text-muted">{{ $e->lokasi }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i>Waktu Kegiatan</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">{{ $e->tgl_event }}</span>
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i>Rincian Kegiatan</strong>

                            <p class="text-muted">{!! $e->rinciankegiatan !!}</p>
                            <hr>
                            <td>

                                <a href="{{ route('eventkopi.destroy', $e->id) }}">
                                    <button class="btn btn-danger" class="btn">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button></a>

                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModaledit{{ $e->id }}">
                                    <ion-icon name="create-outline"></ion-icon>
                                </button>

                            </td>
                        </div>
                        @endforeach
                        <button type="button" class="btn btn-info" style="text-align: center" data-toggle="modal"
                            data-target="#exampleModalmenu">
                            Tambah Event</button>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                </div>
                <div class="col-xl-4 col-md-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 ">KETERANGAN</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <p>Event ini akan muncul di bagian portal, lalu apabila user tertarik user akan di arahkan
                                ke laman masing-masing
                                lokasi event berlangung dengan cara mengklik detail</b>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <form action="{{ route('eventkopi.store') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama Event">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Lokasi Event</label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukan Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Rincian Kegiatan</label>
                        <textarea name="rinciankegiatan" id="rinciankegiatan" cols="30" rows="10"></textarea>
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
@foreach ($eventkopi as $e)
<div class="modal fade" id="exampleModaledit{{ $e->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Event disini </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('/editeventkopi' . $e->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Masukan Foto Kegiatan</label>
                            <div class="input-group">
                                <img src="{{ asset('upload/' . $e->foto_event) }}" class="img-fluid mb-2"
                                    alt="white sample" width="100px" height="100px" />
                            </div>
                            <div class="input-group">
                                <input type="file" class="form-control" name="foto_event" id="foto_event">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tgl_event" id="tgl_event"
                                value="{{ @$e->tgl_event }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Nama Event</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ @$e->nama }}"
                                placeholder="Masukan nama Event">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Lokasi Event</label>
                            <input type="text" class="form-control" name="lokasi" id="lokasi" value="{{ @$e->lokasi }}"
                                placeholder="Masukan Lokasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Rincian Kegiatan</label>
                            <textarea name="rinciankegiatan" id="rinciankegiatanedit{{ $e->id }}" cols="30"
                                rows="10">{{ empty($e) ? '' : $e->rinciankegiatan }}</textarea>
                            {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                                value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                        </div>


                        <button type="submit" class="btn btn-info">
                            <ion-icon name="save-outline"></ion-icon>
                        </button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
</div>

</div>
@endforeach

@endsection
@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#rinciankegiatan'))
        .catch(error => {
            console.error(error);
        });
</script>
@foreach ($eventkopi as $e)
<script>
    ClassicEditor
        .create(document.querySelector('#rinciankegiatanedit{{ $e->id }}'))
        .catch(error => {
            console.error(error);
        });
</script>
@endforeach
@endsection