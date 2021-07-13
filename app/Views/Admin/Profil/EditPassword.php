<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Password</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Password</li>
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
            <div class="col-md-5">
              <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">UbahPassword</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?= base_url('AdminController/EditPasswordProses');  ?>" enctype="multipart/form-data">
                  <div class="card-body">
                  <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <span class="alert-icon"></span>
                      <span class="alert-text"><strong><?= session()->getFlashdata('msg') ?></strong></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <?php endif; ?>
                    <div class="form-group row">
                      <label for="exampleInputEmail1">Password Baru</label>
                        <input type="hidden" name="id_admin" class="form-control" id="inputEmail3" value="<?= $admin['id_admin'];  ?>">
                      <input type="password" name="password_satu" class="form-control" id="inputEmail3">
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail1">Konfirmasi Password</label>
                      <input type="password" name="password_dua" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <center>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Ubah Password</button>
                    </div>
                    <!-- /.card-footer -->
                  </center>
                </form>
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
