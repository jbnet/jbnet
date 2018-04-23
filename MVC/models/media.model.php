<?php 

/** 
 * Media Class voor MVC tutorial www.sitemasters.be 
 * @author Marten van Urk 
 * 
 */ 
class media { 
    public $iMedia_ID;            //Media id 
    public $sMedia_Naam;        //Media title 
    public $sMedia_DoP;            //Media Date of Publicity 
    public $sMedia_Genre;        //Media Genre     
     
    /** 
     * Construct 
     * @author Marten van Urk 
     * 
     */ 
    public function __construct() {} 
     
    /** 
     * Get a media object searching on media title 
     * 
     * @param string $media_title 
     * @param Resource $connection 
     */ 
     
    public function getMedia($media_title, $connection) { 
        $aData = array(); 
        $sQuery = "SELECT * FROM media WHERE media_naam = '" .mysql_real_escape_string($media_title). "'"; 
         
        /** 
         * Vanaf dit punt gaan we zelf de foutafhandeling oppakken 
         */ 
        $rResult = @mysql_query($sQuery, $connection); 
         
        /** 
         * Foutafhandeling ===> Query Fout vangen 
         */ 
        if ($rResult === false) { 
            throw new Exception('Query (' .$sQuery. ') mislukt: ' . mysql_error()); 
        } 
         
        /** 
         * Foutafhandeling ===> Lege result Array terug gekregen 
         */ 
        if (@mysql_num_rows($rResult) == 0) { 
            throw new Exception('Geen media objecten gevonden met de naam: ' . $media_title, NO_MEDIA); 
        } 
         
        /** 
         * Als de parser op dit punt komt zijn er geen onvolkomendheden gevonden en kunnen we verder met het script 
         */ 
        $aData = @mysql_fetch_assoc($rResult); 
         
        $this->iMedia_ID    = $aData['media_id']; 
        $this->sMedia_Naam    = $aData['media_title']; 
        $this->sMedia_DoP    = $aData['media_dop']; 
        $this->sMedia_Genre = $aData['media_genre'];         
    }     
} 
?> 