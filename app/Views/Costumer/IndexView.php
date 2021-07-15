<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Lifelong memories just a few second away</h1>
      <h2>Let's start journey with us, your dream will come true!</h2>
      <a href="<?= base_url('PublicController/ProdukView') ?>" class="btn btn-success btnjelajahi">Jelajahi</a>
    </div>
    <img src="<?= base_url('public_asset/img/bghero.png') ?>" width="80%" id="bghero" alt="">
  </section><!-- End Hero -->

  <main id="main">
    <section class="topvisited d-flex justify-content-center align-items-center flex-column">
      <h1>Top Visited!</h1>
      <div class="boxslide d-flex">
        <a href="#" class="card">
          <img src="<?= base_url('public_asset/img_wisata/panyaweuyan.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Panyaweuyan</div>
          </div>
        </a>
        <a href="#" class="card">
          <img src="<?= base_url('public_asset/img_wisata/ciboer.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Ciboer Pass</div>
          </div>
        </a>
        <a href="#" class="card">
          <img src="<?= base_url('public_asset/img_wisata/paraland.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Paraland</div>
          </div>
        </a>
        <a href="#" class="card">
          <img src="<?= base_url('public_asset/img_wisata/situcipanten.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Situcipanten</div>
          </div>
        </a>
      </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>TENTANG</h2>
          <p>MOROWALI TOUR</p>
        </div>
      </div>
    </section>
    <section>
      <div class="row" style="margin-left:0px;">
        <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img style="margin-left:140px;" src="<?= base_url('public_asset/img/logo3.png') ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 pt-4 pt-lg-0 order-2 order-lg-1 content" style="text-align: justify;text-justify: inter-word;">
          <p>
            Morowali Tour adalah sebuah situs untuk mempermudah kebutuhan wisatawan yang ingin berkunjung dan berliburan di Morwali. Semua kebutuhan
            dalam transportasi, tiket wisata, penginapan dan informasi tentang wisata Morwali disediakan disini!
            </sp>
            <a href="<?= base_url('PublicController/ProdukView') ?>" class="learn-more-btn">PRODUK</a>
        </div>
      </div>
    </section>
    <!-- End About Section -->
  </main><!-- End #main -->
</body>