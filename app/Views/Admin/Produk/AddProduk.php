<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Produk</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <?php if (isset($id_produk)): ?>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Ubah Data Produk</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="<?= base_url('AdminController/EditProdukProses');  ?>" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="text" name="namaProduk" class="form-control" id="inputEmail3" value="<?= $produk['nama_produk']  ?>">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select name="id_kategori" class="form-control">
                          <option value="<?= $produk['id_kategori'];  ?>"><?= $produk['jenis_kategori'];  ?></option>
                          <?php if ($kategori ): ?>
                            <?php foreach($kategori as $data): ?>
                              <?php if ($data['id_kategori']!=$produk['id_kategori']): ?>
                                <option value="<?= $data['id_kategori'];  ?>"><?= $data['jenis_kategori'];  ?></option>
                              <?php endif; ?>
                            <?php endforeach;?>
                          <?php endif;?>
                        </select>
                      </div>
                      <input type="hidden" name="id_produk" value="<?= $id_produk  ?>">
                      <!-- <div class="form-group row">
                        <label for="exampleInputEmail1">Stok Produk</label>
                        <input type="number" name="stok" class="form-control" id="inputEmail3" value="<?= $produk['stok']  ?>">
                      </div> -->
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Harga Produk</label>
                        <input type="number" name="harga" class="form-control" id="inputEmail3" value="<?= $produk['harga']  ?>">
                      </div>
                      <input type="hidden" name="id_produk" value="<?= $id_produk ?>">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Deskripsi Produk</label>
                        <textarea class="form-control" value="<?= $produk['deskripsi']  ?>" name="deskripsi" rows="8" cols="80" id="textarea"><?= $produk['deskripsi']  ?></textarea>Max Karakter :&ensp;<span id="karakter">250</span>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="inputEmail3">
                      </div>
                      <div class="form-group row">
                        <img style="width:400px;" src="<?= base_url('gambar_produk/'.$produk['gambar']) ?>" alt="">
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
                    <h3 class="card-title">Tambah Data Produk</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="<?= base_url('AdminController/AddProdukProses');  ?>" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Nama Produk</label>
                        <input type="text" name="namaProduk" class="form-control" id="inputEmail3" placeholder="Nama Produk">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select name="id_kategori" class="form-control">
                          <?php if ($kategori ): ?>
                            <?php foreach($kategori as $data): ?>
                              <option value="<?= $data['id_kategori'];  ?>"><?= $data['jenis_kategori'];  ?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                        </select>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="exampleInputEmail1">Stok Produk</label>
                        <input type="number" name="stok" class="form-control" id="inputEmail3" placeholder="Stok Produk">
                      </div> -->
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Harga Produk</label>
                        <input type="number" name="harga" class="form-control" id="inputEmail3" placeholder="Harga Produk">
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi" rows="8" cols="80" id="textarea"></textarea>Max Karakter :&ensp;<span id="karakter">250</span>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail1">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="inputEmail3">
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
