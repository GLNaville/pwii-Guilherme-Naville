<?php
echo "While <br>";
//while
$contador = 1;

while ($contador < 6) {
    echo $contador, "<br>";
    $contador++;
}
echo "<br> Do While <br>";
//do while
$contadorii = 6;

do {
    echo $contadorii , "<br>";
    $contadorii++;
} while ($contadorii < 6);

echo "<br> For <br>";

for ($x = 0; $x <= 10; $x++){
    echo "The number is $x <br>";
}
?>