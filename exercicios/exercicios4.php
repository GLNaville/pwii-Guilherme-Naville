<?php
   echo "parcela e o valor da compra. ";
   $v = $_POST ["v"];
   $v2 = $v + ($v * 0.16);
   $par = $v2 / 10;

   echo "<br> O valor da parcela ficou: $par<br>";
   echo "<br> O valor da compra depois de adicionar 16% ficou: $v2 <br>";


?>