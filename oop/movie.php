<?php
// creo classe e proprietà
class Movie{
    public $paese;
    public $genere;
    public $durata;
    public $regista;
// dichiaro costruttore
    public function __construct($_paese = null, $_genere = null){
        $this->paese = $_paese;
        $this->genere = $_genere;
    }

}
// istanzio primo oggetto
$italia = new Movie();
// accedo all'oggetto instanziato
$italia->paese = 'Film Italiano';
$commedia->genere = "Commedia all'italiana";

// istanzio secondo oggetto
$usa = new Movie();
$usa->paese = 'Film Americano';
$horror->genere = 'Film Horror';

// stampo a schermo
echo $italia->paese;
echo $commedia->genere;
echo $usa->paese;
echo $horror->genere;




