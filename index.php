<?php 
include ('Service/Repository.php');
include ('Service/ClientRepository.php');
include ('Service/CommandeRepository.php');

//	Repository::setNom("Client");	
//echo(ClientRepository::findById(2));
//echo(CommandeRepository::findByDate("2014-09-08"));
echo(CommandeRepository::findById(2));

?>