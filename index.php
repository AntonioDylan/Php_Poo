<?php 
include ('Service/Repository.php');
include ('Service/ClientRepository.php');

//	Repository::setNom("Client");	
echo(ClientRepository::findById(2,"Client"));


?>