
<?php

$numero = 5;
$fattoriale = 1;
$fattore;

function fattoriale($numero) {

    if($numero==0)
    {$fattoriale=1;
    }
    else{
    
    $fattore=$numero;
    for ($i = 1; $i <= $numero; $i++) {
        $fattore = $fattore--;
        $fattoriale *= $fattore;
        
    }

    return $fattoriale;
}
}

echo "Il fattoriale di 5 è: " . fattoriale($numero);

?>


<?php

$numero = 5;
$fattoriale = 1;
$fattore;

function fattoriale($numero) {

    if($numero==0)
    {$fattoriale=1;
    }
    else{
    
    $fattore=$numero;
    for ($i = 1; $i == $numero; $i++) {
        $fattore = $fattore--;
        $fattoriale=$numero* $fattore; 
        
    }

    return $fattoriale;
}
}

echo "Il fattoriale di 5 è: " . fattoriale($numero);

?>
