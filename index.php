<!DOCTYPE html>
<html lang='en'>
<?php include 'includes/head.php';?>
<body>
  <?php include 'includes/header.php';?>
  <div id='home-page'>
    <section class='hero'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-12'>
          <ul class='list-inline pull-right nav-languages'>
            <li><a href='#'>english</a></li>
            <li><a href='#'>español</a></li>
          </ul>
        </div>
      </div>
    </div>
    </section>
    <section class='main-slogan'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8'>
            <h4>Hacemos bien las cosas para nuestra gente, nuestro ambiente y nuestra sociedad
            pero sobre todo para nuestros clientes.</h4>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'includes/footer.php';?>
</body>
</html>
<script type='text/javascript'>
  $(function() {
    $('.navbar-nav li:nth-child(1) a').addClass('active');
    $('.nav-languages li:nth-child(2) a').addClass('active');
  });
</script>
