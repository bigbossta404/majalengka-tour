<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Transaksi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Transaksi</li>
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
                  <h3 class="card-title">Tabel Transaksi</h3>
                  <form class="" action="<?= base_url('AdminController/FillterTransaksi') ?>" method="post">
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
                        <th style="width: 10px">No</th>
                        <th>Nama Produk</th>
                        <th>Nama User</th>
                        <th>Quantity</th>
                        <th>Total Bayar</th>
                        <th>Tanggal Transaksi</th>
                        <th>Tanggal Pakai</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      $belumbayar = 0;
                      $pendapatan = 0; ?>
                      <?php if ($transaksi) : ?>
                        <?php foreach ($transaksi as $data) : ?>
                          <tr>
                            <td><?= $no += 1 ?></td>
                            <td><?= $data['nama_produk']  ?></td>
                            <td><?= $data['fname']  ?> <?= $data['lname']  ?></td>
                            <td><?= $data['banyak'];  ?>xRp. <?= number_format($data['harga']);  ?></td>
                            <td>Rp. <?= number_format($data['totBayar'])  ?></td>
                            <td><?php
                                $date = strtotime($data['tgl_transaksi']);
                                $new_date = date('d M Y', $date);
                                echo $new_date; ?></td>
                            <td><?php
                                $date = strtotime($data['tanggal_jual']);
                                $new_date = date('d M Y', $date);
                                echo $new_date; ?></td>

                            <?php if ($data['status'] == 0) : ?>
                              <td>MENUNGGU</td>
                              <?php $belumbayar = $belumbayar + $data['totBayar']; ?>
                            <?php else : ?>
                              <td>DIBAYAR</td>
                              <?php $pendapatan = $pendapatan + $data['totBayar']; ?>
                            <?php endif; ?>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <tbody>
                      <td><b>PENDAPATAN : Rp. <?= number_format($pendapatan); ?></b></td>
                      <td class="text-right"><b>BELUM BAYAR : Rp. <?= number_format($belumbayar); ?></b></td>
                    </tbody>
                  </table>
                </div>
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