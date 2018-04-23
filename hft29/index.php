<?php
$dier = new Paardklasse ( 'Elmo' );
echo $dier->vertel()."<BR>";
$dier = new Dierklasse ('varken', 'Pipie');
echo $dier->vertel()."<BR>";

class Dierklasse {
    protected $soort;
    protected $naam;

    function __construct( $s, $n){
     $this->soort = $s;
     $this->naam = $n;
    }

    public function vertel() {
        if ($this->soort != '' && $this->naam !=''):
        return "Dit $this->soort heet $this->naam.";
        else:
            return false;
        endif;
    }
}

class Paardklasse extends Dierklasse{
    protected $soort = 'paard';

    function __construct( $n ){
        $this->naam= $n;
    }
}
?>