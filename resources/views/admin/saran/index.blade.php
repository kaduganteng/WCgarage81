@extends('layouts.main')
@section('tittle','Admin Garage 81')
@section('content')

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
  <div class="col-xl-8 col-md-7 " style="justify-content: center">
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
        @endforeach
        <div class="chart-area">
          <canvas id="myAreaChart"></canvas>
        </div>
      </div>
    </div>
  </div>

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