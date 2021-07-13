<body>
  <div class="limiter" style="margin-top:50px;">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="<?= base_url("PublicController/RegisterProses"); ?>" method="post">
          <span class="login100-form-title p-b-1">
            Sign Up
          </span>

          <div style="margin-top:20px;" class="wrap-input100 validate-input">
            <input class="input100" type="text" name="fname">
            <span class="focus-input100" data-placeholder="Nama Depan"></span>
          </div>

          <div style="margin-top:20px;" class="wrap-input100 validate-input">
            <input class="input100" type="text" name="lname">
            <span class="focus-input100" data-placeholder="Nama Belakang"></span>
          </div>

          <div style="margin-top:20px;" class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
            <input class="input100" type="email" name="email">
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="pass">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Register
              </button>
            </div>
          </div>

          <div class="text-center p-t-20">
            <span class="txt1">
              Sudah punya akun?
            </span>

            <a class="txt2" href="<?= base_url('PublicController/LoginView')  ?>">
              Sign in
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>
</body>
