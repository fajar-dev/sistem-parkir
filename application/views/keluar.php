<div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Sudah Keluar</div>
          </h1>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data <?php echo $title ?></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>ID-Parkir</th>
                              <th>Jenis</th>
                              <th>Plat</th>
                              <th>Pemilik</th>
                              <th>Waktu Masuk</th>
                              <th>Waktu Keluar</th>
                              <th>Tarif</th>
                              <th>Petugas</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            $no=1;
                            foreach($hasil as $data){
                          ?>
                          <tr>
                              <td>1</td>
                              <td><?php echo htmlentities($data->id_parkir, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->jenis, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->plat, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->pemilik, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->waktu_masuk, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->waktu_keluar, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->tarif, ENT_QUOTES, 'UTF-8');?></td>
                              <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
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