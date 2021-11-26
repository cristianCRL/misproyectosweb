<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="prueba.css" media="screen"/>
  </head>
  <body>
    <div id="header">
      <img id="Logo" src="./google.jpg" alt="logo">
      <img id="logo2"src="./homero.jpg" alt="logo2">

</div>
    <div class="Sugerencias">
    <h1>GRACIAS SU INFORMACION HA SIDO ENVIADA</h1>

    <img id="logo3"src="./homero.jpg" alt="logo3">

    </div>
    <div><?php echo $_POST['nombrecompleto'] ?></div>
    <div><?php echo $_POST['apellidos'] ?></div>
    <div><?php echo $_POST['Apodo'] ?></div>
    <div><?php echo $_POST['fecha de nacimiento'] ?></div>
    <div><span style="background-color:<?php print $_POST ['colorfav'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
    <div><?php echo $_POST['numero'] ?></div>
    <div>><?php echo $_POST['zodiaco'] ?></div>

    <h1>Guardado</h1>
    <a href="listado.php">Ir a listado</a>


    <?php
        $fichero = 'datos.txt';

        $actual = file_get_contents($fichero);

        file_put_contents($fichero, $actual);
        ?>
  </body>
</html>
