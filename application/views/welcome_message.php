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
      <li>  <a id="color" href="<?php echo base_url() ?>Welcome" title="Enlace genérico">Inicio</a></li>
      <li>  <a id="color" href="<?php echo base_url() ?>Paisajes" title="Enlace genérico">Paisajes</a></li>
      <li> <a id="color" href="<?php echo base_url() ?>Retratos" title="Enlace genérico">Retratos</a></li>
    </ul>
  </div>
</nav>
</header>


  <div  class=""id="principal">
    <figure id="">
      <p id="pie">
        <img id="image1" src="assets/images/info.jpg" alt="triangle with all three sides equal"  >

      </p>
    </figure>
 </div>

<!--  <div id="secundario" class="container">

        <figure>
          <a href="<?php echo base_url() ?>Paisajes" title="Paisajes">
            <img id="image2" src="assets/images/responsive.jpg" alt="triangle with all three sides equal" >

          </a>
        </figure>

      <figure>
        <a href="<?php echo base_url() ?>Retratos" title="Retratos">
        <img id="image3"src="assets/images/web.jpg" alt="triangle with all three sides equal" >

      </figure>
  </div>-->

<div class="container" id="secundario">
<article id="izquierda">
  <a class="" href="">
    <img id="image2" src="assets/images/responsive.jpg" alt="triangle with all three sides equal" >
  </a>
  <h3>Retratos</h3>
</article>

<article id="derecha">
  <a class="" href="">
    <img id="image3" src="assets/images/web.jpg" alt="triangle with all three sides equal" >
  </a>
  <h3>Paisajes</h3>
</article>
</div>

<footer>

    <div class="container">
      <div class="" id="contacto">
        <h3>Contactos</h3>
        <p>Correo Electronico</p>
        <p>Direccion</p>
        <p>Telefono</p>

      </div>

      <div id="Terminos">
        <h3>Terminos</h3>
        <p>Adsoluta</p>
        <p>position</p>
        <p>Granja</p>

      </div>

      <div id="RedesSociales">
        <h3>Redes Socilaes</h3>
        <p>
          <a href="#!">Facebook</a>
        </p>

        <p>
          <a href="#!">Instagram</a>
        </p>

      </div>

      <div id="Derechos">
      <h3>Derechos</h3>
      <p>Todos los Derechos resercados</p>

      </div>

    </div>
</footer>

<!--<footer class="">


    <div class="container-fluid text-center text-md-left">


      <div class="row">


        <div class="col-md-3 mt-md-0 mt-">


          <h5 class="text-uppercase "><b>Contactos</b></h5>
          <p>Correo Electronico</p>
          <p>Direccion</p>
          <p>Telefono</p>

        </div>

        <div class="col-md-3 mb-md-0 mb-3">

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
          <div class="col-md-3 mb-md-0 mb-3">
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

          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Derechos</h5>

            <ul class="list-unstyled">
              <li>
                <p>
                <a href="#!">Autor</a></p>
              </li>
              <li>
                <p>
                <a href="#!">Page</a></p>
                </li>
            </ul>
          </div>

      </div>

    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href=""> Derechos resercados</a>
    </div>
  </footer>-->
</body>
</html>
