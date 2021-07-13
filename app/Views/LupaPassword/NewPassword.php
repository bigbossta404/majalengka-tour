<body>
  <div class="limiter" style="margin-top:50px;">
    <div class="container-login100">
      <div class="wrap-login100">
        <form action="<?= base_url('PublicController/ChangePassword')  ?>" class="login100-form validate-form" method="post">
          <?php

          if (isset($danger)) {
            echo '
            <span class="login100-form-title p-b-1">
            Password Tidak Sama!
            </span>
            ';
          } else {
            echo '
            <span class="login100-form-title p-b-1">
            Masukan Password Baru!
            </span>
            ';
          }

          ?>

          <div style="margin-top:20px;" class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password Baru"></span>
          </div>

          <div style="margin-top:20px;" class="wrap-input100 validate-input">
            <input class="input100" type="password" name="confirm_password">
            <span class="focus-input100" data-placeholder="Konfirmasi Password"></span>
          </div>

          <input type="hidden" name="id" value="<?= $id_password; ?>">

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Ubah Password
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
