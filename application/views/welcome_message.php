<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width:device-width,user-scalable=no">
        <title>Css y Diseño Web</title>

        <link  rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<assets/css/bootstrap-theme.min.css">
        <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/bootstrap.min.js">
    </head>
    <body>

        <div id="container">
            <h1>Css y Diseño Web!</h1>


            <ul>

                <a href="<?php echo base_url() ?>Paisajes" title="Enlace genérico">Inicio</a>
                <a href="<?php echo base_url() ?>Inicio" title="Enlace genérico">Experiencia</a>
                <a href="#" title="Enlace genérico">Retratos</a></li>

            </ul>
              <div id="image1">
                  <img src="assets/images/info.jpg" alt="triangle with all three sides equal"  >
              </div>
              <div>
                  <img src="assets/images/responsive.jpg" alt="triangle with all three sides equal" width="40px" height="30px" >
              </div>
              <div>
                  <img src="assets/images/web.jpg" alt="triangle with all three sides equal" width="40px" height="30px" >
              </div>
        </div>




    </body>
</html>
