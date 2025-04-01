<?php
    $x = "Hello world!";
    $y = 'Hello world';

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $x = 12.4;

    var_dump($x);
    echo "<br><br>";

    $y = ['joão', 'ricardo , 2'];
    var_dump($y);
    echo "<br>";
    echo $y [1];

    $meuObj=new stdclass();
    $meuObj -> nome = "Davi";
    $meuObj -> idade = 32;
    $meuJson = json_encode ($meuObj);
    echo $meuJson;
    echo "<br>";
    var_dump ($meuJson);

?>