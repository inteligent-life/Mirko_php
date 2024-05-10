<?php
$lista = [1, 2, 3, 4];

function moltiplicax2($lista) {
    $moltiplicati=[];

    foreach ($lista as $numero) {
         
            $moltiplicati[] = $numero  *2;
        }
    

    return $moltiplicati;
}

$risultato=moltiplicax2($lista);
print_r ($risultato);

?>