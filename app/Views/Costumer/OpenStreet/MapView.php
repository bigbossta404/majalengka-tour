<body>
  <main id="main" data-aos="fade-in">
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div id="mapid"></div>
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
    </section><!-- End Courses Section -->
  </main><!-- End #main -->
</body>