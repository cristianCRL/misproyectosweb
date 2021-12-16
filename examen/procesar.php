<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h8>Su pedido estara listo en 30 min</h8>
    <div><b>Ingrediente:</b><?php echo $_POST['Ingrediente'] ?></div>
    <div><b>Salsa:</b><?php echo $_POST['salsa'] ?></div>
    <div><b>Masas:</b><?php echo $_POST['masas'] ?></div>
    <div><b>Direccion</b><?php echo $_POST['direccion'] ?></div>

    <h1>Guardado</h1>
    <a href="listado.php">Ir a listado</a>

    <?php
        $fichero = 'datos.txt';

        $actual = file_get_contents($fichero);


        $actual .= $_POST['Ingrediente']." ";
        $actual .= $_POST['salsa']."";
        $actual .= $_POST['masas']."";
        $actual .= $_POST['direccion']."";


        file_put_contents($fichero, $actual);
        ?>

  </body>
</html>
