<title><?= $title; ?></title>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="pr-10 logo"><a class="navbox" href="<?= base_url('PublicController/index') ?>"><img src="<?= base_url('public_asset/img/majalengka_icon.svg') ?>" class="img-fluid" alt=""></a></h1>

    <nav class="nav-menu d-flex w-100">
      <ul>
        <li class=""><a href="<?= base_url('PublicController/index')  ?>">Home</a></li>
        <?php if ($kategori) : ?>
          <?php foreach ($kategori as $data) : ?>
            <?php if ($data['id_kategori'] != 7) : ?>
              <li class=""><a href="<?= base_url('PublicController/ProdukViewSelect/' . $data['id_kategori'])  ?>"><?= $data['jenis_kategori']  ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
      <ul class="nav-bar ml-auto">
        <?php if (isset($id_user)) : ?>
          <li><a href="<?= base_url('PublicController/TransaksiView')  ?>">Riwayat Pembelian</a></li>
          <li><a href="<?= base_url('PublicController/ProfilView')  ?>">Profil</a></li>
          <li><a href="<?= base_url('PublicController/Logout')  ?>">Logout</a></li>
        <?php else : ?>
          <li class=""><a href="<?= base_url('PublicController/LoginView')  ?>">Login</a></li>
          <li class=""><a href="<?= base_url('PublicController/RegisterView')  ?>">Register</a></li>
        <?php endif; ?>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->