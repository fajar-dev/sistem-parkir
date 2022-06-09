<div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-success">
                  <i class="ion ion-checkmark-round"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sedang Parkir</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $in ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-danger">
                  <i class="ion ion-close-round"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Sudah Keluar</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $out ?>
                  </div>
                </div>
              </div>
            </div>                
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <form method="post" action="<?php echo base_url('page/cekin') ?>" class="needs-validation" novalidate="">
                <div class="card">
                  <div class="card-header">
                    <h4>Check-in Kendaraan</h4>
                  </div>
                  <div class="card-body">
                    <input type="hidden" name="petugas" value="<?php echo $this->session->userdata('id') ?>">
                    <div class="form-group">
                      <label>ID Parkir</label>
                      <input type="text" name="parkir" value="p-<?php echo mt_rand(0, 9999); ?>"  class="form-control" readonly>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Waktu Masuk</label>
                      <input type="datetime-local" name="waktu"  class="form-control" required>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Nama Pemilik</label>
                      <input type="text" name="pemilik" class="form-control" required>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Plat Nomor</label>
                      <input type="text" name="plat" class="form-control" required>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Jenis Kendaraan</label>
                      <select class="form-control" name="jenis" id="exampleFormControlSelect1">
                          <?php
                            $no=1;
                            foreach($hasil as $data){
                          ?>
                            <option value="<?php echo $data->id;?>"><?php echo htmlentities($data->jenis, ENT_QUOTES, 'UTF-8');?></option>
                          <?php
                            }
                          ?>
                      </select>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Check-In </button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Check-out Kendaraan</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="<?php echo base_url() ?>page/cek" class="needs-validation" novalidate="">
                    <div class="input-group mb-3">
                      <input type="text" name="cari" class="form-control" value="<?php echo $this->session->flashdata('search') ?>" placeholder="ID Parkir" required>
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                  </form>
                  <?php echo $this->session->flashdata('hasil') ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>