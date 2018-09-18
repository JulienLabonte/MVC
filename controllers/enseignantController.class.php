<?php

class enseignantController extends Controller{

	public function listerAction(){
		$tab = $this->modele->getManager()->lister("enseignant");
		//afficher la vue accueil
		$this->view->afficherListeEnseignant($tab);
	}
	
	public function insererAction(){
		if(!empty($_POST)){
			//récupérer les informations du POST
			$tab=array(
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->inserer("enseignant", $tab); //Appel de la fonction d'insertion
		}
		$this->view->insererEnseignant(); //Appel appel de la vue d'insertion lorsque le post est vide et lorsque l'envoie de la nouvelle entréa dans la base de donnée est présente		
	}
    
    public function estPresentAction(){
        //Test des deux paramètres nom et prénom pour vérifier si un enseignant avec le meme nom et prenom est dans la db
        $prenom = $_REQUEST["prenom"];
		$nom = $_REQUEST["nom"];
		$resultat1 = $this->modele->getManager()->estPresent("enseignant","prenom", $prenom);
		$resultat2 = $this->modele->getManager()->estPresent("enseignant","nom", $nom);
        if($resultat1 == "present" && $resultat2 == "present"){
            return "present";
        } else{
            return "absent";
        }
		
	}
    
    public function modifierAction($id){
        //Si le POST est vide, affichage de l'enseignant à modifier. Lorsque le POST est setté, modification de l'enseignant dans la db et rappel de la fonction avec les nouvelles informations
        if(empty($_POST)){
            $tab = $this->modele->getManager()->lister("enseignant");
            foreach($tab as $t){
                if($t["id"] == $id){
                    $this->view->modifierEnseignant($t);
                }
            }
        } else{
			$tab=array(
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->modifier("enseignant", $tab, $id);
            $this->view->modifierEnseignant($_POST);
        }
    }
    
    public function supprimerAction($id){
        //Appel de la suppression de l'enseignant
        $this->modele->getManager()->supprimer("enseignant", $id);
        $this->listerAction();
    }
}
