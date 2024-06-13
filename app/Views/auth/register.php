<?= $this->extend('layout/register') ?>

<?= $this->section('content') ?>
<section class="content">
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder"><?=lang('Auth.register')?></h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">

                <?= view('Myth\Auth\Views\_message_block') ?>
                
                <form action="<?= url_to('register') ?>" method="post" class="user">
                        <?= csrf_field() ?>

                    <div class="input-group input-group-outline mb-3">
                        <label for="username"></label>
                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label" for="email"></label>
                        &nbsp;<input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                               name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label for="password"></label>
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label for="pass_confirm"></label>
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>
                    <!-- <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"><?=lang('Auth.register')?></button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    <?=lang('Auth.alreadyRegistered')?>
                    <a href="<?= url_to('login') ?>" class="text-primary text-gradient font-weight-bold"><?=lang('Auth.signIn')?></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?= $this->endSection() ?>