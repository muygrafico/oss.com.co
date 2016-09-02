<!DOCTYPE html>
<html lang='en'>
<?php include 'includes/head.php';?>
<body>
  <?php include 'includes/header.php';?>

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

  <?php include 'includes/footer.php';?>
</body>
</html>
<script type='text/javascript'>
  $(function() {
    $('.navbar-nav li:nth-child(2) a').addClass('active');
    $('.nav-languages li:nth-child(2) a').addClass('active');
  });
</script>
