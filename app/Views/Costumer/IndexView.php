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
        <a href="#" class="cardbox">
          <img src="<?= base_url('public_asset/img_wisata/panyaweuyan.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Panyaweuyan</div>
          </div>
        </a>
        <a href="#" class="cardbox">
          <img src="<?= base_url('public_asset/img_wisata/ciboer.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Ciboer Pass</div>
          </div>
        </a>
        <a href="#" class="cardbox">
          <img src="<?= base_url('public_asset/img_wisata/paraland.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Paraland</div>
          </div>
        </a>
        <a href="#" class="cardbox">
          <img src="<?= base_url('public_asset/img_wisata/situcipanten.jpg') ?>" id="cardimg" alt="">
          <div class="overlay d-flex align-items-center justify-content-center">
            <div class="textoverlay">Situcipanten</div>
          </div>
        </a>
      </div>
    </section>
    <!-- ======= About Section ======= -->

    <section id="about" class="about">
      <div class="aboutcontain" data-aos="fade-up">
        <div class="row">
          <div class="col-6 aboutbg">
            <img src="<?= base_url('public_asset/img/about.png') ?>" height="50%" alt="">
          </div>
          <div class="col-5 abouttext">
            <h2>About Us</h2>
            <img src="<?= base_url('public_asset/img/majalengka_icon.svg') ?>" alt="">
            <p>Majalengka Tour adalah sebuah situs untuk mempermudah kebutuhan wisatawan yang ingin berkunjung dan berliburan di Morwali. Semua kebutuhan dalam transportasi, tiket wisata, penginapan dan informasi tentang wisata Morwali disediakan disini!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- End About Section -->
  </main><!-- End #main -->
</body>