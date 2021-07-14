<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Pembayaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Pembayaran</li>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Riwayat Transaksi</h3>
                  <form class="" action="<?= base_url('PublicController/FillterTransaksi') ?>" method="post">
                    <button type="submit" class="btn btn-info" style="float:right;margin-left:5px;">Filter</button>
                    <input class="form-control col-md-2" style="float:right;margin-left:5px;" type="date" name="akhir">
                    <p style="float:right;"> s/d </p>
                    <input class="form-control col-md-2" style="float:right;margin-right:5px;" type="date" name="awal">
                    <select name="status" id="status" class="form-control col-md-2" style="float:right;margin-right:5px;">
                      <option value="">-- FILLTER --</option>
                      <option value="1">DIBAYAR</option>
                      <option value="0">MENUNGGU</option>
                    </select>
                    <input class="form-control col-md-2" style="float:right;margin-right:5px;" type="text" name="nproduk" placeholder="Nama Produk">
                  </form>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 5px">No</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Transaksi</th>
                        <!-- <th>Tanggal Bayar</th> -->
                        <th>Quantity</th>
                        <th>Tot bayar</th>
                        <th>Nomor Transaksi</th>
                        <th>Nomor Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <div id="target">
                      <tbody>
                        <?php $no = 0; ?>
                        <?php if ($pembayaran) : ?>
                          <?php foreach ($pembayaran as $data) : ?>
                            <tr>
                              <td><?= $no += 1 ?></td>
                              <td><?= $data['nama_produk']; ?></td>
                              <td><?= date("d M Y", strtotime($data['tgl_transaksi'])); ?></td>
                              <!-- <td><?= $data['tgl_bayar'];  ?></td> -->
                              <td><?= $data['banyak'];  ?>xRp. <?= number_format($data['harga']);  ?></td>
                              <td>Rp. <?= number_format($data['totBayar']);  ?></td>
                              <td><?= $data['id_transaksi']; ?></td>
                              <td><?= $data['bukti_bayar']; ?></td>
                              <?php if ($data['status'] == 0) : ?>
                                <td>NON CONFIRM</td>
                              <?php else : ?>
                                <td>TERKONFIRMASI</td>
                                <td><a class="btn btn-info" href="<?= base_url('Invoice/index/' . $data['id_transaksi']); ?>" target="_blank">Cetak Bukti</a></td>
                              <?php endif; ?>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </tbody>
                    </div>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- ./wrapper -->

</body>