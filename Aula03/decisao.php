<?php 
$x = 2.;
$y = 1;
$media = ($x + $y) /2;
// maior, menor ou igual?
//media < 6,0 & >= 4,0 = 'recuperação'
//media <4,0 = 'reprovado'
//= 'recuperação'

if ($media >= 6.0) {
    //se verdade
    echo ' aluno aprovado';
} else if ($media >= 4.0 ) {
    //se verdade
    echo 'aluno em recuperação ';
} else {
    //se falsa
    echo 'aluno reprovado ';
}
?>