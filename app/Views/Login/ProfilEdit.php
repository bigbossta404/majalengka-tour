<body oncontextmenu='return false' class='snippet-body' style="margin-top:50px;">
  <div class="container page-container" id="page-content">
    <!-- <div class=""> -->
    <div class="row padding">
      <div class="col-xl-6">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-12 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                <?php if ($user['gambar'] != null) : ?>
                  <div class="m-b-25"><img style="width:80px;" src="<?= base_url('gambar_user/' . $user['gambar']);  ?>" class="img-radius" alt="User-Profile-Image"> </div>
                <?php else : ?>
                  <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                <?php endif; ?>
                <h6 class="f-w-600"><?= $user['fname'] ?> <?= $user['lname']  ?></h6>

                <form class="" action="<?= base_url('PublicController/EditProfilProses');  ?>" method="post" enctype="multipart/form-data">

                  <p>Status Account - User</p> <button class="btn btn-success"> Ubah Data</i></button>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Email</p>
                    <input type="text" name="email" value="<?= $user['email']  ?>" placeholder="Masukan Email">
                  </div>

                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Phone</p>
                    <input type="number" name="phone" value="<?= $user['telephone']  ?>" placeholder="Masukan No Telphone" required>
                  </div>
                </div>

                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Detail</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Username</p>
                    <input type="text" name="username" value="<?= $user['username']  ?>" placeholder="Masukan Username" required>
                  </div>

                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Password</p>
                    <input type="password" name="pass" value="<?= $user['password']  ?>" placeholder="Masukan Password">
                  </div>
                </div>

                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Upload Gambar</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <input type="file" name="gambar" value="<?= $user['gambar']  ?>">
                  </div>
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md bg-img-profile">
        <div class="img-profile">
          <img src="<?= base_url('public_asset/img/profil.png') ?>" id="img-profile" alt="">
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
</body>