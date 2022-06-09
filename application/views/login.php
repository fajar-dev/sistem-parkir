<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>SIP &mdash; Login</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/demo.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/style.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              Sistem Informasi Parkir
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
              <?php echo $this->session->flashdata('msg') ?>
                <form method="POST" action="<?php echo base_url().'auth/login' ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="<?php echo base_url() ?>dist/modules/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>dist/modules/popper.js"></script>
  <script src="<?php echo base_url() ?>dist/modules/tooltip.js"></script>
  <script src="<?php echo base_url() ?>dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url() ?>dist/modules/moment.min.js"></script>
  <script src="<?php echo base_url() ?>dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="<?php echo base_url() ?>dist/js/sa-functions.js"></script>
  
  <script src="<?php echo base_url() ?>dist/js/scripts.js"></script>
  <script src="<?php echo base_url() ?>dist/js/custom.js"></script>
  <script src="<?php echo base_url() ?>dist/js/demo.js"></script>
</body>
</html>