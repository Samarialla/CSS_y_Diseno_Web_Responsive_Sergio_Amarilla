<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width:device-width,user-scalable=no,initial-scale=1.0">
        <title>Css y Diseño Web</title>
        <link rel="stylesheet" type="text/css" href=" <?php base_url(); ?>assets/css/font.css"  >
        <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
        <link  rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<assets/css/bootstrap-theme.min.css">
        <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/bootstrap.min.js">
    </head>
<body id="body">
<header id="cabecera">

<!---
      <p>Css y Diseño Web!</p>


            <ul>

                <a href="<?php echo base_url() ?>Paisajes" title="Enlace genérico">Paisajes</a>
                <a href="<?php echo base_url() ?>Inicio" title="Enlace genérico">Experiencia</a>
                <a href="#" title="Enlace genérico">Retratos</a></li>
            </ul>



-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a id="color" class="navbar-brand" href="#">Comenzando con la fotografía</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li>  <a id="color" href="<?php echo base_url() ?>Paisajes" title="Enlace genérico">Paisajes</a></li>
      <li> <a id="color" href="<?php echo base_url() ?>Retratos" title="Enlace genérico">Retratos</a></li>
    </ul>
  </div>
</nav>


</header>
<div class="container">

            <figure id="container">

                  <img id="image1" src="assets/images/info.jpg" alt="triangle with all three sides equal"  >

              <div id="secundario">

                  <img id="image2" src="assets/images/responsive.jpg" alt="triangle with all three sides equal" >
                  <img id="image3"src="assets/images/web.jpg" alt="triangle with all three sides equal" >

              </div>
            </figure>

  </div>


<!--<footer>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a id="color" class="navbar-brand" href="#">Contactos</a>
        <a id="" class="navbar-brand" href="#">Correo Electronico &Sergojavier23@gamil.com</a>
        <a id="" class="navbar-brand" href="#">Direccion :Dr justo prieto Paraguay</a>
        <a id="" class="navbar-brand" href="#">Telefono :87878910</a>
      </div>

      <ul class="">
        <<li>  <a id="color" href="<?php echo base_url() ?>Paisajes" title="Enlace genérico">Paisajes</a></li>
        <li> <a id="color" href="<?php echo base_url() ?>Inicio" title="Enlace genérico">Experiencia</a></li>
      </ul>
    </div>
  </nav>
</footer>-->

<footer class="">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h4 class="text-uppercase "><b>Contactos</b></h4>
          <p>Correo Electronico</p>
          <p>Direccion</p>
          <p>Telefono</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Terminos</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!"></a>
              </li>
              <li>
                <a href="#!"></a>
              </li>


            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Redes Sociales</h5>

            <ul class="list-unstyled">
              <li>
                <p>
                <a href="#!">Facebook</a></p>
              </li>
              <li>
                <p>
                <a href="#!">Instagram</a></p>
                </li>

            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href=""> Derechos resercados</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    </body>
</html>
