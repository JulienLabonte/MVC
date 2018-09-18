<?php
include_once "manager.class.php";

class Modele{
    
	private $manager;
	
	public function __construct(){	
		$this->manager = new Manager();
	}
	public function getManager(){
		return $this->manager;
	}
}












