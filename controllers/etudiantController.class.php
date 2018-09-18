<?php

class etudiantController extends Controller{

	public function listerAction(){
		$tab = $this->modele->getManager()->lister("etudiant");
		//afficher la vue accueil
		$this->view->afficherListeEtudiants($tab);
	}
    
    public function estPresentAction(){
		$str = $_REQUEST["str"];
		$resultat = $this->modele->getManager()->estPresent("Etudiant","codePermanent", $str);
		echo $resultat;
	}
	
	public function insererAction(){
		if(!empty($_POST)){
			//récupérer les informations du POST
			$tab=array(
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
				"codePermanent"=>$_POST["codePermanent"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->inserer("etudiant", $tab);
		}
		$this->view->insererEtudiant();		
	}
    
    public function modifierAction($id){
        if(empty($_POST)){
            $tab = $this->modele->getManager()->lister("etudiant");
            foreach($tab as $t){
                if($t["id"] == $id){
                    $this->view->modifierEtudiant($t);
                }
            }
        } else{
			$tab=array(
				"nom"=>$_POST["nom"],
				"prenom"=>$_POST["prenom"],
				"nas"=>$_POST["nas"],
                "codePermanent"=>$_POST["codePermanent"],
				"cours"=>$_POST["cours"]
			);

			$this->modele->getManager()->modifier("etudiant", $tab, $id);
            $this->view->modifierEtudiant($_POST);
        }
    }
    
    public function supprimerAction($id){
        $this->modele->getManager()->supprimer("etudiant", $id);
        $this->listerAction();
    }
}




























