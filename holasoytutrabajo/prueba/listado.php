<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado</h1>
    <?php
    $fichero = fopen("datos.txt", "r");
    while($data = fgetcsv($fichero, 1000, " ")) {
        echo $data[0] . " " . $data[1] . "<br>";
        echo $data[2] . " " . $data[3] . "<br>";
        echo $data[4] . " " . $data[5] . "<br>";
        echo $data[6] . " " . $data[7] . "<br>";

    }
    fclose($fichero);
    ?>
  </body>
</html>
