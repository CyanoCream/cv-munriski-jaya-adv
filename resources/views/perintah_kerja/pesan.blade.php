@extends('layouts.master')

@section('content')

{{-- <a href="#" id="print" onclick="javascript printlayer('div-id-name')">Print T</a> --}}
<div class="container" id="div-id-name">

  <h2 class="p-2 text-center"> Jenis Pekerjaan </h2>
    <br>
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">

        <div class="card-body">
            <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
            <p>Pemesanan Dari : {{$perusahaan[0]->nama}} </p>
          <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Merek</th>
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
                            <td scope="col">{{ ++$i }}</td>
                            <td scope="col">{{ $perintah->merek }}</td>
                            <td>{{$perintah->deskripsi}}</td>
                            <td>{{$perintah->kuantitas}}</td>
                            <td scope="col">{{ $perintah->jenis }}</td>
                            <td>Rp.{{$perintah->harga_unit}}</td>
                            <td>Rp.{{$perintah->total}} </td>
                            <td>
                            <div class="btn-group">
                                <a href="#" data-toggle="dropdown" class="m-2">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-edit-modal-lg{{$perintah->id}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i> edit</a>
                                    <a class="dropdown-item" href="{{route('delete.perintah',['id' =>$perintah->id])}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i> delete</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @include('perintah_kerja.edit')
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
        <div class="modal-dialog modal-xl">
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
                        <div class="col-sm-2">
                            <input type="hidden" name="perusahaan_id" value="{{$perusahaan[0]->id}}">
                            <div class="form-group">
                              <label for="name" class="col-form-label">Merk:</label>
                              <input name="merek" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                              <label for="name" class="col-form-label">Deskripsi:</label>
                              <input name="deskripsi" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                              <label for="Kuantitas" class="col-form-label">Kuantitas:</label>
                              <input name="kuantitas" type="number" class="form-control" min="1">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                              <label for="jenis" class="col-form-label">Jenis:</label>
                              <input name="jenis" type="text" class="form-control" min="1">
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
    function printlayer(Layer){
        var generator = window.open('', 'name', '');
        var layetext = document.getElementBuId(layer)
        generator.document.write(layetext.innerHtml.replace("Print Me"));

        generator.document.close();
        generator.print();
        generator.close();
    }

   public function mytable()
   {
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
   }

</script>
@endsection
