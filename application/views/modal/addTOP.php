<div class="modal fade" id="addTOPModal">
  <div class="modal-dialog modal-md">
    <form enctype="multipart/form-data" name="form" role="form" id="add_top_modal">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Term of Payment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>TOP</label>
                    <input class="form-control wajib_isi" id="top" type="number" name="top" placeholder="TOP" oninput="this.className = 'form-control wajib_isi'">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input class="form-control wajib_isi" id="keterangan" type="text" name="keterangan" placeholder="Keterangan" oninput="this.className = 'form-control wajib_isi'">
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="submit" id="addTOP" class="btn btn-info col-md-12">Submit</button>
      </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>