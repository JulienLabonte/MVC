<?php
session_start();

error_reporting(E_ALL & ~E_WARNING);


	define('MODELE_DIR', '../modeles/');			// Chemin vers les modèles
	define('CONTROLLER_DIR', '../controllers/');	// Chemin vers les controllers
	define('CORE_DIR', '../core/');					// Chemin vers les controllers
	
	include "../core/controller.class.php";


	function __autoload($class) 
	{
		$dossierClasse = array(MODELE_DIR, CONTROLLER_DIR , CORE_DIR );
		
		foreach ($dossierClasse as $dossier) 
		{
			if(file_exists('./'.$dossier.$class.'.class.php'))
			{
				require_once('./'.$dossier.$class.'.class.php');
			}
		}
	}



try{
	$c = new indexController();
	$c->doAction();
	
}catch(Exception $e){
	echo "Il y a eu une erreur a la ligne " 	.$e->getLine(). 
	"<br> dans le fichier ".$e->getFile(). 
	"Message ".$e->getMessage();
}






