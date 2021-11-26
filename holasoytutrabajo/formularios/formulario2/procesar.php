<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div><b>Nombre:</b><?php echo $_POST['nombrecompleto'] ?></div>
    <div><b>Apellido:</b><?php echo $_POST['apellidos'] ?></div>
    <div><b>Apodo:</b><?php echo $_POST['Apodo'] ?></div>
    <div><b>Fecha de nacimiento:</b><?php echo $_POST['fecha de nacimiento'] ?></div>
    <div><b>Color:</b><span style="background-color:<?php print $_POST ['colorfav'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
    <div><b>Nota:</b><?php echo $_POST['numero'] ?></div>
    <div><b>Signo del zodiaco:</b><?php echo $_POST['zodiaco'] ?></div>

    <h1>Guardado</h1>
    <a href="listado.php">Ir a listado</a>


    <?php
        $fichero = 'datos.txt';

        $actual = file_get_contents($fichero);


        $actual .= $_POST['nombrecompleto']." ";
        $actual .= $_POST['apellidos']."";
        $actual .= $_POST['Apodo']."";
        $actual .= $_POST['fecha de nacimiento']."";
        $actual .= $_POST['colorfav']."" ;
        $actual .= $_POST['numero']."";
        $actual .= $_POST['zodiaco']."\n";



        file_put_contents($fichero, $actual);
        ?>

  </body>
</html>
