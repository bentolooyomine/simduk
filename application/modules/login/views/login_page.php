<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $setting[0]->nama_aplikasi?>  | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/template/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template/');?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b><?= $setting[0]->nama_aplikasi?> </b><?= $setting[0]->version_role?></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign In Application</p>

      <form id="login" method="POST">
        <div class="input-group mb-3">
        <input id='nik' type="text"  name="nik" class="form-control" placeholder="NIK" required>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <!-- <button type="submit" class="btn btn-primary btn-block">Login</button> -->
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
             
          <a onclick="login()" class="btn btn-primary btn-block">Sign In</a>
             
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="<?= base_url('login/rfid')?>" class="btn btn-block btn-secondary">
          <i class="fa fa-id-card"></i> Sign in using RFID
        </a>
        <a href="<?= base_url('login/qrcode')?>" class="btn btn-block btn-danger">
          <i class="fa fa-qrcode"></i> Sign in QR Code
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?= base_url('login/lupa')?>">Lupa Password?</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('login/daftar')?>" class="text-center">Belum Punya Akun?</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/template/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template/');?>dist/js/adminlte.min.js"></script>

<script src="<?= base_url('assets/template/');?>dist/js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.all.min.js"></script>
</body>
</html>

<script>

url ='<?= base_url('login/auth')?>';

  
</script>
