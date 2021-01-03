<?php
 class ab_liste {
     private $id_perso;
      private $type;
	 private $validite;
	 private $prix;
	 
 
    public function __construct($id_perso,$type,$validite,$prix){
		
		$this->id_perso=$id_perso;
		$this->type=$type;
		$this->validite=$validite;
		$this->prix=$prix;
		
		
		}
		
		
 
      
		public function setId($id_perso)
		{
			$this->i_perso=$id_perso;
		}
		
		public function setType($type)
		{
			$this->type=$type;
		}
		
		public function setValidite($validite)
		{
			$this->validite=$validite;
		}
		
		public function setPrix($prix)
		{
			$this->prix=$prix;
		}
		
		
	
 
		public function getId(){
			return $this->id_perso;
		}
	
		public function getType(){
			return $this->type;
		}
		public function getValidite(){
			return $this->validite;
		}
		public function getPrix(){
			return $this->prix;
		}
		
	
	
}

?>