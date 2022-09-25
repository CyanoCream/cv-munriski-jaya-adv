@extends('layouts.master')

@section('content')

<div class="container-fluid ml-3">

    <br>
<h2 class="p-2 text-center"> Input Surat Perintah Kerja </h2><br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
        <p>Dari :</p>
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
                <th scope="col">NPWP</th>
                <th scope="col">Nama Pemberi Kerja</th>
                <th scope="col">Status Pembayaran</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $perusahaan as $p )
                <tr>
                    <td scope="row">{{$loop->index + 1}}</td>
                    <td>{{$p->nospk}}</td>
                    <td>{{$p->invoice}}</td>
                    <td>{{ date('d F y', strtotime($p->tanggal)) }}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->provinsi}}</td>
                    <td>{{$p->kota}}</td>
                    <td>{{$p->kodepos}}</td>
                    <td>{{$p->npwp}}</td>
                    <td>{{$p->pemberi_kerja}}</td>
                    <td>{{$p->status_pembayaran}}</td>
                    <td>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-edit-modal-lg{{$p->id}}">Edit</a>
                        <a href="{{ route('pesan', ['id' => $p->id]) }}" class="btn btn-success">Detail</a>
                        <a onclick="confirmDelete(this)" class="btn btn-danger" role="button" data-url="{{ route('delete.perusahaan', ['id' => $p->id]) }}">Delete</a>
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
                          <label for="NPWP" class="col-form-label">NPWP:</label>
                          <input name="npwp" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="pemberi_kerja" class="col-form-label">Pemberi Kerja:</label>
                          <input type="text" class="form-control" name="pemberi_kerja">
                        </div>
                    </div>
                    <div class="col-sm-12">
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
                          <label for="name" class="col-form-label">kabupaten/Kota:</label>
                          <input type="text" class="form-control" name="kota">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Kode Pos:</label>
                          <input type="text" class="form-control" name="kodepos">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Invoice:</label>
                          <input type="text" class="form-control" name="invoice">
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
<script>
    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title' : 'Konfirmasi Hapus Perusahaan',
            'text' : 'Apakah kamu yakin?',
            'dangermode' : 'true',
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
