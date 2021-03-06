<div class="modal fade" id="editPerusahaanModal">
  <div class="modal-dialog modal-md">
    <form enctype="multipart/form-data" name="form" role="form" id="edit_perusahaan_modal">
      <input class="form-control" id="edit_id_perusahaan" type="hidden" name="edit_id_perusahaan">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Edit Perusahaan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Perusahaan</label>
                      <input class="form-control" id="edit_nama_perusahaan" type="text" name="edit_nama_perusahaan">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" id="edit_alamat" type="password" name="edit_alamat"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Telepon</label>
                      <input class="form-control" id="edit_telepon" type="text" name="edit_telepon">
                    </div>
                  </div>
                </div>
            </div>
          </section>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" id="editPerusahaan" class="btn btn-info col-md-12">Save</button>
        </div>
      </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>