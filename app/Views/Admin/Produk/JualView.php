<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Jual Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Jual Produk</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <?php if (isset($id_jual)): ?>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Ubah Produk Jual</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="<?= base_url('AdminController/EditJualProses');  ?>" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <select name="id_produk" class="form-control">
                          <option value="<?= $seeJual['id_produk'];  ?>"><?= $seeJual['nama_produk']; ?></option>
                          <?php if ($produk): ?>
                            <?php foreach($produk as $data): ?>
                              <?php if ($data['id_produk']!=$seeJual['id_produk']): ?>
                                <option value="<?= $data['id_produk'];  ?>"><?= $data['nama_produk']; ?></option>
                              <?php endif; ?>
                            <?php endforeach;?>
                          <?php endif;?>
                        </select>
                      </div>
                      <input type="hidden" name="id_jual" value="<?= $id_jual;  ?>">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Tanggal Jual</label>
                        <input type="date" name="tanggal_jual" class="form-control" id="inputEmail3" value="<?= $seeJual['tanggal_jual']; ?>">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Banyak Dijual</label>
                        <input type="number" name="stock" class="form-control" id="inputEmail3" value="<?= $seeJual['stock']; ?>">
                      </div>
                    </div>
                    <center>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-info">UBAH</button>
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
      <?php else: ?>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Tambah Produk Jual</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="<?= base_url('AdminController/AddJualProses');  ?>" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <select name="id_produk" class="form-control">
                          <?php if ($produk): ?>
                            <?php foreach($produk as $data): ?>
                              <option value="<?= $data['id_produk'];  ?>"><?= $data['nama_produk'];  ?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Tanggal Jual</label>
                        <input type="date" name="tanggal_jual" class="form-control" id="inputEmail3">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Banyak Dijual</label>
                        <input type="number" name="stock" class="form-control" id="inputEmail3" placeholder="Stok Produk">
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
      <?php endif; ?>

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
</body>
