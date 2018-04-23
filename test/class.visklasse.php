<?php

include_once 'class.Dierklasse.php';

class Visklasse extends Dierklasse{
	protected $soort = 'vis';
	
	function __construct( $n, $v){
		$this->naam = $n;
		$this->voer = $v;
	}
	
	protected function extra(){
		return '<BR>Dit dier zwemt veel en in zoet en zout water.';
	}
}
?>