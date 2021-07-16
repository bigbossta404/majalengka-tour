<!-- jQuery -->
<script src="<?= base_url('asset/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('asset/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('asset/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('asset/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('asset/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('asset/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('asset/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('asset/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('asset/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('asset/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('asset/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('asset/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/dist/js/demo.js') ?>"></script>

<!-- text area batas -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#textarea').keyup(function() {
      var len = this.value.length;
      if (len >= 250) {
        this.value = this.value.substring(0, 250);
      }
      $('#karakter').text(250 - len);
    });
  });
</script>
<!-- DataTables -->
<script src="<?= base_url('asset/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('asset/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('asset/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('asset/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#tablewisata").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#tablenginap").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(document).ready(function() {
    $('#tablenginap_wrapper').hide();
    $('.btnpenginapan').on('click', function() {
      $('.btnpenginapan').removeClass('btn-primary').addClass('btn-secondary');
      $('.btnwisata').removeClass('btn-secondary').addClass('btn-primary');
      $('#tablewisata').hide();
      $('#tablewisata_wrapper').hide();
      $('#tablenginap').show();
      $('#tablenginap_wrapper').show();
    });
    $('.btnwisata').on('click', function() {
      $('.btnwisata').removeClass('btn-primary').addClass('btn-secondary');
      $('.btnpenginapan').removeClass('btn-secondary').addClass('btn-primary');
      $('#tablewisata').show();
      $('#tablewisata_wrapper').show();
      $('#tablenginap').hide();
      $('#tablenginap_wrapper').hide();
    });
  });
</script>