<?php
/**
 * Fichier de configuration. Il est appelé par index.php et par test/index.php
 * Il contient notamment l'autoloader
 * @author Ismael Bernier
 * @version 1.0
 * @update 2014-10-9
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
	
	include_once('../db_info.php');
	
	function mon_autoloader($class) 
	{
		$dossierClasse = array('../modeles/', '../vues/', '../lib/', '../lib/mysql/', '' );	// Ajouter les dossiers au besoin
		
		foreach ($dossierClasse as $dossier) 
		{
			//var_dump('./'.$dossier.$class.'.class.php');
			if(file_exists($dossier.$class.'.class.php'))
			{
				require_once($dossier.$class.'.class.php');
				//echo "requis";
			}
		}	  
	}
	
	spl_autoload_register('mon_autoloader');
	
?>