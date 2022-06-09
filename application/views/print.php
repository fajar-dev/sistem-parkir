<?php $data=$this->session->flashdata('msg');?>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/bootstrap/css/bootstrap.min.css" >

</head>
<body>
<div>
  <div class="row ">
    <div class="col-lg-5">
      <div class="card w-50">
        <h1 class="text-center my-3">KARCIS PARKIR</h1>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td class="py-2 text-center">Plat : <?php echo $data['plat'];?></td>
              </tr>
              <tr>
                <td class="py-2 text-center">Waktu Masuk : <?php echo $data['waktu_masuk'];?></td>
              </tr>
            </tbody>
          </table>
          <hr>
        </div>
        <div class="row mt-3 text-center">
          <div class="col-12 pb-4">
            <p>KODE PARKIR</p>
            <h1 class="font-weight"><?php echo $data['id_parkir'];?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>
</body>
</html>
