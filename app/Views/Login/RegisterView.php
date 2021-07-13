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
              <form action="<?= base_url("PublicController/RegisterProses"); ?>" method="post" class="login100-form validate-form">
                <div class="form-group first">
                  <label for="fname">Nama Depan</label>
                  <input class="input100 form-control" type="text" name="fname">
                </div>
                <div class="form-group first">
                  <label for="lname">Nama Belakang</label>
                  <input class="input100 form-control" type="text" name="lname">
                </div>
                <div class="form-group first">
                  <label for="email">Email</label>
                  <input class="input100 form-control" type="email" name="email">
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
                  <span class="ml-auto"><a href="<?= base_url('PublicController/LoginView')  ?>" class="forgot-pass">Sudah ada akun?</a></span>
                </div>

                <button type="submit" class="btn text-white btn-block btnlogin">Sign me in</button>
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>
</body>