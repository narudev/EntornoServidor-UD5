<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Tirar Dados</h1>

    <?php

      include('dado.php');

      //Creamos objeto de tirar dados y le pasamos los parametros de 0 y 12
      $tirar_dados = new dado(0,12);

      for ($i=0; $i <= 12 ; $i++) {
        echo "Tirada nº $i : " . $tirar_dados->tirarDado() . "<br>";
      }

     ?>
  </body>
</html>
