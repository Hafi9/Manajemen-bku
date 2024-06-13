<?= $this->extend('layout/login') ?>

<?= $this->section('content') ?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><?=lang('Auth.loginTitle')?></p>
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form action="<?= url_to('login') ?>" method="post" class="user">
		<?= csrf_field() ?>
    <?php if ($config->validFields === ['email']): ?>
        <div class="input-group mb-3">
          <label for="login"><?=lang('Auth.email')?></label>
          <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
            name="login" placeholder="<?=lang('Auth.email')?>">
            <div class="invalid-feedback">
                <?= session('errors.login') ?>
            </div>
        </div>
    <?php else: ?>
        <div class="input-group mb-3">
            <label for="login"></label>
            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
            <div class="invalid-feedback">
                <?= session('errors.login') ?>
            </div>
        </div>
    <?php endif; ?>
        <div class="input-group mb-3">
          <label for="password"></label>
          <input type="password" class="form-control<?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
            <div class="invalid-feedback">
                <?= session('errors.password') ?>
            </div>
        </div>
    <?php if ($config->allowRemembering): ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
              <label for="remember">
                <?=lang('Auth.rememberMe')?>
              </label>
            </div>
          </div>
    <?php endif; ?>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>