<body>
  <main id="main" data-aos="fade-in">
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php if ($produk) : ?>
            <?php foreach ($produk as $data) : ?>
              <div style="margin-top:80px;" class="col-lg-4 col-md-5 d-flex align-items-stretch mt-4 mt-md-0">
                <div style="margin-top:80px;" class="course-item">
                  <img style="width:500px;border-top-right-radius:5px;border-top-left-radius:5px;" src="<?= base_url('gambar_wisata/' . $data['gambar']);  ?>" class="img-fluid">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <h3><?= $data['nama_produk'] ?></h3>
                    </div>
                    <p style="text-align:justify;"><?= $data['deskripsi'] ?></p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <div class="col-md-14">
                          <a href="<?= base_url('PublicController/ViewLokasi/' . $data['id_produk']); ?>"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> LIHAT</button></a>
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