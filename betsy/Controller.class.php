<?php
/**
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */

class Controller 
{
	/**
	* 
	* @return void
	*/
	public function manage()
	{
		switch ($_GET['request'])
		{
			case 'betsy':
				$this->betsy();
				break;
			
			case 'panel':
				$this->panel();
				break;
					
			default:
				$this->betsy();
				break;
		}
	}
	
	/**
	* Affiche la page d'accueil
	*/	
	private function betsy()
	{
		$oView = new View();
		$oView->displayHeader();
		$oView->displayBetsyVid();
		$oView->displayBotSection();
		$oView->displayAboutBetsy();
		$oView->displayAboutBot();
		$oView->displayFooter();
	}
	
	private function panel()
	{
		$oView = new View();
		$oView->displayHeader();
		
		$username=$_SESSION["username"];
			$tempcandy=$_SESSION["candy"];
			$candy=md5($tempcandy);
			
			$oCandy = new Candy();
			$validateRole = $oCandy->checkRole($username, $candy);
			if($validateRole == 1){
				$oView->displayBotAdmin();
			}
			else{
				$oView->displayUserProfile();
			}
		
		
		$oView->displayFooter();
	}


}
?>