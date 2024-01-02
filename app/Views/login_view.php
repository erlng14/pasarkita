<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CMS | Login</title>
    <base href="<?php echo base_url('assets')?>" />
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Urbanist:wght@100;200;300&display=swap"/>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="/../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="/../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition login-page" style="background-color: gray;">
    <div class="login-logo">
    <h2 class="card-header">CMS Login</h2>
    </div>
    <div class="login-box" style="border: 3px;">
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Login Untuk Masuk Ke CMS</p>
          <?= view('Myth\Auth\Views\_message_block') ?>

          <form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
            
            <div class="input-group mb-3">
              <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.emailOrUsername')?>" />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input
                name="password"
                type="password"
                class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                placeholder="<?=lang('Auth.password')?>"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            
              <!-- /.col -->
              <div class="row">
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" <?=lang('Auth.loginAction')?>>Login
                  <a href="<?= base_url('cms/dashboard')?>"></a>
              </button>
              </div>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <br>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
  </body>
</html>
