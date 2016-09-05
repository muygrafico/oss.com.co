<!DOCTYPE html>
<html lang='en'>
<?php include 'includes/head.php';?>
<body>
  <?php include 'includes/header.php';?>
  <?php include 'includes/mini-hero.php';?>

  <section class='pipes-bg'>

    <div class='container'>
      <div class='row text-center'>
        <div class='col-md-6 col-md-offset-3'>
          <h2 class='section-title'>Contact Us</h2>
          <p class='values-text'>
            <strong>Please send us an E-mail and we will respond as soon as possible. Thank you!</strong>
          </p>
        </div>
      </div>
      <br>

  </div>
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h4 class='subtitle'>Contact form</h4>
          <div class="contact-form">

              <form class="form-horizontal" action="" method="post">
              <fieldset>
                <!-- <legend class="text-center">Formulario de contacto</legend> -->
                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Name</label>
                  <div class="col-md-9">
                    <input id="name" name="name" required type="text" placeholder="Your name" class="form-control">
                  </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">E-mail</label>
                  <div class="col-md-9">
                    <input id="email" name="email" required type="email" placeholder="Your email" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="subject">Subject</label>
                  <div class="col-md-9">
                    <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                  </div>
                </div>

                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Your message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" required placeholder="Write you message here" rows="7"></textarea>
                  </div>
                </div>

                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-right">
                    <button type="submit" class="button btn-primary btn-lg">Send</button>
                  </div>
                </div>
              </fieldset>
              </form>

        </div>

      </div>

      <div class="col-lg-6">
        <h4 class='subtitle'>Bogotá D.C Office</h4>
        <ul class='contact-list'>

          <li><a target='_blank' href="https://www.google.com/maps?cid=6267698027426220649">Cra 9B # 117A-41</a></li>
          <li><a href="callto:+5717498614"><i class="glyphicon glyphicon-earphone"></i> (+57) 1 749 8614</a> | <a href="callto:+5717027251"><i class="glyphicon glyphicon-earphone"></i> (+57) 1 702 7251</a></li>
          <li><a href="mailto:contacto@oss.com.co"><i class="glyphicon glyphicon-envelope"></i> contacto@oss.com.co</a></li>
        </ul>
        <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2430.868257868276!2d-74.0371136414186!3d4.696161278974693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56fb5625f4280a69!2sOilfield+Services+%26+Supplies!5e0!3m2!1ses-419!2s!4v1472945900001"></iframe>
      </div>

  </div>


  </div>
  </section>

  <?php include 'includes/footer.php';?>
</body>
</html>
<script type='text/javascript'>
  $(function() {
    $('.navbar-nav li:nth-child(6) a').addClass('active');
    $('.nav-languages li:nth-child(1) a').addClass('active');
  });
</script>


<!-- form script -->


<script type="text/javascript">
  $(function() {
    $('.contact-form').on('submit',function(e){
      e.preventDefault();
      $.ajax({
        url: "https://formspree.io/muygrafico@gmail.com",
        method: "POST",
        data: {
          name:$('#name').val(),
          email: $('#email').val(),
          subject: $('#subject').val(),
          message: $('#message').val()
        },

        dataType: "json",
        success: function(data) {
          console.log('success',data)
          swal({   title: "Your message has been send.",   text: " we will respond as soon as possible. Thank you!",   timer: 2000,   showConfirmButton: false });
          $('#name').val('');
          $('#email').val('');
          $('#subject').val('');
          $('#message').val('');
        },
        error: function(err) {
          swal({   title: "Error",   text: "Test your internet connection, if you believe that this should not be happening please write us to contacto@oss.com.co" });

          console.log(err)
        }
      });
    })
  });
</script>
