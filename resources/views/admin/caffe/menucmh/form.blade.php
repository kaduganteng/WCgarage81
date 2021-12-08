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
                    <form action="{{ empty($datacmh) ?  route('menucmh.store'): route('menucmh.update',$datacmh->id)}}"
                        method="POST" enctype="multipart/form-data">
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
                                            @if(!empty(@$datacmh->kategori_id))
                                            <option value="{{@$datacmh->kategori_id}}" {{!empty($datacmh->
                                                nama_kategori)?'selected':''}}>{{$datacmh->nama_kategori}}</option>
                                            @endif
                                            @foreach($kategori as $k)
                                            <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Nama Menu</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ @$datacmh->nama }}" placeholder="Masukan nama menu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="10">{{ empty($datacmh)? '' :$datacmh->keterangan }}</textarea>
                                {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                                    value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Harga Menu</label>
                               
                                <input type="text" class="form-control" name="harga" id="harga"
                                    value="{{ @$datacmh->harga }}" placeholder="Masukan Harga">
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



@endsection
@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#keterangan' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection