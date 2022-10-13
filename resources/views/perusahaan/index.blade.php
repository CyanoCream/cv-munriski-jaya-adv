@extends('layouts.master')

@section('content')

<div class="container-fluid ml-3">

    <br>
<h2 class="p-2 text-center"> Input Surat Perintah Kerja </h2><br>
<p class="ml-3">Dari :</p>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="input-group" {{-- style="margin-left:600px;" --}}>
            <form action="{{route('perusahaan')}}" method="get">
                @csrf
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="border:1px solid #7497c6; border-radius:20px;">
                    <input name="cari" style="background-color:transparent; border-color:transparent;" type="text" class="form-control" id="navbar-search-input" placeholder="Search No SPK" aria-label="search" aria-describedby="search">
                    <button type="submit" class="fa fa-search"  style="background-color:transparent; border-color:transparent; color:#5276a2;"></button>
                </div>
            </form>
            <button type="button" class="btn-group ml-auto btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
        </div>

        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No SPK</th>
                <th scope="col">No Invoice</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kota</th>
                <th scope="col">Kode Pos</th>
                <th scope="col">Nama Pemberi Kerja</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Cetak Laporan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $perusahaan as $p )
                <tr>
                    <td scope="row">{{$loop->index + 1}}</td>
                    <td>{{$p->nospk}}</td>
                    @if($p->status_pembayaran == 'Lunas')
                    <td>MRJ-{{ date('dmy', strtotime($p->created_at)) }}-{{$p->id}}</td>
                    @else
                    <td class="text-danger text-bold">Proses Transaksi</td>
                    @endif
                    <td>{{ date('d F y', strtotime($p->tanggal)) }}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->provinsi}}</td>
                    <td>{{$p->kota}}</td>
                    <td>{{$p->kodepos}}</td>
                    <td>{{$p->pemberi_kerja}}</td>
                        @if ($p->status_pembayaran == 'Lunas')
                        <td class="text-success">
                            <b><i class="fa fa-check-circle mr-1" aria-hidden="true"></i>{{$p->status_pembayaran}}</b>
                            <a class="mr-2" href="#" data-toggle="modal" data-target=".bd-edit-modal-lg1{{$p->id}}">
                                <i class="fa fa-pencil mr-2" aria-hidden="true"></i></a>
                        </td>
                        @else
                        <td class="text-danger">
                            <b><i class="fa fa-times-circle mr-1" aria-hidden="true"></i>{{$p->status_pembayaran}}</b>

                            <a class="mr-2" href="#" data-toggle="modal" data-target=".bd-edit-modal-lg1{{$p->id}}">
                                <i class="fa fa-pencil mr-2" aria-hidden="true"></i></a>
                        </td>
                        @endif
                    @if ($p->status_pembayaran == 'Lunas')
                    <td>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <a href="#" data-toggle="dropdown" class="m-2">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" target="_blank" href="{{ route('berita', ['id' => $p->id]) }}">
                                    <i class="fa fa-print" aria-hidden="true"></i> Berita Acara</a>
                                <a class="dropdown-item" target="_blank" href="{{route('invoice', ['id'=>$p->id])}}">
                                    <i class="fa fa-print" aria-hidden="true"></i>Invoice</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('kwitansi', ['id'=>$p->id])}}">
                                    <i class="fa fa-print" aria-hidden="true"></i>Kwitansi</a>
                               
                            </div>
                        </div>
                    </td>
                      @else
                      <td>Transaksi belum selesai</td>
                      @endif
                    <td>
                      
                      
                    <a href="{{route('pesan', ['id'=>$p->id])}}" style="margin-left: 1px;"  class="btn btn-warning mb-2" role="button" data-url="{{ route('delete.perusahaan', ['id' => $p->id]) }}">Detail*</a>
                      <button type="button" class="btn btn-primary md-2" style="margin-left: 1px;" data-toggle="modal" data-target=".bd-edit-modal-lg{{$p->id}}">Edit</button>
                      <a href="{{route('delete.perusahaan',['id' =>$p->id])}}" style="margin-left: 1px;" onclick="confirmDelete(this)" class="btn btn-danger mt-2" role="button" data-url="{{ route('delete.perusahaan', ['id' => $p->id]) }}">Delete</a>

                    </td>
                </tr>
                @include('perusahaan.edit')
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Add -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{route('store.perusahaan')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">No SPK:</label>
                          <input type="text" class="form-control" name="nospk">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Nama Perusahaan:</label>
                          <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="Tanggal" class="col-form-label">Tanggal:</label>
                          <input name="tanggal" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="pemberi_kerja" class="col-form-label">Pemberi Kerja:</label>
                          <input type="text" class="form-control" name="pemberi_kerja">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Alamat:</label>
                          <input type="text" class="form-control" name="alamat">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Provinsi:</label>
                          <input type="text" class="form-control" name="provinsi">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Kabupaten/Kota:</label>
                          <input type="text" class="form-control" name="kota">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Kode Pos: (berupa angka)*</label>
                          <input type="text" class="form-control" name="kodepos">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>



@endsection

@section("addJavascript")
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Hapus k',
            'text' : 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode' : true,
            'buttons' : true
        }).then(function(value) {
            if (value) {
                window.location = url;
            }
        })
    }

   public function mytable()
   {
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
   }

</script>
@endsection
