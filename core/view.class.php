<?php

class View{
    
	public function afficherPageAccueil(){
		
		require "../views/index/accueil.html.php";
	}
	
	
	public function afficherListeEtudiants(array $tab){
		$_SESSION["tab"] = $tab;
		require "../views/etudiant/lister.html.php";
	}
	public function insererEtudiant(array $tab=array()){
		require "../views/etudiant/inserer.html.php";
	}		
	public function afficherFormContact(){
		require "../views/index/contact.html.php";
	}
    public function modifierEtudiant($tab){
        require "../views/etudiant/modifier.html.php";
    }
    
    public function afficherListeEnseignant(array $tab){
		$_SESSION["tab"] = $tab;
		require "../views/enseignant/lister.html.php";
	}
    public function insererEnseignant(array $tab=array()){
		require "../views/enseignant/inserer.html.php";
	}
    public function modifierEnseignant($tab){
        require "../views/enseignant/modifier.html.php";
    }
	 	 
}