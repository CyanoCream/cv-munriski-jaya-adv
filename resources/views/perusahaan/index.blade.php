@extends('layouts.master')

@section('content')

<div class="container-fluid ml-3">

    <div class="">
        <h2  class="p-2 text-center"> Input Surat Perintah Kerja </h2>
        <div class="ml-auto p-2">

        </div>
      </div>
    <div class="row">
        <div class="col-1"> </div>
        <div class="col-10">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
            <p>Dari :</p>
            <table class="table table-bordered " style="padding-right: 20%" id="myTable">
                <thead class="thead-dark " >
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
                        <th scope="col">Pemberi Kerja</th>
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
                        <td>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-edit-modal-lg{{$p->id}}">Edit</a>
                            <a href="{{ route('perintah.kerja', ['id' => $p->id]) }}" class="btn btn-success">Detail</a>
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
                          <label for="name" class="col-form-label">Nama:</label>
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
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Metode Pemjbayaran:</label>
                          <input type="text" class="form-control" name="metode_pembayaran">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">No Rekening:</label>
                          <input type="text" class="form-control" name="norek">
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
                          <label for="name" class="col-form-label">Kecamatan:</label>
                          <input type="text" class="form-control" name="kecamatan">
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
                    <div class="col-sm-6">
                        <label for="name" class="col-form-label">File Lampiran:</label>
                        <div class="custom-file">
                            <input name="lampiran" type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
