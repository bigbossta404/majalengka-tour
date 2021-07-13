<body>
  <div class="limiter" style="margin-top:50px;">
    <div class="container-login100">
      <div class="wrap-login100">
        <form action="<?= base_url('ForgetPassword/ProsesPassword')  ?>" class="login100-form validate-form" method="post">
          <?php

          if (isset($danger)) {
            echo '
            <span class="login100-form-title p-b-1">
            Email yang anda masukan salah!
            </span>
            ';
          } else {
            echo '
            <span class="login100-form-title p-b-1">
            Masukan Email Anda!
            </span>
            ';
          }

          ?>

          <div style="margin-top:20px;" class="wrap-input100 validate-input">
            <input class="input100" type="email" name="email">
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Kirim Email
              </button>
            </div>
          </div>

          <div class="text-center p-t-20">
            <span class="txt1">
              Login?
            </span>

            <a class="txt2" href="<?= base_url('PublicController/LoginView')  ?>">
              Sign In
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>
</body>
