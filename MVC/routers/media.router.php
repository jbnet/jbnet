<?php 
Class Router { 
    private $registry; 
    private $path; 
    private $args = array(); 
     
    /** 
     * Constructor 
     * Deze zet het register in een klasse variabele 
     * 
     * @param Class object $registry 
     */ 
     
    function __construct($registry) { 
        $this->registry = $registry; 
    } 
     
    /** 
     * Deze functie zet het controller path 
     * Hij controleert eerst of de directory bereikbaar is. 
     * Wanneer dit zo is word het in een klasse variabele gezet voor later gebruik. 
     * 
     * @param String $path 
     */ 
     
    function setPath($path) { 
        $path = trim($path, '/\'); 
        $path .= DIRSEP; 
         
        if (is_dir($path) == false) { 
            throw new Exception ('Invalid controller path: `' . $path . '`'); 
        } 
         
        $this->path = $path; 
    } 
     
    /** 
     * Deze functie word aan het eind aangeroepen. 
     * Deze analyseert de route, kijkt of het bestand aanwezig is en wanneer dit zo is  
     * zal er een object van die class aangemaakt worden. Als dat zo is zal word de action  
     * van de controller aangeroepen. Dit is een methode binnen de controller. 
     * Dus www.mijndomein.nl/media/add/ is de action add van de controller media 
     * 
     */ 
     
    function delegate() { 
    // Analyze route 
    $this->getController($file, $controller, $action, $args); 
     
    // File available? 
    if (is_readable($file) == false) { 
        die ('404 Not Found'); 
    } 
     
    // Include the file 
    include ($file); 
     
    // Initiate the class 
    $class = 'Controller_' . $controller; 
    $controller = new $class($this->registry); 
     
    // Action available? 
    if (is_callable(array($controller, $action)) == false) { 
        die ('404 Not Found'); 
    } 
     
    // Run action 
    $controller->$action(); 
    } 
     
    private function getController(&$file, &$controller, &$action, &$args) { 
        $route = (empty($_GET['route'])) ? '' : $_GET['route']; 
         
        if (empty($route)) { $route = 'index'; } 
         
        // Get separate parts 
        $route = trim($route, '/\'); 
        $parts = explode('/', $route); 
         
        // Find right controller 
        $cmd_path = $this->path; 
        foreach ($parts as $part) { 
            $fullpath = $cmd_path . $part; 
            // Is there a dir with this path? 
            if (is_dir($fullpath)) { 
                $cmd_path .= $part . DIRSEP; 
                array_shift($parts); 
                continue; 
            } 
             
            // Find the file 
            if (is_file($fullpath . '.php')) { 
                $controller = $part; 
                array_shift($parts); 
                break; 
            } 
        } 
        if (empty($controller)) { $controller = 'index'; }; 
         
        // Get action 
        $action = array_shift($parts); 
        if (empty($action)) { $action = 'index'; } 
        $file = $cmd_path . $controller . '.php'; 
        $args = $parts; 
    } 
} 
?> 