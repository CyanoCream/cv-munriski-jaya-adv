
<!-- Edit modal -->
<div class="modal fade bd-edit-modal-lg{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{route('update.perusahaan', ['id' => $p->id])}}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">No SPK:</label>
                          <input type="text" class="form-control" name="nospk" value="{{$p->nospk}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Nama Perusahaan:</label>
                          <input type="text" class="form-control" name="nama" value="{{$p->nama}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="Tanggal" class="col-form-label">Tanggal:</label>
                          <input required name="tanggal" type="date" class="form-control" value="{{$p->tanggal}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Nama Pemberi Kerja:</label>
                          <input type="text" class="form-control" name="pemberi_kerja" value="{{$p->pemberi_kerja}}">
                        </div>
                    </div>
                    <!-- <div class="col-sm-6">
                        <div class="form-group">
                          <label for="status_pembayaran" class="col-form-label">Status Pembayaran:</label>
                              <select class="form-control" name="status_pembayaran" id="status_pembayaran">
                              <option value="Belum dibayar">Belum Dibayar</option>
                              <option value="Lunas">Lunas</option>
                              </select>
                        </div>
                    </div> -->
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Alamat:</label>
                          <input type="text" class="form-control" name="alamat" value="{{$p->alamat}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Provinsi:</label>
                          <input type="text" class="form-control" name="provinsi" value="{{$p->provinsi}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">kabupaten/Kota:</label>
                          <input type="text" class="form-control" name="kota" value="{{$p->kota}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="col-form-label">Kode Pos:(berupa angka)*</label>
                          <input type="text" class="form-control" name="kodepos" value="{{$p->kodepos}}">
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

{{-- edit modal status pembayaran --}}

<div class="modal fade bd-edit-modal-lg1{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{route('update.perusahaan', ['id' => $p->id])}}">
                @csrf
                @method('put')
                <div class="col-sm-12">
                        <div class="form-group">
                          <label for="status_pembayaran" class="col-form-label">Status Pembayaran:</label>
                              <select class="form-control" name="status_pembayaran" id="status_pembayaran" ">
                              <option value="Belum dibayar">Belum Dibayar</option>
                              <option value="Lunas">Lunas</option>
                              </select>
                        </div>
                    </div>
                            <input type="hidden" class="form-control" name="nospk" value="{{$p->nospk}}">
                            <input type="hidden" class="form-control" name="nama" value="{{$p->nama}}">
                            <input required name="tanggal" type="hidden" class="form-control" value="{{$p->tanggal}}">
                            <input name="npwp" type="hidden" class="form-control" value="{{$p->npwp}}">
                            <input type="hidden" class="form-control" name="pemberi_kerja" value="{{$p->pemberi_kerja}}">
                            <input type="hidden" class="form-control" name="alamat" value="{{$p->alamat}}">
                            <input type="hidden" class="form-control" name="provinsi" value="{{$p->provinsi}}">
                            <input type="hidden" class="form-control" name="kota" value="{{$p->kota}}">
                            <input type="hidden" class="form-control" name="kodepos" value="{{$p->kodepos}}">
                            <input type="hidden" class="form-control" name="invoice" value="{{$p->invoice}}">

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
