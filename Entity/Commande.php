<?php
class Commande
{
	private $id;
	private $datecde;
	private $leClient;
        
        
        
        	public function __toString(){
		return "id : " . $this->id . " date : " . $this->datecde . " client : " . $this->leClient; 
	}
}



?>