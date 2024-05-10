
<?php
$lista = [1, 2, 3, 4];

function selezionanumeripari($lista) {
    $lista_pari = [];

    foreach ($lista as $numero) {
        if ($numero % 2 == 0) {
            $lista_pari[] = $numero;
        }
    }

    return $lista_pari;
}

$risultato=selezionanumeripari($lista);
print_r ($risultato);

?>
