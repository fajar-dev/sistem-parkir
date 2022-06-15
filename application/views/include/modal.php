
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

<!-- Modal -->
<div class="modal fade" id="petugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url('page/tambah_petugas') ?>" method="post" class="needs-validation" novalidate="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
          <div class="form-group">
            <label>Jenis Kendaraan</label>
            <select class="form-control" name="jk" id="exampleFormControlSelect1">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">
              Please fill in the title
            </div>
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="number" name="hp"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
          <div class="form-group">
            <label>password</label>
            <input type="password" name="pass"  class="form-control" required>
            <div class="invalid-feedback">
              Harap Diisi
            </div>
          </div>
          <div class="form-group">
            <label>Level</label>
            <select class="form-control" name="level" id="exampleFormControlSelect1">
              <option value="1">Manager</option>
              <option value="2">Petugas</option>
            </select>
            <div class="invalid-feedback">
              Please fill in the title
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
                  