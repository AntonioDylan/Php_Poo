<?php

abstract class CommandeRepository extends Repository{

	static function findByDate($uneDate){
                parent::loadBdd();
                parent::getClasse();
		$sql = "Select * from commande where datecde = '" . $uneDate."'";
		$resultat = parent::$bdd->requeteSQL($sql);
                $uneCommande = $resultat->fetchObject(parent::$classe);
		return $uneCommande;
	}

	 static function findByIntervalleDate($dateDepart,$dateFin){
                parent::loadBdd();
                parent::getClasse();
		$sql = "Select * from commande where datecde between '" . $dateDepart . "' and '" . $dateFin."'";
		$resultats = parent::$bdd->requeteSQL($sql);
		$tableauCommande = $resultats->fetchAll(PDO::FETCH_CLASS, parent::$classe);
		return $tableauCommande;
	}

}

?>