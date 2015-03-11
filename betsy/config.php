<?php
/**
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */
	
	include_once('./db_info.php');
	include_once('./view/view.class.php');
	include_once('./model/Betsybot.class.php');
	include_once('./model/Candy.class.php');
	include_once('./Controller.class.php');
	/*
	function rand_autoloader($class) 
	{
		$fileClasse = array('./model/', './view/', './lib/', './lib/mysql/', '' );	
		
		foreach ($fileClasse as $file) 
		{
			if(file_exists('./'.$file.$class.'.class.php'))
			{
				require_once('./'.$file.$class.'.class.php');
				
			}
		}	  
	}
	
	spl_autoload_register('rand_autoloader');
	 * 
	 */
?>