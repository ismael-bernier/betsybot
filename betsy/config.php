<?php
/**
  * @author Ismael Bernier
 * @version 1.0
 * @license Do What The Fuck You Want To Public License (WTFPL) 
 * @license http://www.wtfpl.net/
 * 
 */
	
	include_once('./db_info.php');
	include_once('./view/view.class.php');
	include_once('./model/Betsybot.class.php');
	include_once('./model/Candy.class.php');
	include_once('./Controller.class.php');
	/*
	function my_autoloader($class) 
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
	
	spl_autoload_register('my_autoloader');
	 * 
	 */
?>