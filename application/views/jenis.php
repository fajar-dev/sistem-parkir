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
                  <div class="float-right">
                      <button data-toggle="modal" data-target="#tambahjenis"  class="btn btn-primary active"><i class="ion ion-plus"></i> Tambah Kendaraan</button>
                  </div>
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
                              <th>Aksi</th>
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
                              <td><?php echo htmlentities($data->tarif, ENT_QUOTES, 'UTF-8');?></td>
                              <td>
                                <!-- <button data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="ion ion-edit"></i></button> -->
                                <a href="<?php echo site_url()?>page/hapus_jenis/<?php echo $data->id ?>" class="btn btn-danger btn-del"><i class="ion ion-ios-trash"></i></a>
                              </td>
                                  <!-- Modal
                                  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <form action="" method="post" class="needs-validation" novalidate="">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kendaraan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <label>Jenis</label>
                                              <input type="text" name="title" value=""  class="form-control" value="" required>
                                              <div class="invalid-feedback">
                                                Harap Diisi
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Tarif</label>
                                              <input type="number" name="title"  class="form-control" value="" required>
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
                                  </div> -->
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