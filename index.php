<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>DH Movies</title>
  </head>
  <body>
    <div class="cuerpo">
    <?php
      $barra=[
            ['nombre'=>'Inicio', 'url'=>'index.php'],
            ['nombre'=>'Peliculas', 'url'=>'peliculas.php'],
            ['nombre'=>'Contacto', 'url'=>'contacto.php'],
            ['nombre'=>'Reportes', 'url'=>'report.php'],
          ];
        ?>

    <div id="encabezado">
      <div class="logo">
        <img src="images/dhlogo.jpg" alt="digital house" width="80px">
      </div>
      <div id="titulo">
        <h1>DH Movies</h1>
      </div>

    </div>
<br>
<ul class="navBar">
  <!--<?php
  foreach ($barra as $value) {
    echo '<li><a class="barra" href="'.$value[url].'">'.$value[nombre].'</a></li>';
  }

   ?>--->

   <li class="itemBarra"><a class="barra" href="inicio.php">Inicio</a></li>
   <li class="itemBarra"><a class="barra" href="pelicukas.php">Peliculas</a></li>
   <li class="itemBarra"><a class="barra" href="contacto.php">Contacto</a></li>
   <li class="itemBarra"><a class="barra" href="report.php">Reportes</a></li>
  <li style="float:right"><a class="barra"href="login.html">Login</a></li>
</ul>

    </div>
<br>
    <div class="vista">
      <img class="prev" src="images/agustpost.jpg" alt="August Rush" width="200px" height="300px">
      <img class="prev" src="images/findnemopost.jpg" alt="Finding Nemo"width="200px"height="300px">
      <img class="prev" src="images/mrpsoter.jpg" alt="Maze Runners"width="200px"height="300px">
      <img class="prev" src="images/imfallout.jpg" alt="Mission Impossible: Fallout"width="200px"height="300px">
    </div>
    <br><br>

    <div class="pelis">
      <img class="img" src="images/agustpost.jpg" alt="August Rush" width="200px" style="float:left">
      <h4 class="plot">Titulo</h4>
      <p class="plot">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
<br>
    <div class="pelis">
      <img class="img" src="images/findnemopost.jpg" alt="August Rush" width="200px" style="float:left">
      <h4 class="plot">Titulo</h4>
      <p class="plot">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="pelis">
      <img class="img" src="images/mrpsoter.jpg" alt="August Rush" width="200px" style="float:left">
      <h4 class="plot">Titulo</h4>
      <p class="plot">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="pelis">
      <img class="img" src="images/imfallout.jpg" alt="August Rush" width="200px" style="float:left">
      <h4 class="plot">Titulo</h4>
      <p class="plot">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!--<p class="img"><img src="images/findnemopost.jpg" alt="August Rush" width="200px" align="left"> Plot de la pelicula</p>
    <br><br>
    <p class="img"><img src="images/mrpsoter.jpg" alt="August Rush" width="200px" align="left"> Plot de la pelicula</p>
    <br><br>
    <p class="img"><img src="images/imfallout.jpg" alt="August Rush" width="200px" align="left"> Plot de la pelicula</p>
    <br><br>

  -->
  <div class="parent" style="clear:left">
  <div class="redes">
    <ul class="pieDePag">
      <li class="piePag"><a href="https://twitter.com"target="_blank"><img src="images/tw.png" alt="Twitter"width="10px">Twitter</a></li>
      <li class="piePag"> <a href="https://www.instagram.com"target="_blank"><img src="images/ig.png" alt="intagram"width="10px">Instagram</a></li>
      <li class="piePag"><a href="http://www.facebook.com"target="_blank"><img src="images/fb.png" alt="Facebook"width="10px">Facebook</a></li>
      <li class="piePag"><a class="sticky" style="float:left" href="#titulo">Volver al inicio</a></li>
    </ul>

    </div>
  </div>
  </body>
</html>
