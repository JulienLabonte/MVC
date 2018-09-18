<?php
include_once "view.class.php";
include_once "modele.class.php";

class Controller{
	protected $view;
	protected $modele;
	
  	public function __construct(){
		 $this->view = new View();
		 $this->modele = new Modele();
		 
	}	  


}