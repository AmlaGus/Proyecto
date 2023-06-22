<footer>
    <div class="container">
        <p>2023 <a href="http://civika.com.mx">Instituto Estatal de la Mujer</a> &mdash;
            <strong>Teléfono:</strong> <a href="tel:+522411132090">(241) 113 2090 </a>
            &nbsp;&nbsp;<strong>Dirección:</strong> Ex-Fabrica de San Manuel s/n, Santa Cruz Tlaxcala&mdash; <a href="Politica_de_privacidad.html">Política de Privacidad</a> &nbsp;&nbsp;

    </div>
    <a class="go-top" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
</footer>

<script type="text/javascript">
    var base_url = '<?php echo base_url()?>';
</script>

<?php if (isset($ArchivoJs)): ?>
    <?php foreach ($ArchivoJs as $js): ?>
        <script src="<?= $js ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<!-- JavaScript -->


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script>
    $(document).ready(function () {
        // Show or hide the sticky footer button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                $('.go-top').fadeIn(900);
            } else {
                $('.go-top').fadeOut(1200);
            }
        });

        // Animate the scroll to top
        $('.go-top').click(function (event) {
            event.preventDefault();

            $('html, body').animate({scrollTop: 0}, 600);
        })
    });
</script>
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->

<script type="text/javascript">
    //<![CDATA[
    google.load('maps', '2', {callback: simple});
    var map;
    function simple2() {
        if (GBrowserIsCompatible()) {
            var map = new GMap2(document.getElementById("map"));
            map.addControl(new GLargeMapControl());
            map.addControl(new GMapTypeControl());
            map.setCenter(new GLatLng(22.5200, -82.1100), 7);
        }
    }
    window.onload = function () {
        simple2();
    }
    //]]>
</script>