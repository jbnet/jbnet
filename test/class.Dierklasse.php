<?php



abstract class Dierklasse {
	protected $soort;
	protected $naam;
	protected $voer;
	
	function __construct( $s, $n, $v){
		$this->soort = $s;
		$this->naam = $n;
		$this->voer = $v;
	}
	public function vertel(){
		if ( $this->soort != '' && $this->naam !='' ):
			return "<p>Dit $this->soort heet $this->naam. <BR>En hij eet $this->voer.".$this->extra()."</p>";
		else:
			return false;
		endif;
	}

	protected function extra(){
		return '.';
	}
}


?>