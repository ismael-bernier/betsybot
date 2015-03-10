<?php
session_start();

/**
 * @author Ismael Bernier
 * @version 1.0
 * @license Do What The Fuck You Want To Public License (WTFPL) 
 * @license http://www.wtfpl.net/
 * 
 */
  /***************************************************/
    /** Initialise the variables **/
    /***************************************************/
	require_once("./var.init.php");
	 /***************************************************/
    /** Configuration file with autoloader **/
    /***************************************************/
	require_once("./config.php");
	
  
	
   
   /***************************************************/
    /** Starts the controller **/
    /***************************************************/
	$oCtl = new Controller();
	$oCtl->manage();

?>
