<?php
   echo "Vamos calcular um volume, ";
   $comprimento = $_POST ["comprimento"];
   $largura = $_POST ["largura"];
   $altura = $_POST ["altura"];
   $volume = ($comprimento * $largura * $altura);

   echo "O volume é: $volume <br>";


?>