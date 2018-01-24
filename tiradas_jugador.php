<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <h2>DESARROLLO WEB ENTORNO SERVIDOR</h2>
      <h4>Tiradas del Dado</h4>
    </header>
    <article>
      <?php

        //Llamamos a la clase dado
        include_once("dado.php");

        //Creamos un nuevo dado
        $dado = new Dado();

        //Evitamos el texto de tirada 0. Va desde 1 hasta 12
        $tirada = 1;

        for ($i=0; $i <12; $i++) {
          //Obtenemos y mostramos por pantalla los datos
          echo "<p>Tirada ".$tirada.": ";
          echo $dado->tirarDado();
          echo "</br></p>";
          $tirada++;
        }
      ?>
    </article>
    <footer>
      <h5>Alumno: Francisco Manuel Castillo Castillo</h5>
      <h5>Asignatura: Desarrollo Web Entorno Servidor</h5>
    </footer>
  </body>
</html>
