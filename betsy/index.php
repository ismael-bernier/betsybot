<?php
/**
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */
  /***************************************************/
    /** Initialize the variables **/
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
