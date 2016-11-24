<?php

include ('BDD.php');
include ('Entity/Client.php');
include ('Entity/Commande.php')	;
abstract class Repository {

	protected static $bdd;	
	protected static $classe;

	static function getClasse(){
		if(get_called_class() === "ClientRepository"){
			self::$classe = "Client";
		}
		else
		{
			self::$classe = "Commande";
		}
	} 

	static function findById($id){
		self::loadBdd();
		self::getClasse();	
		$sql = "Select * from ". self::$classe . " where id = " . $id;
		$resultat = self::$bdd->requeteSQL($sql);
		$unClient = $resultat->fetchObject(self::$classe);
		return $unClient;
	}

	static function  findAll(){
		self::loadBdd();
		self::getClasse();
		$sql = "Select * from " . self::$classe;
		$resultats = self::$bdd->requeteSQL($sql);
		$tableauClients = $resultats->fetchAll(PDO::FETCH_CLASS, self::$classe);		
		return $tableauClients;
	}

	static function loadBdd(){
		self::$bdd= new BDD();
	}
}

?>