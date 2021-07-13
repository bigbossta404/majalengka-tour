<body style="overflow: hidden;">
  <div class="limiter" style="margin-top:50px;">
    <div class="container-login100">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="<?= base_url('public_asset/img/undraw_file_sync_ot38.svg') ?>" alt="Image" class="img-fluid loginimg">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h1>Sign In to <strong>Majalengkans</strong></h1>
                <p class="mb-4 h5 font-weight-normal">Silahkan lakukan masuk akun apabila sudah mendaftar</p>
              </div>
              <form action="<?= base_url('PublicController/LoginProses')  ?>" class="login100-form validate-form" method="post">
                <?php if (session()->getFlashdata('msg')) : ?>
                  <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                    <span class="alert-icon"></span>
                    <span class="alert-text"><strong><?= session()->getFlashdata('msg') ?></strong></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input class="form-control" type="email" name="email" value="<?= old('email') ?>">

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input class="input100 form-control" type="password" name="pass">
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="<?= base_url('PublicController/RegisterView')  ?>" class="forgot-pass">Belum punya akun?</a></span>
                </div>

                <button type="submit" class="btn text-white btn-block btnlogin">Log me in</button>
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <div id="dropDownSelect1"></div>
</body>