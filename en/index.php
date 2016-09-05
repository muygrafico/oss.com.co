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
            <li><a class='go-to-english' href='http://localhost:8000/en/index.php'>english</a></li>
            <li><a class='go-to-spanish' href='http://localhost:8000/es/index.php'>español</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class='main-slogan'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8'>
          <h4>
            We do things good for our people, our environment and our society, but especially for our clients.
          </h4>
        </div>
      </div>
    </div>
  </section>

  <section class='container'>
    <div class='row'>
      <div class='col-sm-4'>
        <h4 class='subtitle'>
          Oilfield Services & Supplies S.A.S.
        </h4>
        <img src='../images/home/oilfield-services-oss.jpg' class='img-responsive' alt='' />
      </div>
      <div class='col-sm-8'>
        <h4 class='subtitle side-margins'>
          Our Portfolio of Services:
        </h4>
        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Multiphase Flow Metering Services
          </h5>
          <p>
            The multiphase flow metering service from Oilfield Services & Supplies utilize HAIMO Multiphase Technology, being HAIMO a manufacture and multiphase service company worldwide. This service uses compact and light equipment for fast and save deployment during well testing operations. This advantage allows many clients the performance of accurate monitoring of flow rates of oil, gas and water.
          </p>
        </div>
        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Downhole and Surface Pumping and Stimulation Services
          </h5>
          <p>
            With the supply of specialize stimulation units and highly qualify personnel Oilfield Services & Supplies performs downhole stimulation services for organic and inorganic downhole treatment (scale). The use of mobile stimulation units with dual triplex pump systems helps our clients to reduce formation damage and to increase well productivity.
          </p>
        </div>
      </div>
    </div>
    <br>
    <div class='row'>
      <div class='col-sm-4'>
        <img src='../images/home/hpt.jpg' class='img-responsive' alt='' />
      </div>
      <div class='col-sm-8'>

        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Compact Early production Facilities and Fast testing Facilities
          </h5>
          <p>
            Combining Multiphase Flow Meter compact equipment with compact separators, hydrocyclons and compact oil water polishing equipment Oilfield Services & Supplies offers our clients an alternative to conventional early production facilities to manage the well fluids in a safe and efficient way reducing footprints, space and overall costs.
          </p>
        </div>
        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Power Generation with Gas Generators
          </h5>
          <p>
            OSS can supply generators with gas engines from 750 Kw to 2000 Kw to be used for power generation at production facilities or well sites, enabling our clients to use the associated gas and hence reduce the cost related to the maintenance and operation of generators run with diesel engines.
          </p>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-4'>
        <br>
        <p>
          Oilfield Services & Supplies was established in Colombia in April 2009 with the objective of supplying services for different clients in the oil and gas industry, in the well testing and production monitoring services with new multiphase metering technology and downhole pumping services for well intervention.
        </p>
        <a class='button btn-primary' href='about-us.php'>
          Know more about OSS
        </a>
      </div>
    </div>
  </section>

  <section class='container alliances'>
    <div class='row'>
      <div class='col-sm-12'>
        <h4 class='subtitle pipes'>
          A Haimo group company
        </h4>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-12 text-center'>
        <ul class='alliances-logos'>
          <li>
            <a target='_blank' href='http://www.haimo.com.cn/english'><img src='../images/home/haimo-logo.jpg' alt='' /></a>
          </li>
        </ul>
      </div>
    </div>
    <br>
  </section>

  <?php include 'includes/footer.php';?>
</body>
</html>
<script type='text/javascript'>
$(function() {
  $('.navbar-nav li:nth-child(1) a').addClass('active');
  $('.nav-languages li:nth-child(1) a').addClass('active');
});
</script>
