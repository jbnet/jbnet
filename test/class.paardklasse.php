<?php

include_once 'class.Dierklasse.php';

class Paardklasse extends Dierklasse{
	protected $soort = 'paard';
	
	function __construct( $n, $v){
		$this->naam = $n;
		$this->voer = $v;
	}

	protected function extra(){
		return '<BR>Dit dier eet in de wei.';
	}
}
?>