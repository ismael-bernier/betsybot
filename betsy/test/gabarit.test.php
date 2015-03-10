<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>

		<title>Test unitaire</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="../css/global.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="header">
			<h1>Test - Class MairesQuebec</h1>
		</div>
		<div id="contenu">
			<?php // Placer vos tests unitaires ici... 
			
			include_once('./config.php');?>
			
			<div>
			<h3>Case : new MairesQuebec() - sans paramètre</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec);
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<h2>MairesQuebec->rechercheMaires()</h2>
		
		<div>
			<h3>Case : new MairesQuebec() -> getNomMaire()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getNomMaire();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getNomMaire('a')</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getNomMaire('a');
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getNomMaire(1)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getNomMaire(1);
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		
		
		<div>
			<h3>Case : new MairesQuebec() -> getPrenomMaire()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getPrenomMaire();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getPrenomMaire('a')</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getPrenomMaire('a');
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getPrenomMaire(1)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getPrenomMaire(1);
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> getVilleMaire()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getVilleMaire();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getVilleMaire('a')</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getVilleMaire('a');
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getVilleMaire(1)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getVilleMaire(1);
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<div>
			<h3>Case : new MairesQuebec() -> getDebutMaire()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getDebutMaire();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getDebutMaire('a')</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getDebutMaire('a');
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getDebutMaire(1)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getDebutMaire(1);
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<div>
			<h3>Case : new MairesQuebec() -> getFinMaire()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getFinMaire();
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getFinMaire('a')</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getFinMaire('a');
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getFinMaire(1)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					echo $oMairesQuebec->getFinMaire(1);
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires());
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("random", "random")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("random", "random"));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires(123, "random")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires(123, "random"));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("nom", "random")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("nom", "random"));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("nom", "")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("nom", ""));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("nom", 123)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("nom", 123));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("nom", "Thompson")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->rechercheMaires("nom", "Thompson");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr><hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("prenom", "random")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("prenom", "random"));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("prenom", "")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("prenom", ""));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("prenom", 123)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("prenom", 123));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("prenom", "Hunter S.")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->rechercheMaires("prenom", "Hunter S.");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("annee", "")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("annee", ""));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("annee", "random")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("annee", "random"));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("annee", 1832)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("annee", 1832));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("annee", 2016)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					var_dump($oMairesQuebec->rechercheMaires("annee", 2016));
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> rechercheMaires("annee", 2001)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->rechercheMaires("annee", 2001);
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<hr>
		<h2>MairesQuebec->listeMaires()</h2>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires()</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires();
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires("random")</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires("random");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires(111)</h3>	
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires(111);
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires("$aListVilles", "Montreal")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", 123)</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", 123);
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "sss")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "sss");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "debut")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "debut");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "nom")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "nom");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "prenom")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "prenom");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "prenom", 111)</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "prenom", 111);
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "prenom", "ggg")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>	
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "prenom", "ggg");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "prenom", "asc")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "prenom", "asc");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> listeMaires($aListVilles, "Montreal", "prenom", "desc")</h3>
			$aListVilles = array(['id'=>1, 'ville' => 'Montreal'])<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>1, 'ville' => 'Montreal']);
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeMaires($aListVilles, "Montreal", "prenom", "desc");
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> listeAllMaires()</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$aListeMaires = $oMairesQuebec->listeAllMaires();
					
					foreach($aListeMaires as $Maire)
					{
					var_dump($Maire);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire()</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire();
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("")</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("");
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire(123)</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire(123);
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("Thompson", "")</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("Thompson", "");
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("Thompson", 123)</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("Thompson", 123);
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("Thompson", "fff")</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("Thompson", "fff");
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("Thompson", "Quebec", "")</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("Thompson", "Quebec", "");
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("Thompson", "Quebec", "ddd")</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("Thompson", "Quebec", "ddd");
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> getIDMaire("Thompson", "Quebec", 2001)</h3>
			<?php
				try
				{
					$oMairesQuebec = new MairesQuebec();
					$nIDMaire = $oMairesQuebec->getIDMaire("Thompson", "Quebec", 2001);
					
					echo $nIDMaire;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire(123)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire(123);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", 123)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", 123);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", 123)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", 123);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", "Quebec", "vvv")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", "Quebec", "vvv");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", "Quebec", 2010, "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", "Quebec", 2010, "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", "Quebec", 2010, "hhh")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", "Quebec", 2010, "hhh");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", "Quebec", 2010, 2014)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", "Quebec", 2010, 2014);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> setMaire("Kardashian", "Koe", "Quebec", 2010, 2014, $aListVilles)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->setMaire("Kardashian", "Koe", "Quebec", 2010, 2014, $aListVilles);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire()</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire();
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire("")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire("");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire("dddd")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire("dddd");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire(1)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire(1);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, 123)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, 123);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", 322)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", 322);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", 322)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", 322);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "Quebec", "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "Quebec", "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "Quebec", "ooo")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "Quebec", "ooo");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, "")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, "");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, "eee")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, "eee");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, 2014)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, 2014);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, 2014, $aListVilles)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id=$oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$oMaire = $oMairesQuebec->modifierMaire($id, "Kardashian", "Khloe", "Quebec", 2010, 2014, $aListVilles);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<div>
			<h3>Case : new MairesQuebec() -> deleteMaire("")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$oMaire = $oMairesQuebec->deleteMaire("");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> deleteMaire("asd")</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$oMaire = $oMairesQuebec->deleteMaire("asd");
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new MairesQuebec() -> deleteMaire($id)</h3>
			$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);<br>
			$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);<br>
			<?php
				try
				{
					$aListVilles=array(['id'=>2, 'ville' => 'Quebec']);
					$oMairesQuebec = new MairesQuebec();
					$id = $oMairesQuebec->getIDMaire("Kardashian", "Quebec", 2010);
					$oMaire = $oMairesQuebec->deleteMaire($id);
					
					
					var_dump($oMaire);
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<hr><hr>
		
		
		
		
		
			<h1>Test - Class Ville</h1>
		<div>
			<h3>Case : new Ville() -> listeVilles()</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$aListeVilles = $oVille->listeVilles();
					
					foreach($aListeVilles as $Ville)
					{
					var_dump($Ville);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Ville() -> getIDVille("")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$nListeId = $oVille->getIDVille("");
					
					echo $nListeId;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> getIDVille(111)</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$nListeId = $oVille->getIDVille(111);
					
					echo $nListeId;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Ville() -> getIDVille("Montreal")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$nListeId = $oVille->getIDVille("Montreal");
					
					echo $nListeId;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> setVille("")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->setVille("");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> setVille(111)</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->setVille(111);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> setVille("Montreal")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->setVille("Montreal");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<div>
			<h3>Case : new Ville() -> setVille("Shawinigana")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->setVille("Shawinigana");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
			<div>
			<h3>Case : new Ville() -> modifierVille("")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->modifierVille("");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> modifierVille(111)</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->modifierVille(111);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> modifierVille("gibberish")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->modifierVille("gibberish");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> modifierVille("Shawinigan")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->modifierVille("Shawinigan");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> modifierVille("Shawinigan", "")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->modifierVille("Shawinigan", "");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
			<div>
			<h3>Case : new Ville() -> modifierVille("Shawinigan", "gibberish")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->modifierVille("Shawinigan", "gibberish");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> modifierVille("Shawinigan", $id)</h3>
			$id=$oVille->getIDVille(Shawinigana);	
			<?php
				try
				{
					$oVille = new Ville();
					$id=$oVille->getIDVille(Shawinigana);
					$bResultat = $oVille->modifierVille("Shawinigan", $id);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		
		
		
		
		<hr>
		
		
			<div>
			<h3>Case : new Ville() -> deleteVille("")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->deleteVille("");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> deleteVille(111)</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->deleteVille(111);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> deleteVille("gibberish")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->deleteVille("gibberish");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Ville() -> deleteVille("Shawinigan")</h3>	
			<?php
				try
				{
					$oVille = new Ville();
					$bResultat = $oVille->deleteVille("Shawinigan");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		
		<hr><hr><hr>
		
		
		
		
		
			<h1>Test - Class Usager</h1>
		<div>
			<h3>Case : new Usager() -> listeUsagers()</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$aListeUsagers = $oUsager->listeUsagers();
					
					foreach($aListeUsagers as $Usagers)
					{
					var_dump($Usagers);
					echo "<br>";
					}
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> getNomUsager("")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeNom = $oUsager->getNomUsager("");
					
					echo $nListeNom;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> getNomUsager(111)</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeNom = $oUsager->getNomUsager(111);
					
					echo $nListeNom;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> getNomUsager("ismael")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeNom = $oUsager->getNomUsager("ismael");
					
					echo $nListeNom;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> getNomUsager(1)</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeNom = $oUsager->getNomUsager(1);
					
					echo $nListeNom;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		<div>
			<h3>Case : new Usager() -> getIDUsager("")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeID = $oUsager->getIDUsager("");
					
					echo $nListeID;
					
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> getIDUsager(111)</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeID = $oUsager->getIDUsager(111);
					
					echo $nListeID;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> getIDUsager("random")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeID = $oUsager->getIDUsager("random");
					
					echo $nListeID;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> getIDUsager("ismael")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$nListeID = $oUsager->getIDUsager("ismael");
					
					echo $nListeID;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		
		
		<div>
			<h3>Case : new Usager() -> setUsager("")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->setUsager("");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> setUsager(111)</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->setUsager(111);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> setUsager("gibberish")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->setUsager("gibberish");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> setUsager("gibberish", "")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->setUsager("gibberish", "");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> setUsager("gibberish", "qaz123")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->setUsager("gibberish", "qaz123");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> setUsager("gibberish", "ae005ceb7e9a217cced2f8aa354187c7")</h3>	
			<?php
			
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->setUsager("gibberish", "ae005ceb7e9a217cced2f8aa354187c7");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			
			?>
		</div>
		<hr>
		
		
			<div>
			<h3>Case : new Usager() -> modifierUsager("")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->modifierUsager("");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> modifierUsager(111)</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->modifierUsager(111);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> modifierUsager("gibberishy")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->modifierUsager("gibberishy");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> modifierUsager($id, "gibberishy")</h3>	
			$id=$oUsager->getIDUsager("gibberish");<br>	
			<?php
				try
				{
					$oUsager = new Usager();
					$id=$oUsager->getIDUsager("gibberish");
					$bResultat = $oUsager->modifierUsager($id, "gibberishy");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> modifierUsager($id, "gibberishy", "")</h3>	
			$id=$oUsager->getIDUsager("gibberish");<br>	
			<?php
				try
				{
					$oUsager = new Usager();
					$id=$oUsager->getIDUsager("gibberish");
					$bResultat = $oUsager->modifierUsager($id, "gibberishy", "");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
			<div>
			<h3>Case : new Usager() -> modifierUsager($id, "gibberishy", "qaz123")</h3>	
			$id=$oUsager->getIDUsager("gibberish");<br>	
			<?php
				try
				{
					$oUsager = new Usager();
					$id=$oUsager->getIDUsager("gibberish");
					$bResultat = $oUsager->modifierUsager($id, "gibberishy", "qaz123");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> modifierUsager($id, "gibberishy", "ae005ceb7e9a217cced2f8aa354187c7")</h3>	
			$id=$oUsager->getIDUsager("gibberish");<br>	
			<?php
				try
				{
					$oUsager = new Usager();
					$id=$oUsager->getIDUsager("gibberish");
					$bResultat = $oUsager->modifierUsager($id, "gibberishy", "ae005ceb7e9a217cced2f8aa354187c7");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		<div>
			<h3>Case : new Usager() -> modifierUsager($id, "gibberish", "ae005ceb7e9a217cced2f8aa354187c7")</h3>	
			$id=$oUsager->getIDUsager("gibberishy");<br>	
			<?php
				try
				{
					$oUsager = new Usager();
					$id=$oUsager->getIDUsager("gibberishy");
					$bResultat = $oUsager->modifierUsager($id, "gibberish", "ae005ceb7e9a217cced2f8aa354187c7");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
			
		
			<div>
			<h3>Case : new Usager() -> deleteUsager("")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->deleteUsager("");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> deleteUsager(111)</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->deleteUsager(111);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> deleteUsager("gibberish")</h3>	
			<?php
				try
				{
					$oUsager = new Usager();
					$bResultat = $oUsager->deleteUsager("gibberish");
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		<div>
			<h3>Case : new Usager() -> deleteUsager($id)</h3>
			$id=$oUsager->getIDUsager("gibberish");<br>	
			<?php
				try
				{
					$oUsager = new Usager();
					$id=$oUsager->getIDUsager("gibberish");
					$bResultat = $oUsager->deleteUsager($id);
					
					echo $bResultat;
					
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
		</div>
		<hr>
		
		
		</div>
		<div id="footer">

		</div>
	</body>
</html>








