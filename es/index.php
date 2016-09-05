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
            Hacemos bien las cosas para nuestra gente, nuestro ambiente y nuestra sociedad
            pero sobre todo para nuestros clientes.
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
          Nuestro Portafolio de Servicios:
        </h4>
        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Medición Multifásica para pruebas de pozos
          </h5>
          <p>
            El servicio de medición Multifásica de Oilfield Services & Supplies utiliza la tecnología de Haimo Technologies Inc. Este servicio utiliza un equipo compacto y ligero para el despliegue rápido y seguro durante las operaciones de prueba de pozo. Esto ha permitido a diferentes Clientes realizar el monitoreo preciso de los caudales de flujo de aceite, gas y agua.
          </p>
        </div>
        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Servicios de Bombeo de Fluidos Downhole
          </h5>
          <p>
            El objetivo de este servicio es realizar trabajos de estimulación e inhibición de orgánicos e inorgánicos (scale) por forzamiento al yacimiento mediante unidades móviles con bombas triplex de alta presión con el propósito de reducir el daño de formación e incrementar la productividad del pozo.
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
            Facilidades Tempranas y Manejo de Aguas de Producción
          </h5>
          <p>
            Combinando los sistemas de Medición Multifásica con separadores compactos, hidrociclones sistemas compactos de separación de aceite en agua, Oilfield Services & Supplies ofrece a sus clientes una alternativa a los sistemas convencionales de facilidades tempranas para el manejo de los fluidos de producción de una manera segura y eficiente, reduciendo las áreas de construcción, optimizando el espacio, reduciendo el costo de implementación y mantenimiento. (Reducción de CAPEX & OPEX).
          </p>
        </div>
        <div class='col-sm-6'>
          <h5 class='subtitle'>
            Generación de energía eléctrica con generadores con motores a gas
          </h5>
          <p>
            Actualmente contamos con equipos desde 750 Kw-h hasta 2000 Kw-h para ser instalados en facilidades o pozos y poder así aprovechar el gas asociado a la producción de hidrocarburos reduciendo los costos en la utilización y mantenimiento de generadores con motores diesel.
          </p>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-4'>
        <br>
        <p>
          Oilfield Services & Supplies es una empresa de servicios creada en Abril del 2009, con el propósito de prestar servicios a nuestros Clientes de la industria del petróleo y gas, en el monitoreo y prueba de pozos con equipos de nueva tecnología multifásica y en el bombeo de fluidos downhole para el reacondicionamiento de pozos.
        </p>
        <a class='button btn-primary' href='nosotros.php'>
          Conoce más sobre OSS
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
  $('.nav-languages li:nth-child(2) a').addClass('active');
});
</script>
