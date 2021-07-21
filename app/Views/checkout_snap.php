<html>
<title>Checkout</title>

<head>
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-boaH81UIAW-PIem2"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
  <main id="main" data-aos="fade-in">
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container pageproduk" data-aos="fade-up">
        <div class="row contentproduk" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg mt-4 mt-md-0 d-flex align-items-center justify-content-center card-produk">
            <div style="margin-top:20px;" class="course-item">
              <div class="img-produk-box">
                <img style='height: 100%; width: 100%; object-fit: cover' src="<?= base_url('gambar_produk/' . $produk['gambar']);  ?>">
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h3><?= $produk['nama_produk'] ?></h3>
                </div>

                <?php if ($produk['id_kategori'] == 3) : ?>
                  <h3>Rp. <?= number_format($produk['harga']); ?>/Hari</h3>
                <?php elseif ($produk['id_kategori'] == 1) : ?>
                  <h3>Rp. <?= number_format($produk['harga']); ?>/Orang</h3>
                <?php else : ?>
                  <h3>Rp. <?= number_format($produk['harga']); ?>/Produk</h3>
                <?php endif; ?>

                <p style="text-align:justify;"><?= $produk['deskripsi'] ?></p>
              </div>
            </div>
            <!-- </div>
          <div style="height: 410px;" class="col-lg mt-2 mt-md-0 d-flex align-items-center justify-content-center  card-transaksi"> -->
            <div style="margin-top:20px;" class="course-item">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h3><?= $produk['nama_produk'] ?></h3>
                </div>
                <?php if ($produk['id_kategori'] == 3) : ?>
                  <h3>Rp. <?= number_format($produk['harga']); ?>/Hari</h3>
                <?php elseif ($produk['id_kategori'] == 1) : ?>
                  <h3>Rp. <?= number_format($produk['harga']); ?>/Orang</h3>
                <?php else : ?>
                  <h3>Rp. <?= number_format($produk['harga']); ?>/Produk</h3>
                <?php endif; ?>

                <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
                  <input type="hidden" name="result_type" id="result-type" value="">
                  <input type="hidden" name="result_data" id="result-data" value="">

                  <input type="hidden" name="id_produk" id="id_produk" value="<?= $produk['id_produk'];  ?>">
                  <input type="hidden" name="harga" id="harga" value="<?= $produk['harga']; ?>">
                  <input type="hidden" name="nama_produk" id="nama_produk" value="<?= $produk['nama_produk'] ?>">

                  <label for="exampleInputEmail1">Tanggal Pakai</label>
                  <select name="id_jual" id="id_jual" class="form-control">
                    <?php if ($jual) : ?>
                      <?php foreach ($jual as $data) : ?>
                        <option value="<?= $data['id_jual']; ?>"><?= $data['tanggal_jual']; ?> - Tersisa <?= $data['stock']; ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>

                  <?php if ($produk['id_kategori'] == 3) : ?>
                    <label for="exampleInputEmail1">Lama Pemakaian</label>
                    <input type="number" name="banyak" id="banyak" class="form-control" placeholder="Lama Pemakaian/Hari">
                  <?php elseif ($produk['id_kategori'] == 4) : ?>
                    <label for="exampleInputEmail1">Lama Menginap</label>
                    <input type="number" name="banyak" id="banyak" class="form-control" placeholder="Lama Menginap">
                  <?php else : ?>
                    <label for="exampleInputEmail1">Banyak/Malam/Hari</label>
                    <input type="number" name="banyak" id="banyak" class="form-control" placeholder="Banyak Item">
                  <?php endif; ?>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group" id="alert-up">

                      </div>
                    </div>
                  </div>

                  <!-- <label for="exampleInputEmail1">Tanggal Pakai</label>
                  <input type="date" name="tgl_pakai" id="tgl_pakai" class="form-control"> -->

                  <!-- data pribadi -->
                  <?php if (isset($id_user)) : ?>
                    <input type="hidden" name="fname" id="fname" value="<?= $user['fname'];  ?>">
                    <input type="hidden" name="lname" id="lname" value="<?= $user['lname'];  ?>">
                    <input type="hidden" name="email" id="email" value="<?= $user['email']; ?>">
                    <input type="hidden" name="telephone" id="telephone" value="<?= $user['telephone']; ?>">
                  <?php endif; ?>

                  <?php if (!isset($id_user)) : ?>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="col-md-12 trainer-profile d-flex align-items-center">
                        <div class="col-md-12" style="margin-left:25%;">
                          <a href="<?= base_url('PublicController/LoginView');  ?>" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</a>
                        </div>
                      </div>
                    </div>
                  <?php else : ?>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="col-md-12 trainer-profile d-flex align-items-center">
                        <div class="col-md-12" style="margin-left:25%;">
                          <a href="#" class="btn btn-success" id="pay-button"><i class="fa fa-shopping-cart"></i> Bayar</a>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-img-produk">
        <img src="<?= base_url('public_asset/img/about.png') ?>" height="600px" id="bg-img-produk" alt="">
        <img src="<?= base_url('public_asset/img/about.png') ?>" height="600px" class="ml-auto" id="bg-img-produk2" alt="">
      </div>
    </section><!-- End Courses Section -->
  </main><!-- End #main -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#id_jual").change(function() {
        var id_product = $(this).val();
        var post_id = 'id=' + id_product;

        $.ajax({
          type: "POST",
          url: '<?= site_url() ?>/AlertBuy/getId',
          data: post_id,
          cache: false,
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#banyak").change(function() {
        var id_product = $(this).val();
        var post_id = 'banyak=' + id_product;

        $.ajax({
          type: "POST",
          url: '<?= site_url() ?>/AlertBuy/getAlert',
          data: post_id,
          cache: false,
          success: function(cities) {
            $("#alert-up").html(cities);
          }
        });

      });
    });
  </script>

  <!-- <button id="pay-button">Pay!</button> -->
  <script type="text/javascript">
    $('#pay-button').click(function(event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");

      var id_produk = $("#id_produk").val();
      var nama_produk = $("#nama_produk").val();
      var banyak = $("#banyak").val();
      var harga = $("#harga").val()
      var id_jual = $("#id_jual").val();

      // data pribadi
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      var email = $("#email").val();
      var telephone = $("#telephone").val();


      $.ajax({
        url: '<?= site_url() ?>/snap/token',
        data: {
          id_produk: id_produk,
          nama_produk: nama_produk,
          banyak: banyak,
          harga: harga,
          id_jual: id_jual,
          fname: fname,
          lname: lname,
          email: email,
          telephone: telephone
        },
        cache: false,

        success: function(data) {
          //location = data;

          console.log('token = ' + data);

          var resultType = document.getElementById('result-type');
          var resultData = document.getElementById('result-data');

          function changeResult(type, data) {
            $("#result-type").val(type);
            $("#result-data").val(JSON.stringify(data));
            //resultType.innerHTML = type;
            //resultData.innerHTML = JSON.stringify(data);
          }

          snap.pay(data, {

            onSuccess: function(result) {
              changeResult('success', result);
              console.log(result.status_message);
              console.log(result);
              $("#payment-form").submit();
            },
            onPending: function(result) {
              changeResult('pending', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            },
            onError: function(result) {
              changeResult('error', result);
              console.log(result.status_message);
              $("#payment-form").submit();
            }
          });
        }
      });
    });
  </script>

</body>

</html>