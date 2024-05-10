<?php
$a = 1000;
$b = 200;
$c=0.20;

function calcola($a, $b, $c)
{
    $somma_consumi = $a + $b;
    $costo_consumi = $somma_consumi * $c;

    return array($somma_consumi, $costo_consumi);
}

list($somma, $costo) = calcola($a, $b, $c);
echo "La somma dei consumi è: $somma\n";
echo "Il costo dei consumi è: $costo $\n  ";
?>
