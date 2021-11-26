<?php
session_start();
if ( ! isset($_POST["numero"])){
  $_SESSION["numero"]=rand(1,10);
  $_SESSION ["intentos"]=0;

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Adivina el numero</title>
  </head>
  <body>
    <h1>Hola</h1>

    <div>
      <form action="index.php" method="post">
        <input type="text" name="numero" value="">
        <input type="submit" name="" value="Enviar">
      </form>
      <?php
      if (isset($_POST ["numero"])) {
        echo "<h3>Has enviado algo: "  . $_POST['numero']. "</h3>";
          if ($numero_aleatorio ==  $_POST['numero']) {
            echo "<h1> Has ganado!!! </h1>";
            echo "<img src=./ganador.jpg/>";

          }
          if ($intentos > 5 ){
          echo "Malo y puto";
          echo "<img src=./caca.jpg/>";
        }

          if ($numero_aleatorio <  $_POST['numero']) {
            echo "<h1> Un numero mas pequeño!!! </h1>";

        }
            if ($numero_aleatorio >  $_POST['numero']) {
              echo "<h1> Un numero mas grande!!! </h1>";
          }
          } else {
            echo "Bienvenido al juego!";

        }

           ?>
    </div>
<p><a href="index.php">Reiniciar el juego!</a></p>

  </body>
</html>
