<div class="row">
  <div class="col-12 col-sm-12 col-md-12">
    <div class="card">
      <div class="card-body">
        <div style="margin-bottom: 1%;margin-top: 1%;padding: 2%;" class="bg-light">
          <label class="control-label" style="margin-bottom: 1%;">Filter Export: </label>
          <form class="form-inline container" style="width: 100%;">
            <div style="margin-right: 1%;">
              <select class="form-control select2 nama_pt_export" style="width: 100%;" multiple="multiple" name="nama_pt_export[]" id="nama_pt_export" data-placeholder="Nama PT" style="width: auto;">
                <?php foreach($perusahaan as $p):?>
                  <option value="<?php echo $p->nama_perusahaan;?>"><?php echo $p->nama_perusahaan;?></option>
                <?php endforeach;?>
              </select>
            </div>

            <?php if($this->session->userdata('level') == 0):?>
            <div style="margin-right: 1%;">
              <select class="form-control select2 dibuat_oleh_export" multiple="multiple" name="dibuat_oleh_export[]" id="dibuat_oleh_export" data-placeholder="User" style="width: auto;">
                  <?php foreach($user as $u):?>
                    <option value="<?php echo $u->id;?>"><?php echo auth_name($u->id);?></option>
                  <?php endforeach; ?>
              </select>
            </div>
            <?php endif; ?>

            <!-- <div style="margin-right: 1%;">
              <button class="btn btn-success export_summary" type="button"><span class="far fa-file-excel">
                Export Summary</span></button>
            </div>
            <div style="margin-right: 1%;">
              <button class="btn btn-success export_kkp" type="button"><span class="far fa-file-excel"> Export
                KKP</span></button>
            </div>
            <div style="margin-right: 1%;">
              <button class="btn btn-success export_calculation" type="button"><span class="far fa-file-excel"> Export
                Calculation</span></button>
            </div> -->
          </form>
          <form class="form-inline container" style="width: 100%;margin-top: 1%;">
            <div style="margin-right: 1%;">
              <button class="btn btn-success export_summary" type="button"><span class="far fa-file-excel">
                Export Summary</span></button>
            </div>
            <div style="margin-right: 1%;">
              <button class="btn btn-success export_kkp" type="button"><span class="far fa-file-excel"> Export
                KKP</span></button>
            </div>
            <div style="margin-right: 1%;">
              <button class="btn btn-success export_calculation" type="button"><span class="far fa-file-excel"> Export
                Calculation</span></button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="loading">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title">Tunggu Ya</h4>
        </button>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="container-fluid">\
          </div>
        </section>
      </div>
    </div>
  </div>
</div>