
</div>
</section>
<footer id="footer" class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container">
    <!-- Seccion Redes Sociales-->
    <section class="mb-7">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-info m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-info m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google 
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>
-->
      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin 
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      -->
      <!-- Github 
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
      -->
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);"> -->
  <div class="text-center text-dark p-3" style="background-color: #c5ba9f">
    © 2023 Instituto Estatal de la Mujer<br>
    <a class="text-dark" href="https://mujer.tlaxcala.gob.mx/">https://mujer.tlaxcala.gob.mx/</a>
  </div>
  <!-- Copyright -->
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