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
    <section class="slide-content">
      <!-- <div class="gallery js-flickity"
            data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell"><a href="https://google.com/"><img src="<?= base_url('public_asset/img_wisata/panyaweuyan.jpg') ?>" alt="panyaweuyan" /></a></div>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
            <div class="gallery-cell"></div>
         </div> -->
    </section><!-- End About Section -->
  </main><!-- End #main -->
</body>