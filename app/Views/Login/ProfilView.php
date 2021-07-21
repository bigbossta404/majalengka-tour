<body oncontextmenu='return false' class='snippet-body' style="margin-top:50px;">
  <div class="container page-container" id="page-content">
    <!-- <div class="padding"> -->
    <div class="row padding">
      <div class="col-xl-6 ">
        <div class="card user-card-full">
          <div class="row">
            <div class="col-sm-12 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                <?php if ($user['gambar'] != null) : ?>
                  <div class="m-b-25"><img style="width:80px;" src="<?= base_url('gambar_user/' . $user['gambar']);  ?>" class="img-radius" alt="User-Profile-Image"> </div>
                <?php else : ?>
                  <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                <?php endif; ?>
                <h6 class="f-w-600"><?= $user['fname'] ?> <?= $user['lname']  ?></h6>
                <p>Status Account - User</p> <a href="<?= base_url('PublicController/ProfilEdit'); ?>"><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"> Change</i></a>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Email</p>
                    <h6 class="text-muted f-w-400"><?= $user['email']  ?></h6>
                  </div>
                  <?php if ($user['telephone'] != null) : ?>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Phone</p>
                      <h6 class="text-muted f-w-400"><?= $user['telephone'] ?></h6>
                    </div>
                  <?php else : ?>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Phone</p>
                      <a href="<?= base_url('PublicController/ProfilEdit'); ?>">
                        <h6 class="text-muted f-w-400">Lengkapi</h6>
                      </a>
                    </div>
                  <?php endif; ?>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Detail</h6>
                <div class="row">
                  <?php if ($user['username'] != null) : ?>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Username</p>
                      <h6 class="text-muted f-w-400"><?= $user['username'] ?></h6>
                    </div>
                  <?php else : ?>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Username</p>
                      <a href="<?= base_url('PublicController/ProfilEdit'); ?>">
                        <h6 class="text-muted f-w-400">Lengkapi</h6>
                      </a>
                    </div>
                  <?php endif; ?>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Password</p>
                    <a href="<?= base_url('PublicController/ProfilEdit'); ?>">
                      <h6 class="text-muted f-w-400">Change</h6>
                    </a>
                  </div>
                </div>
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