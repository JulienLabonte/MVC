<?php
//include "../core/controller.class.php";

class indexController extends Controller{
	
	//routeur
	public function doAction(){
		$controller = @$_GET["controller"];
		$action = @$_GET["action"];
		switch($controller){
			
			case "etudiant":
				$c = new etudiantController();	
				
				if($action=="lister"){
					
					$c->listerAction();
				}
				if($action=="inserer"){
					
					$c->insererAction();
				}
				if($action=="estPresent"){
					
					$c->estPresentAction();
				}
                if($action=="modifier"){
                    $c->modifierAction($_GET["id"]);
                }
                if($action=="supprimer"){
                    $c->supprimerAction($_GET["id"]);
                }
            break;
                
            case "enseignant":
                $c = new enseignantController();
                
                if($action=="lister"){
					
					$c->listerAction();
				}
				if($action=="inserer"){
					
					$c->insererAction();
				}
				if($action=="estPresent"){
					
					$c->estPresentAction();
				}
                if($action=="modifier"){
                    $c->modifierAction($_GET["id"]);
                }
                if($action=="supprimer"){
                    $c->supprimerAction($_GET["id"]);
                }
            break;
			
		
			default:
				 $this->view->afficherPageAccueil();
			}
	}


}




