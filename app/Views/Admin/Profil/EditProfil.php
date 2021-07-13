<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Profil</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Profil</li>
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
                  <h3 class="card-title">Ubah Profil</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?= base_url('AdminController/EditProfilProses');  ?>" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="hidden" name="id_admin" class="form-control" id="inputEmail3" value="<?= $admin['id_admin'];  ?>">
                      <input type="text" name="nama_admin" class="form-control" id="inputEmail3" value="<?= $admin['admin_name']  ?>">
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" name="username" class="form-control" id="inputEmail3" value="<?= $admin['username']  ?>">
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" class="form-control" id="inputEmail3" value="<?= $admin['email']  ?>">
                    </div>
                    <div class="form-group row">
                      <img style="width:250px;" src="<?= base_url('gambar_admin/'.$admin['gambar']) ?>" alt="">
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail1">Foto Profil</label>
                      <input type="file" name="gambar" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <center>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Ubah</button>
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
