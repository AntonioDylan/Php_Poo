<?php

abstract class ClientRepository extends Repository{

	static function findByCp($unCp){
		$sql = "Select * from client where CP = " . $unCp;
		$resultats = $BDD->requeteSQL($sql);
		return $resultats;
	}

	 static function findByVille($uneVille){
		$sql = "Select * from client where Ville = " . $uneVille;
		$resultats = $BDD->requeteSQL($sql);
		return $resultats;
	}

}

?>