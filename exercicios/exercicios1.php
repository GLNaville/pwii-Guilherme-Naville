<?php
   echo "Calculo de consumo medio  ";
   $distancia = $_POST ["distancia"];
   $quantidade = $_POST ["quantidade"];
   $consumo = ($distancia / $quantidade);

   echo "O consumo é: $consumo <br>";

?>