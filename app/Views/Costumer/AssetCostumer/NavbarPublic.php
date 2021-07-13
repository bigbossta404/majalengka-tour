<title><?= $title; ?></title>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <nav class="nav-menu d-flex align-items-center w-100">
      <h1 class="logo"><a class="navbox" href="<?= base_url('PublicController/index')  ?>"><img src="<?= base_url('public_asset/img/majalengka_icon.svg') ?>" class="img-fluid" alt=""></a></h1>
      <ul class="">
        <li class=""><a href="<?= base_url('PublicController/index')  ?>">Home</a></li>
        <li class=""><a href="<?= base_url('PublicController/ProdukView') ?>">Produk</a></li>
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
      <ul>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->