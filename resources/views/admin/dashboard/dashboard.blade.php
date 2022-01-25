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
  .row {
    display: flex;
    flex-direction: row;
  }
</style>

<!-- ISI CONTENT ADMIN -->
<div class="container-fluid">

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
  <div class="container">



    <div class="card-body">
      <div class="row">
        @foreach ($stok as $s)
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-1">
                  <div class="text-x font-weight-bold text-success text-uppercase mb-1">
                    Caffe Bandung</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $s->jml }} Menu </div>
                  <a href="{{ route('menubdg') }}"><button type="button" class="btn btn-success mt-3 btn-sm shadow-sm"><i class="fas fa-info-circle"></i>
                      Detail</button></a>
                </div>
                <div class="col-auto">
                  <i class="fas fa-fw fa-chart-bar fa-3x text-success"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach




        @foreach ($stok2 as $c)
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-1">
                  <div class="text-x font-weight-bold text-info text-uppercase mb-1">
                    Caffe Cimahi</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $c->jml }} Menu </div>
                  <a href="{{ route('menucmh') }}"><button type="button" class="btn btn-info mt-3 btn-sm shadow-sm"><i class="fas fa-info-circle"></i>
                      Detail</button></a>
                </div>
                <div class="col-auto">
                  <i class="fas fa-fw fa-chart-bar fa-3x text-info"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach




        @foreach ($stok3 as $k)
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-1">
                  <div class="text-x font-weight-bold text-primary text-uppercase mb-1">
                    Kopi Portal</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $k->jml }} Menu </div>
                  <a href="{{ route('kopiportal') }}"><button type="button" class="btn btn-primary mt-3 btn-sm shadow-sm"><i class="fas fa-info-circle"></i>
                      Detail</button></a>
                </div>
                <div class="col-auto">
                  <i class="fas fa-fw fa-chart-bar fa-3x text-primary"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>



  </div>
  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-md-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0"><i>Statistik Web</i></h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
         Data Pengunjung Web
         <?php
$filename = 'counter.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();	
 
echo 'Total pengunjung: '.file_get_contents($filename);	
?>
        
          <div class="chart-area">

            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-md-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 ">KETERANGAN</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <p>Data yang tampil di dashboard merupakan data jumlah menu yang tersedia di dalam web, bukan data stok barang
            atau apapun yang bersangkutan dengan inventori</b>.</p>
        </div>
      </div>
    </div>
  </div>




  <!-- /.card -->

  </section>
</div>

@endsection