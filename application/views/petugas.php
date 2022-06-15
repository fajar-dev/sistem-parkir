<div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Petugas</div>
          </h1>
          <div class="row">
            <div class="col-12">
            <?php echo $this->session->flashdata('msg') ?>
              <div class="card">
                <div class="card-header">
                  <div class="float-right">
                      <button data-toggle="modal" data-target="#petugas"  class="btn btn-primary active"><i class="ion ion-plus"></i> Tambah Petugas</button>
                  </div>
                  <h4>Data <?php echo $title ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                      <thead>
                          <tr>
                              <th>ID Petugas</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Email</th>
                              <th>NO HP</th>
                              <th>Level</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                            foreach($hasil as $data){
                          ?>
                          <tr>
                              <td><?php echo htmlentities($data->id_petugas, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->jk, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php if($data->level == 1){echo'Manager';} elseif($data->level == 2){echo'petugas';}?></td>
                              <td>
                                <a href="<?php echo site_url()?>page/hapus_petugas/<?php echo $data->id_petugas ?>" class="btn btn-danger btn-del"><i class="ion ion-ios-trash"></i></a>
                              </td>
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
      