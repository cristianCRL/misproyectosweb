
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <body>

    <div class="header">
      <h2>Piedra papel o tijera</h2>
    </div>
    <div class="container">
      <form action="index.php" method="post">
        <label for="fname" class="piedra">  <img id=foto1 src="./piedra.png"/></label>

            <input type="radio" id="piedra" name="papel">

        <label for="papel">  <img id=foto2 src="./papel.png"></label>

            <input type="radio" id="papel" name="papel">

        <label for="fname">  <img id=foto3 src="./tijera.png"/></label>


            <input type="radio" id="tijera" name="papel">
  <br><br><br>
      <input class="boton" type="submit" value="Enviar">


</form>
        </div>

</div>
  </body>
</html>
