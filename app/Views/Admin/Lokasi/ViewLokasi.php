<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Map</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Map</li>
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
                <div id="mapid"></div>
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

  <script>
    var map = L.map('mapid', {
      center: [<?= $titik['latitude']  ?>, <?= $titik['longtitude']  ?>],
      zoom: 16
    });

    L.tileLayer('https://tile.thunderforest.com/cycle/{z}/{x}/{y}.png?apikey=04adc8bfec4f4ebcac57b9fedffb5842', {
      attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
    }).addTo(map);

    var marker = L.marker([<?= $titik['latitude']  ?>, <?= $titik['longtitude']  ?>]).addTo(map);
    marker.bindPopup("<?= $titik['nama_produk']; ?> <img style='width:100px;' src='<?= base_url('public_asset/img_wisata/' . $titik['gambar']) ?>'>").openPopup();

    //jarak
    var popup = L.popup();
    map.on('click', onMapClick);
  </script>
</body>