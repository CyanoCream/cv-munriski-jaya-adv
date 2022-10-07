@extends('layouts.master')

@section('content')

    <!-- <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Area Chart</h3>
        <div class="card-tools">
          <button button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
    </div>

    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Bar Chart</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
    </div>

    @endsection

    @section('addJavascript')
    <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script>
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
          let perusahaan = {{ $perusahaan }}
          let perintah = {{ $perintah }}
          var areaChartData = {
              labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
              datasets: [
                {
                  label               : 'Digital Goods',
                  backgroundColor     : 'rgba(60,141,188,0.9)',
                  borderColor         : 'rgba(60,141,188,0.8)',
                  pointRadius          : false,
                  pointColor          : '#3b8bba',
                  pointStrokeColor    : 'rgba(60,141,188,1)',
                  pointHighlightFill  : '#fff',
                  pointHighlightStroke: 'rgba(60,141,188,1)',
                  data                : [20,20,20,20,20]
                },
                {
                  label               : 'Electronics',
                  backgroundColor     : 'rgba(210, 214, 222, 1)',
                  borderColor         : 'rgba(210, 214, 222, 1)',
                  pointRadius         : false,
                  pointColor          : 'rgba(210, 214, 222, 1)',
                  pointStrokeColor    : '#c1c7d1',
                  pointHighlightFill  : '#fff',
                  pointHighlightStroke: 'rgba(220,220,220,1)',
                  data                : [perusahaan]
                },
              ]
            }

            var areaChartOptions = {
              maintainAspectRatio : false,
              responsive : true,
              legend: {
                display: false
              },
              scales: {
                xAxes: [{
                  gridLines : {
                    display : false,
                  }
                }],
                yAxes: [{
                  gridLines : {
                    display : false,
                  }
                }]
              }
            }

            // This will get the first returned node in the jQuery collection.
            new Chart(areaChartCanvas, {
              type: 'line',
              data: areaChartData,
              options: areaChartOptions
            });

            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[]
            var temp1 = areaChartData.datasets[]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
              responsive              : true,
              maintainAspectRatio     : false,
              datasetFill             : false
            }

            new Chart(barChartCanvas, {
              type: 'bar',
              data: barChartData,
              options: barChartOptions
            })
    </script> -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/main.js"></script>

    <div class="page-wrapper" style=" margin: 0 0 0 40px; padding: 0;">
      <div class="card-body p-5">
        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
            
          <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify- between p-4">
                    <i class="fa fa-regular fa-envelope fa-3x text-primary"></i>
                    <!-- <i class="fa-regular fa-folders"></i> -->
                    <div class="ms-3">
                        <p class="mb-2">Surat Perintah</p>
                        <h6 class="mb-0">200</h6>
                    </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-user-tie fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Pekerjaan</p>
                      <h6 class="mb-0">500</h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-6">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                      <div class="row">
                        <h6 class="">Jhon Doe</h6>
                        <span>Short message goes here...</span>
                      </div>
                      <small>15 minutes ago</small>
                      
                </div>
              </div>
          </div>
      </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-md-6 grid-margin stretch-card">
                      <div class="card" style="background-color:#32537f;">
                        <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                            <div class="card-body" >                  
                              <div class="row">
                                <div class="col-8 text-white p-3">
                                  <h3>Selamat Pagi</h3>
                                  <p class="text-white">Kam 01 Sep 2022 09:50:35</p>
                                  <!-- <p class="text-white font-weight-100 mb-0"> Nama : Lorem, ipsum dolor. </p>
                                  <p class="text-white font-weight-100 mb-0"> Divisi : Lorem, ipsum. </p> -->
                                </div>
                                <div class="col-4">
                                  <h2 class="mb-0 font-weight-normal">31<sup>°c</sup><img src="https://66.media.tumblr.com/0fd45ddb0758e1098b85d1ce73a59e41/tumblr_inline_pro8yxwHit1veqc64_540.png" style="height:53px; width:50px;"></img></h2>
                                </div>
                                <img src="https://media.istockphoto.com/vectors/business-leader-holding-corporate-meeting-with-team-vector-id1298114841?k=20&m=1298114841&s=612x612&w=0&h=-ulHtxxq-HRIEIATpsfHxpfcAeKOp5alxZih08qQtOA=" alt="people" style=" border-radius: 20px; margin-bottom:20px;">
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="mb-5 mt-3" style="color:#32537f;">Jenis Pekerjaan</h4>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>User</th>
                                <th>Product</th>
                                <th>Sale</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Jacob</td>
                                <td>Photoshop</td>
                                <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                                <td><label class="badge badge-danger">Pending</label></td>
                              </tr>
                              <tr>
                                <td>Messsy</td>
                                <td>Flash</td>
                                <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                                <td><label class="badge badge-warning">In progress</label></td>
                              </tr>
                              <tr>
                                <td>John</td>
                                <td>Premier</td>
                                <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                                <td><label class="badge badge-info">Fixed</label></td>
                              </tr>
                              <tr>
                                <td>Peter</td>
                                <td>After effects</td>
                                <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                                <td><label class="badge badge-success">Completed</label></td>
                              </tr>
                              <tr>
                                <td>Dave</td>
                                <td>53275535</td>
                                <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                                <td><label class="badge badge-warning">In progress</label></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Judul</h6>
                        <a href="">Show All</a>
                    </div>
                    <!-- <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Judul</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center  py-3">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <!-- <div class="d-flex mb-2">
                                <input class="form-control bg-dark border-0" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
      </div>
    </div>


@endsection

@section("addJavascript")
<script src="{{ asset('js/main.js') }}"></script>
@endsection