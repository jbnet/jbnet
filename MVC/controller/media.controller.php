<?php 

class controller_Media extends Controller_Base { 
    function index() { 
        /** 
         * Hier voer je een aantal handelingen uit zoals het berekenen van bepaalde waardes. 
         * Bij ons media database zou het dus als volgt kunnen zijn. 
         * Let ook op de combinatie met ons model genaamd Media en op de koppeling met de datbase door middel van een sessie! 
         */ 
         
        include_once('models/media.model.php'); 
        $media = new MediaModel(); 
         
        if (isset($_GET['media_id'])) { 
            if (is_numeric($_GET['media_id'])) { 
                /** 
                 * Haal de waardes uit de database. Het model zet deze in de klasse variabelen 
                 * dus kunnen we ze aanroepen met $object_naam->klassevariabelenaam; 
                 */ 
                $getMedia        = $media->getMedia('tiesto', $_SESSION['db']); 
                $media_naam      = $media->sMedia_Naam; 
                $media_dop       = $media->sMedia_DoP; 
                $media_genre     = $media->sMedia_Genre;     
                $media_ID        = $media->sMedia_ID; 
                 
                /** 
                 * Zet de verschillende waardes in het register zodat we deze in de view kunnen gebruiken 
                 */                 
                $this->registry['template']->set('media_naam', $media_naam); 
                $this->registry['template']->set('media_genre', $media_genre); 
                $this->registry['template']->set('media_id', $media_ID); 
                $this->registry['template']->set('media_dop', $media_dop); 
                 
                /** 
                 * Verwijzing naar de view. 
                 * Dit laat de view met de naam wat tussen de haken van show staat. 
                 * Hier is het dus de view media. Deze staat in de map templates en 
                 * heeft de naam <viewnaam>.php 
                 */ 
                $this->registry['template']->show('index'); 
            } 
        } else { 
            /** 
             * Er is geen media id meegegeven in de url dus toon gewoon de view. 
             * Hier kan je natuurlijk ook een model functie aanroepen die alle categorien 
             * laat zien zoals we dat in het voorbeeld gaan doen. 
             */ 
            $this->registry['template']->show('index'); 
        } 
    }     
} 
?>