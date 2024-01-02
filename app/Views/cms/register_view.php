<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
  <base href="<?= base_url('assets')?>"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <h2 class="card-header"><?=lang('Auth.register')?></h2>
    
</div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register New User</p>

      <?= view('Myth\Auth\Views\_message_block') ?>

      <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>
        <div class="input-group mb-3">
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
                name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
        </div>
        </div>
         <div class="input-group mb-3">
            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
            <div class="input-group-append">
            <div class="input-group-text">
          <span class="fas fa-user"></span>
        </div>
        </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
            name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
            name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?>
            <a href="<?= url_to('cms/userlist')?>"></a>
          </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <br>
      <small><a href="<?= base_url('cms/userlist')?>" class="text-center"><?=lang('Kembali')?></a></small>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
