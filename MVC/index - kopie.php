<?php 
session_start(); 

/** 
 * Include het configuratie bestand 
 *  
 * Hier word het object voor de register class aangemaakt! 
 * Verder wordt er een functie aangemaakt om automatisch een class in te laden. 
 * *************************************************************************** 
 * define('DIRSEP', DIRECTORY_SEPARATOR); 
 *  
 * Functie om classes te laden 
 * 
 * @author Marten van Urk 
 * @param String $class_name 
 * @return including file of false 
 * function __autoload($class_name) { 
 *    $filename = strtolower($class_name) . '.php'; 
 *    $file = site_path . 'classes' . DIRSEP . $filename; 
 *     
 *    if (file_exists($file) === false) { 
 *        return false; 
 *    } 
 *     
 *    include($file); 
 * } 
 *  
 * $registry = new Registry; 
 * *************************************************************************** 
 */ 

include_once('includes/config.inc.php'); 

/** 
 * Laad de template in 
 */ 
$template = new Template($registry); 
$registry->set ('template', $template); 

/** 
 * Laad de router in 
 */ 
$router = new Router($registry); 
$registry->set('router', $router); 

$router->setPath('controllers'); 

$router->delegate(); 
?>  