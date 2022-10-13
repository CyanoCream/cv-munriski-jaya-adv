@extends('layouts.master')

@section('content')
    <div class="m-4 p-1">
            <div class="card text-left justify-content-center pl-5"
                style="border-radius: 20px;height: 300px;background-color:#32537f;">
                <h3 id="lblGreetings2"></h3>
                <h1 class="text-white">Hallo.. {{Auth::user()->name}}, 
                    
                @if($jam > '05:30' && $jam < '10:00') 
                Selamat Pagi 
                @elseif($jam >= '10:00' && $jam < '15:00') 
                Selamat Siang
                @elseif($jam < '18:00') 
                Selamat Sore
                @else
                Selamat malam
                @endif
            </h1>
                <p class="text-white">Kamu bisa saja mengalami pahit getirnya perjalanan hidup,tetapi kamu <br>
                    tidak boleh berhenti dan tidak boleh kehilangan impianmu.</p>
                <br>
                <p class="text-white">Sedikit kemajuan setiap hari menambah hasil yang besar!</p>
            </div>
    </div>
            <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/main.js"></script>

    <div class="page-wrapper" style=" padding: 0;">
      <div class="card-body content-center mr-2">
        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="row g-3">
            
              <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-regular fa-envelope fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Pemesanan</p>
                      <h6 class="mb-0">{{DB::table('perintah_kerja')->count()}}</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-user-tie fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Client</p>
                      <h6 class="mb-0">{{DB::table('perusahaan')->count()}}</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-pie-chart fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Belum Terbayar</p>
                      <h6 class="mb-0">{{DB::table('perusahaan')->where('status_pembayaran', 'Lunas')->count()}}</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-dollar fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Pemesanan</p>
                      <h6 class="mb-0">{{DB::table('perusahaan')->where('status_pembayaran', 'Belum dibayar')->count()}}</h6>
                  </div>
                </div>
              </div>
          </div>
      </div>
                  <!-- Recent Sales Start -->
                  <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Data Client yg belum terbayar</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                <th scope="col">No</th>
                                <th scope="col">No SPK</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nama Pemberi Kerja</th>
                                                
                            </thead>
                            @foreach($perusahaan as $p)
                            <tbody>
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$p->nospk}}</td>
                                    <td>{{ date('d F y', strtotime($p->tanggal)) }}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->alamat}}</td>
                                    <td>{{$p->pemberi_kerja}}</td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

      </div>
    </div>


        </div>
@endsection
@section('addJavascript')
<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>
<script>

</script>

@endsection
