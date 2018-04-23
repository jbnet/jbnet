<?php 
/** 
 * Include the TemplatePower Class for striping (x)HTML and PHP 
 */ 
include_once('library/templates.php'); 

/** 
 * Define a new object of the templatepower class  
 **/ 
  
$Tpl = new TemplatePower('templates/tpl/index.tpl'); 

/** 
 * Prepare the page 
 **/ 
  
$Tpl->Prepare(); 

$Tpl->newBlock('completelist'); 
$Tpl->assign('media_id', $media_title); 
$Tpl->assign('media_name', $media_name); 
$Tpl->assign('media_genre', $media_genre); 

/** 
 * Print it to screen 
 **/ 

$Tpl->printToScreen(); 
?> 