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

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('assets/template/') ?>index2.html"><b><?= $setting[0]->nama_aplikasi?></b> </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login to start your session</p>

      <form id="login" method="POST">

        <div class="input-group mb-3">
          <input type="username"  name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
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
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

   

      <p class="mb-1">
        Apabila Kesulitan Login Aplikasi Silahkan Hubungi <a href="mailto:bennydanangkurniawan@gmail.com">Admin</a>
      </p>
      <p class="mb-0">
       
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/template/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template/');?>dist/js/adminlte.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.all.min.js"></script>
</body>
</html>
<script>

url ='<?php echo base_url('login/auth');?>';
function login(url) {
	$("#login").submit(function(e) {
         e.preventDefault();
         $.ajax({
             url: url,
             type: 'POST',
             data: $(this).serialize(),             
             success: function(data) {    
		      
				let obj = JSON.parse(data);      
				
				s =obj['state']; 
				var st ='';
				if(s == '200'){
					st ='success';
				}else {
					st ='error';
				}
				Swal.fire({
				icon: st ,
				title: st,
				text: obj['message'],
				footer: '<a href="">Terimakasih</a>',
				timer: 2000
				})   

				setTimeout(function () {
					window.location.href = obj['url']; 
					}, 2000); 
				$("#login").trigger("reset");
             }
         });
     });
}

  



</script>
