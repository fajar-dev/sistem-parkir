<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Sistem Informasi Parkir</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

 
  <script src="<?php  echo base_url() ?>dist/modules/jquery.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/popper.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/tooltip.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/js/sa-functions.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/sweetalert.min.js"></script>
  
  <script src="<?php  echo base_url() ?>dist/modules/chart.min.js"></script>
  <script src="<?php  echo base_url() ?>dist/modules/summernote/summernote-lite.js"></script>

  <script src="<?php  echo base_url() ?>dist/js/scripts.js"></script>
  <script src="<?php  echo base_url() ?>dist/js/custom.js"></script>
  <script src="<?php  echo base_url() ?>dist/js/demo.js"></script>
  <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
  </script>
  <script>
    $('.btn-del').on('click',function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'Yakin ingin menghapus data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'delete'
        }).then((result) => {
            if (result.value) {
            document.location.href = href;
            }
        })
        })
    </script>
</body>
</html>