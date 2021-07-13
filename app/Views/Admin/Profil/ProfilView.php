<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Profil</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Profil</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-4">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                <?php if (session()->getFlashdata('msg')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"></span>
                    <span class="alert-text"><strong><?= session()->getFlashdata('msg') ?></strong></span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                <?php endif; ?>
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                    src="<?= base_url('gambar_admin/'.$admin['gambar']) ?>"
                    alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center"><?= $admin['admin_name'] ?></h3>

                  <p class="text-muted text-center">Admin</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Username</b> <a class="float-right"><?= $admin['username'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b><a class="float-right"><?= $admin['email'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Status</b> <a class="float-right">Admin</a>
                    </li>
                  </ul>

                  <a href="<?= base_url('AdminController/EditProfil') ?>" class="btn btn-primary btn-block"><b>Ubah Data</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
</body>
