<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="examen.css" media="screen"/>
    <form class="" action="procesar.php" method="post">
  </head>
  <body>
    <div class="div1" id="divderecha">
      <img id=foto1 src="./mario.jpeg"/>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.0994376361455!2d-3.602084284370164!3d40.406647879366325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42255d3a247575%3A0xd8a0a40edf810cff!2sIES%20Villablanca!5e0!3m2!1ses!2ses!4v1637667887806!5m2!1ses!2ses" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>

    </div>
    <div class="div2" id="divizquierda">
      <div class=formulario1>
        <h1>PIZZERIA MARIO</h1>
        <h2>Elige tus ingredientes</h2>
        <form action="procesar.php">

      <label for="fname" class="Ingrediente">Jamón</label>

          <input type="checkbox" id="checkbox1" name="Ingrediente">

    <label for="fname">Jamón</label>

        <input type="checkbox" id="checkbox1" name="Ingrediente">

      <label for="fname">Piña</label>

        <input type="checkbox" id="checkbox1" name="Ingrediente">

   <label for="fname">Champignon</label>

         <input type="checkbox" id="checkbox1" name="Ingrediente">

    <label for="fname">Bacon</label>

        <input type="checkbox" id="checkbox1" name="Ingrediente">

    <label for="fname">Cebolla</label>

        <input type="checkbox" id="checkbox1" name="Ingrediente">

    <label for="fname">Pimientos</label>

        <input type="checkbox" id="checkbox1" name="Ingrediente">

    <label for="fname">Calabacin</label>

        <input type="checkbox" id="checkbox1" name="Ingrediente">

    </div>


    <div class=formulario2>
<h3>Elige tu salsa</h3>
<label for="fname" class="salsa">Carbonara</label>

    <input type="radio" id="radio1" name="salsa">

<label for="fname">Barbacoa</label>

    <input type="radio" id="radio1" name="salsa">

<label for="fname">Tomate</label>

    <input type="radio" id="radio1" name="salsa">

<label for="fname">Sin-salsa</label>

  <input type="radio" id="radio1" name="salsa">


      </div>
        <div class=formulario3>
          <h4>Elige tu masa</h4>
          <label for="fname">Tipo de masa</label>
    <select class="masas" name="masas">

        <option value="Fina"></option>
        <option value="Fina">Fina</option>
        <option value="Fina">Media</option>
       <option value="Fina">Gorda</option>

    </select>

    </div>
<div class="formulario4">
  <h5>Dirección de envio</h5>
  <label for="lname">Tu Direccion</label>
  <input type="text" id="direccion" name="direccion" placeholder="Direccion">
<br><br><br>
  <input class="boton" type="submit" value="Enviar">


</div>
</div>

  </body>
</html>
