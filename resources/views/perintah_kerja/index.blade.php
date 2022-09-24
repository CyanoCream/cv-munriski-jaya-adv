@extends('layouts.master')

@section('content')
{{-- {{$perusahaan}} --}}
<div class="container">
    <div class="d-flex">
      <h2  class="p-2">Jenis Pekerjaan</h2>
      <div class="ml-auto p-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
      </div>
    </div>
    <p>Pemesanan</p>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Dari Perusahaan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">kuantitas</th>
                <th scope="col">Harga Unit</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($perintah_kerja as $pk)

                <tr>
                    <td scope="col">1</td>
                    <td>{{$pk->nama}}</td>
                    <td>{{$pk->deskripsi}}</td>
                    <td>{{$pk->kuantitas}} Buah</td>
                    <td>IDR {{$pk->harga_unit}}</td>
                    <td>IDR {{$pk->total}}</td>

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
            <form method="post" action="{{route('store.perintah.kerja')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        {{-- <input type="text" name="perusahaan_id" value="{{$perusahaan->id}}" hidden> --}}
                        <div class="form-group">
                          <label for="name" class="col-form-label">Nama Perusahaan:</label>
                          {{-- <input type="text" class="form-control" name="perusahaan" value="{{$perusahaan->nama}}" disabled> --}}
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
