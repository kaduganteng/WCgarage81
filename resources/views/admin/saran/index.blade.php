@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')

<head>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<!-- ISI CONTENT ADMIN -->
<div class="content">

  <!-- ISI JUDUL KONTEN    -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h3 class="text-center">Masukan Pengunjung</h3>
      <hr>
      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
        <div class="dropdown-header">MENU</div>
        <a class="dropdown-item" href="{{ route('saran') }}">Refresh</a>
      </div>
    </div>
    <div class="card-body" style="
                display: block;
                padding: 20px;
                margin-top: 5px;
                width: auto;
                height: 500px;
                overflow: scroll;
                ">
      <div class="table-responsive">


        @foreach($saran as $s)
        <hr>
        <h6 class="text font-weight-bold"><i class="fas fa-user text-gray-500"></i>
          {{ $s ->nama }}
        </h6>
        <a href="{{ $s->email }}">{{ $s->email }}</a>
        <p>
          {{ $s ->saran }} <br><small class="text-dark">
          </small>
        </p>
        <small class="text-dark">{{ $s->waktu }}</small>
        <a href="{{ route('saranin.destroy', $s->id) }}">
          <button class="btn btn-danger">
            <ion-icon name="trash-outline"></ion-icon>
          </button>
        </a>
        @endforeach

      </div>
    </div>
    <!-- ISI KONTEN    -->
    {{-- <div class="col-xl-8 col-md-7 " style="justify-content: center">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0"><i>Masukan dari Costumer</i></h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          @foreach($saran as $s)
          <h6 class="text font-weight-bold"><i class="fas fa-user text-gray-500"></i>
            {{ $s ->nama }}
          </h6>
          <a href="{{ $s->email }}">{{ $s->email }}</a>
          <p>
            {{ $s ->saran }} <br><small class="text-dark">

            </small>
          </p>
          <a href="{{ route('saranin.destroy', $s->id) }}">
            <button class="btn btn-info">
              <ion-icon name="trash-outline"></ion-icon>
            </button>
          </a>
          @endforeach
          <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div> --}}

  </div>

  @endsection
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- FLOT CHARTS -->
  <script src="../../plugins/flot/jquery.flot.js"></script>
  <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
  <script src="../../plugins/flot/plugins/jquery.flot.resize.js"></script>
  <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
  <script src="../../plugins/flot/plugins/jquery.flot.pie.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>