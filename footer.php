<?php	wp_footer(); ?>

 <?php $home = get_template_directory_uri(); ?>
<!--&lt;!&ndash; Footer &ndash;&gt;-->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="icons text-center">
             
            
            </ul>
            <ul class="copyright text-center">© 2019 Maratona de Programação do Norte. Todos os direitos reservados.</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <script src="<?= $home ?>/assets//vendor/jquery/jquery.min.js"></script>
    <script src="<?= $home ?>/assets//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= $home ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= $home ?>/assets/js/grayscale.js"></script>

    <script type="text/javascript">
      var button = $('<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>');

      var divresponsive = $('<div class="collapse navbar-collapse" id="navbarResponsive"> </div>');

      divresponsive.append($('.navbar-nav'));

      $('#mainNav').append([button, divresponsive]);
    </script>

</body>
</html>
