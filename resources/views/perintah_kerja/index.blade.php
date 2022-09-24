@extends('layouts.master')

@section('content')

<div class="container">
    <div class="d-flex">
      <h2  class="p-2">Jenis Pekerjaan</h2>
      <div class="ml-auto p-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
      </div>
    </div>
    <b>Pemesanan</p>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Dari Perusahaan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">kuantitas</th>
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
                    <td>{{$perintah->kuantitas}}</td>
                    <td>IDR{{$perintah->harga_unit}}</td>
                    <td>IDR{{$perintah->total}} </td>
                    <td> <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-edit-modal-lg">Edit</a>
                            <a onclick="confirmDelete(this)" class="btn btn-danger" role="button" data-url="#">Delete</a></td>

                </tr>
                @endforeach
        </tbody>
    </table>

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
                       
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Deskripsi:</label>
                          <input name="deskripsi" type="text" class="form-control">
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