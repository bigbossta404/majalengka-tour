<body>
  <main id="main" data-aos="fade-in">
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-7 col-md-5 d-flex align-items-stretch mt-4 mt-md-0">
            <div style="margin-top:20px;" class="course-item">
              <img style="width:100%;" src="<?=  base_url('gambar_produk/'.$produk['gambar']);  ?>" class="img-fluid">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h3><?= $produk['nama_produk'] ?></h3>
                </div>
                <h3>Rp. <?= number_format($produk['harga']); ?></h3>
                <p>STOK TERSISA - <?= $produk['stok'] ?></p>
                <p style="text-align:justify;"><?= $produk['deskripsi'] ?></p>
              </div>
            </div>
          </div>
          <!-- input data -->
          <div class="col-lg-4 col-md-2 align-items-stretch mt-2 mt-md-0">
            <div style="margin-top:20px;" class="course-item">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h3><?= $produk['nama_produk'] ?></h3>
                </div>
                <h3>Rp. <?= number_format($produk['harga']); ?></h3>

                <label for="exampleInputEmail1">Banyak Produk</label>
                <input type="number" name="banyak" class="form-control" max="<?= $produk['stok'] ?>" placeholder="Banyak Item">

                <label for="exampleInputEmail1">Tanggal Pakai</label>
                <input type="date" name="tgl_pakai" class="form-control">

                <?php if (!isset($id_user)): ?>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="col-md-12 trainer-profile d-flex align-items-center">
                      <div class="col-md-12" style="margin-left:25%;">
                        <a href="<?= base_url('PublicController/LoginView');  ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</a>
                      </div>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="col-md-12 trainer-profile d-flex align-items-center">
                      <div class="col-md-12" style="margin-left:25%;">
                        <a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</a>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

              </div>
            </div>
          </div>

        </div>
      </section><!-- End Courses Section -->
    </main><!-- End #main -->
  </body>
