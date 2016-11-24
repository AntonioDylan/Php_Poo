<?php

abstract class ClientRepository extends Repository{

	static function findByCp($unCp){
                parent::loadBdd();
                parent::getClasse();
		$sql = "Select * from client where CP = " . $unCp;
		$resultats = $BDD->requeteSQL($sql);
		return $resultats;
	}

	 static function findByVille($uneVille){
                parent::loadBdd();
                parent::getClasse();             
		$sql = "Select * from client where Ville = " . $uneVille;
		$resultats = $BDD->requeteSQL($sql);
		return $resultats;
	}

}

?>