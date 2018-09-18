<?php
include_once "Connexion.class.php";
include_once "ManagerBase.class.php";
class Manager implements ManagerBase{
    
	private $connexion;
	public function __construct(){	
		$this->connexion = Connexion::getInstance();

	}


	public function inserer($table, $valeur){
	$key="";
	$v="";
		foreach($valeur as $k=>$s){
			$key.=$k.",";
			if(is_string($s)){
				$v.="'".$s."',";
			}else{
				$v.=$s.",";			
			}		
			
		}
		//j'enleve la derniere virgule
		$v = substr($v, 0, -1); 
		$key = substr($key, 0, -1);
		
		$requete = "INSERT INTO $table ($key) VALUES($v)" ;
		$result = $this->connexion->exec($requete);

	}
    
    public function estPresent($table,$colonne, $str){
		if (is_string($str)){
			$requete = "SELECT $colonne FROM $table WHERE $colonne = '$str'" ;
		}else{
			$requete = "SELECT $colonne FROM $table WHERE $colonne = $str" ;
		}
		
		$result = $this->connexion->exec($requete);
		
		$liste = $result->fetchAll(PDO::FETCH_ASSOC);
		if(isset($liste[0]))
		{
			return "present";
		}
		else		
		{
			return "absent";
		}
	
	}
	
	public function modifier($table, $valeur, $id){
        //Test la table à cause du paramètre codePermanent qui n'est pas présenta dans les deux tables
        if($table == 'enseignant'){
            $requete = "UPDATE ".$table." SET nom = '".$valeur['nom']."', prenom = '".$valeur['prenom']."', nas = '".$valeur['nas']."', cours = '".$valeur['cours']."' WHERE id = ".$id;
        } else{
            $requete = "UPDATE ".$table." SET nom = '".$valeur['nom']."', prenom = '".$valeur['prenom']."', nas = '".$valeur['nas']."', codePermanent = '".$valeur['codePermanent']."', cours = '".$valeur['cours']."' WHERE id =".$id;
        }
		$result = $this->connexion->exec($requete);
	}
	public function supprimer($table, $id){
        $requete = "DELETE FROM $table WHERE id = $id";
        $result = $this->connexion->exec($requete);		
	}
	public function lister($table){
		$requete = "SELECT * FROM $table" ;
		$result = $this->connexion->query($requete);
		$liste = $result->fetchAll(PDO::FETCH_ASSOC);
		return $liste;
	}	 
}












