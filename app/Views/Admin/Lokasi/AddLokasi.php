<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Lokasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Lokasi</li>
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
                  <h3 class="card-title">Ubah Lokasi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php if (isset($id_titik)) : ?>
                  <form class="form-horizontal" method="POST" action="<?= base_url('AdminController/EditLokasiProses');  ?>">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Tempat Wisata</label>
                        <select name="id_wisata" class="form-control">
                          <option value="<?= $titik['id_produk'];  ?>"><?= $titik['nama_produk'];  ?></option>
                        </select>
                      </div>
                      <input type="hidden" name="id_titik" value="<?= $titik['id_titik']  ?>">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="text" name="latitude" class="form-control" id="inputEmail3" value="<?= $titik['latitude'] ?>">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Longtitude</label>
                        <input type="text" name="longtitude" class="form-control" id="inputEmail3" value="<?= $titik['longtitude'] ?>">
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
                <?php else : ?>
                  <form class="form-horizontal" method="POST" action="<?= base_url('AdminController/AddLokasiProses');  ?>">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Tempat Wisata</label>
                        <select name="id_wisata" class="form-control">
                          <?php if ($wisata) : ?>
                            <?php foreach ($wisata as $data) : ?>
                              <option value="<?= $data['id_produk'];  ?>"><?= $data['nama_produk'];  ?></option>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="text" name="latitude" class="form-control" id="inputEmail3" placeholder="Latitude">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Longtitude</label>
                        <input type="text" name="longtitude" class="form-control" id="inputEmail3" placeholder="Longtitude">
                      </div>
                    </div>
                    <center>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">Tambah</button>
                      </div>
                      <!-- /.card-footer -->
                    </center>
                  </form>
                <?php endif; ?>


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