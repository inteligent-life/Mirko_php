<?php
class Cinema {
    public $film = [];
    public function __construct()
    {

    }

    public function aggiungiFilm($titolo, $posti) {
        if (!isset($this->film[$titolo])) {
            $this->film[$titolo] = $posti;
            echo "Film '$titolo' è stato aggiunto." ;
        } else {
            echo "Il film '$titolo' è già presente." ;
        }
    }

    public function prenota($titolo) {
        if (isset($this->film[$titolo]) && $this->film[$titolo] > 0) {
            $this->film[$titolo]--;
            echo "Posto prenotato per il film '$titolo'." ;
        } else {
            echo "Spiacenti, il film '$titolo' non è disponibile o sono esauriti i posti." ;
        }
    }

    public function getFilm() {
        return $this->film;
    }
}

$cinema = new Cinema();
$cinema->aggiungiFilm("Star Wars", 150);
$cinema->aggiungiFilm("Top Gun", 100);
$cinema->prenota("Top Gun");
$cinema->prenota("Top Gun");

echo "Posti disponibili:" ;
foreach ($cinema->getFilm() as $titolo => $posti) {
    echo "- Film: '$titolo', Posti disponibili: $posti" ;
}


?>