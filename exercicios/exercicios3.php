<?php
   echo "área trapézio ";
   $ladomenor = $_POST ["ladomenor"];
   $ladomaior = $_POST ["ladomaior"];
   $altura = $_POST ["altura"];
   $at = ($ladomaior + $ladomenor) * $altura / 2;

   echo "A área é $at <br>";


?>