<?php
class ContoBancario {

    private $saldo;

    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }

    public function deposita($importo) {
        $this->saldo += $importo;
    }

    public function preleva($importo) {
        if ($this->saldo >= $importo) {
            $this->saldo -= $importo;
            return true; 
        } else {
            return false;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$importo = 10000;
$saldoiniziale = 1000000;

$conto = new ContoBancario($saldoiniziale);
$conto->deposita($importo);
$conto->preleva(5000); // Esempio di prelievo
$nuovoSaldo = $conto->getSaldo();

echo "Saldo iniziale: $$saldoiniziale\n";
echo "Importo depositato: $$importo\n";
echo "Nuovo saldo: $$nuovoSaldo\n";
?>


