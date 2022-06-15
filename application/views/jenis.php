<div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Jenis Kendaraan</div>
          </h1>
          <div class="row">
            <div class="col-12">
            <?php echo $this->session->flashdata('msg') ?>
              <div class="card">
                <div class="card-header">
                <?php if($this->session->userdata('level')==1 ) { ?>
                  <div class="float-right">
                      <button data-toggle="modal" data-target="#tambahjenis"  class="btn btn-primary active"><i class="ion ion-plus"></i> Tambah Kendaraan</button>
                  </div>
                <?php } ?>
                  <h4>Data <?php echo $title ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Jenis</th>
                              <th>Tarif</th>
                              <?php if($this->session->userdata('level')==1 ) { ?>
                                <th>Aksi</th>
                              <?php } ?>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            $no=1;
                            foreach($hasil as $data){
                          ?>
                          <tr>
                              <td><?php echo $no++; ?> </td>
                              <td><?php echo htmlentities($data->jenis, ENT_QUOTES, 'UTF-8');?></td>
                              <td>Rp. <?php echo number_format($data->tarif);?></td>
                              <?php if($this->session->userdata('level')==1 ) { ?>
                                <td>
                                  <button data-toggle="modal" data-target="#edit<?php echo $data->id ?>" class="btn btn-warning"><i class="ion ion-edit"></i></button>
                                  <a href="<?php echo site_url()?>page/hapus_jenis/<?php echo $data->id ?>" class="btn btn-danger btn-del"><i class="ion ion-ios-trash"></i></a>
                                </td>
                              <?php } ?>
                          </tr>
                          <?php
                            }
                          ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

                          <?php
                            $no=1;
                            foreach($hasil as $data){
                          ?>
                                <div class="modal fade" id="edit<?php echo $data->id ?>"  tabindex="99" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <form action="<?php echo base_url('page/edit_jenis') ?>" method="post" class="needs-validation" novalidate="">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edit Kendaraan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <input type="hidden" value="<?php echo $data->id ?>" name="id">
                                          <div class="form-group">
                                            <label>Jenis</label>
                                            <input type="text" name="jenis" class="form-control" value="<?php echo htmlentities($data->jenis, ENT_QUOTES, 'UTF-8');?>" required>
                                            <div class="invalid-feedback">
                                              Harap Diisi
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label>Tarif</label>
                                            <input type="number" name="tarif" class="form-control" value="<?php echo htmlentities($data->tarif, ENT_QUOTES, 'UTF-8');?>" required>
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
                          <?php
                            }
                          ?>      