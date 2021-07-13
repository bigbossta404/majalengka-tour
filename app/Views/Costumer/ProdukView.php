<body>
  <main id="main" data-aos="fade-in">
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses" style="background-color: #f7fcff;">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php if ($produk) : ?>

            <?php foreach ($produk as $data) : ?>
              <div style="margin-top:80px; " class="col-lg-4 col-md-5 d-flex justify-content-center align-items-stretch mt-4 mt-md-0">
                <div style="margin-top:80px;" class="course-item">
                  <img src="<?= base_url('gambar_produk/' . $data['gambar']);  ?>" class="img-fluid imgcourse">
                  <div class="course-content">
                    <div class="d-flex flex-column justify-content-center align-items-center mb-1">
                      <h3><?= $data['nama_produk'] ?></h3>
                      <h3>Rp. <?= number_format($data['harga']); ?></h3>
                      <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                          <div class="col-md-14">
                            <a href="<?= base_url('PublicController/PayView/' . $data['id_produk']); ?>" class="mr-3"><button class="btn btn-success"><i class="fa fa-shopping-cart"></i> PESAN</button></a>
                            <a href="<?= base_url('PublicController/ViewLokasi/' . $data['id_produk']); ?>"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> LIHAT</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
    </section><!-- End Courses Section -->
  </main><!-- End #main -->
</body>