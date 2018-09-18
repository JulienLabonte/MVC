<?php
class Connexion {
    private static $db =null;

    private function __construct() {
        $dsn = 'mysql:host=localhost;dbname=bddmvc';
        self::$db = new PDO($dsn, "root","");
    }
    public static function getInstance() {
        
        if (self::$db==null) {
			
            new Connexion();
            return self::$db;
        }
        else return self::$db;
    }
}

