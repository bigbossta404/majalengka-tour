<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link d-flex justify-content-center">
    <img src="<?= base_url('public_asset/img/iconadmin.svg') ?>" style="color:white;" alt="AdminLTE Logo" width="80%">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-4 pb-4 mb-4 d-flex">
      <div class="image">
        <img style="width:40px;height:40px;" src="<?= base_url('gambar_admin/' . $gambar) ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $nama_admin ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="<?= base_url('AdminController/Dashboard'); ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cubes"></i>
            <p>
              Kelola Produk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('AdminController/AddProduk');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/EditProduk');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/ViewProduk');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/AddJualProduk');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jual Produk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/SeeJual');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Produk Jual</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Kelola Lokasi Wisata
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="<?= base_url('AdminController/AddWisata'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Tempat Wisata</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/EditWisata'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Tempat Wisata</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?= base_url('AdminController/AddLokasi'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Lokasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/EditLokasi'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Lokasi</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-wallet"></i>
            <p>
              Kelola Transaksi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('AdminController/TransaksiView') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transaksi Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/PembayaranView') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Kelola Kategori
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('AdminController/AddKategori'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Kategori</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/SeeKategori');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Kategori</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Kelola User
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('AdminController/UserView');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat User</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Kelola Profil
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('AdminController/ProfilView');  ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ubah Data</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('AdminController/EditPassword') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ubah Password</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= base_url('AdminController/LogoutAdmin') ?>" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Log Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>