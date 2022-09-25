
    <!-- Add -->
    <div class="modal fade bd-edit-modal-lg{{$perintah->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('pk.update', ['id'=>$perintah->id])}}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Merk:</label>
                                <input name="merek" type="text" class="form-control" value="{{ $perintah->merek }}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Deskripsi:</label>
                                <input name="deskripsi" type="text" class="form-control" value="{{$perintah->deskripsi}}">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="Kuantitas" class="col-form-label">Kuantitas:</label>
                                <input name="kuantitas" type="number" class="form-control" value="{{$perintah->kuantitas}}" min="1">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="jenis" class="col-form-label">Jenis:</label>
                                <input name="jenis" type="text" class="form-control" value="{{ $perintah->jenis }}">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="Harga" class="col-form-label">Harga Unit:</label>
                                <input name="harga_unit" type="number" class="form-control" value="{{$perintah->harga_unit}}" min="0">
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
