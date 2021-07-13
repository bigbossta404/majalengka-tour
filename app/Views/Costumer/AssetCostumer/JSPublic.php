<!-- Vendor JS Files -->
<script src="<?= base_url('public_asset/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/jquery.easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/php-email-form/validate.js'); ?>"></script>
<script src="<?= base_url('public_asset/waypoints/jquery.waypoints.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/counterup/counterup.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/owl.carousel/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/aos/aos.js'); ?>"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('public_asset/js/main.js'); ?>"></script>
<script src="<?= base_url('public_asset/js/propper.js'); ?>"></script>
<script src="<?= base_url('public_asset/js/owl.carousel.min.js'); ?>"></script>
<script>
    var timer = 4000;

    var i = 0;
    var max = $('#c > li').length;

    $("#c > li").eq(i).addClass('active').css('left', '0');
    $("#c > li").eq(i + 1).addClass('active').css('left', '25%');
    $("#c > li").eq(i + 2).addClass('active').css('left', '50%');
    $("#c > li").eq(i + 3).addClass('active').css('left', '75%');


    setInterval(function() {

        $("#c > li").removeClass('active');

        $("#c > li").eq(i).css('transition-delay', '0.25s');
        $("#c > li").eq(i + 1).css('transition-delay', '0.5s');
        $("#c > li").eq(i + 2).css('transition-delay', '0.75s');
        $("#c > li").eq(i + 3).css('transition-delay', '1s');

        if (i < max - 4) {
            i = i + 4;
        } else {
            i = 0;
        }

        $("#c > li").eq(i).css('left', '0').addClass('active').css('transition-delay', '1.25s');
        $("#c > li").eq(i + 1).css('left', '25%').addClass('active').css('transition-delay', '1.5s');
        $("#c > li").eq(i + 2).css('left', '50%').addClass('active').css('transition-delay', '1.75s');
        $("#c > li").eq(i + 3).css('left', '75%').addClass('active').css('transition-delay', '2s');

    }, timer);
</script>
<!-- jQuery Plugins -->
<script src="<?= base_url('public_asset/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/js/slick.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/js/nouislider.min.js'); ?>"></script>
<script src="<?= base_url('public_asset/js/jquery.zoom.min.js'); ?>"></script>