
<!-- Modal -->
<div class="modal fade" id="tambahjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url('page/tambah_jenis') ?>" method="post" class="needs-validation" novalidate="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kendaraan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Jenis</label>
            <input type="text" name="jenis"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
          <div class="form-group">
            <label>Tarif</label>
            <input type="number" name="tarif"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>