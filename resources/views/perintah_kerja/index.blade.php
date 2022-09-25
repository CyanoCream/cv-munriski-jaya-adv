@extends('layouts.master')

@section('content')

<div class="container">
<br>
<h2 class="p-2 text-center"> Jenis Pekerjaan </h2><br>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
        <p>Pemesanan</p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Dari Perusahaan</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">kuantitas</th>
                    <th scope="col">Dalam Bentuk</th>
                    <th scope="col">Harga Unit</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($perintah_kerja as $perintah)
                    <tr>
                        <td scope="col">{{++$i}}</td>
                        <td>{{$perintah->perusahaan->nama}}</td>
                        <td>{{$perintah->deskripsi}}</td>
                        <td>Merk</td>
                        <td>{{$perintah->kuantitas}}</td>
                        <td>Dalam Bentuk</td>
                        <td>IDR{{$perintah->harga_unit}}</td>
                        <td>IDR{{$perintah->total}} </td>
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-edit-modal-lg">Edit</a>
                            <a onclick="confirmDelete(this)" class="btn btn-danger" role="button" data-url="#">Delete</a>
                        </td>
                    </tr>
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
            <form method="post" action="{{route('perintah.kerja.create')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        
                        <div class="form-group">
                          <label for="name" class="col-form-label">Nama Perusahaan:</label>
                       merk
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Deskripsi:</label>
                          <input name="deskripsi" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Merk:</label>
                          <input name="merek" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                          <label for="Kuantitas" class="col-form-label">Kuantitas:</label>
                          <input name="kuantitas" type="number" class="form-control" min="1">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                          <label for="" class="col-form-label">Dalam Bentuk:</label>
                          <label for="jenis" class="col-form-label">Status Pembayaran:</label>
                          <select name="jenis" id="jenis">
                              <option value="PCS">PCS</option>  
                              <option value="LUSIN">LUSIN</option>
                              <option value="PACK">PACK</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                          <label for="Harga" class="col-form-label">Harga Unit:</label>
                          <input name="harga_unit" type="number" class="form-control">
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

</div>


@stop

@section('css')

@stop

@section('js')

@stop
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