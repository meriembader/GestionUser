
<?php
	/**
	* 
	*/
	class users
	{
		public $id;
		public $username;
		public $password;
		public $role;
	

		function __construct($id,$username,$password,$role)
		{
			$this->id=$id;
			$this->username=$username;
			$this->password=$password;
			$this->role=$role;
		
		}

		function getId(){
			return $this->id;
		}
		function getUsername(){
			return $this->username;
		}
		function getPassword(){
			return $this->password;
		}
		function getRole(){
			return $this->role;
		}
	

		function setId($id){
			$this->id=$id;
		}
		function setUsername($username){
			$this->username=$username;
		}
		function setPassword($password){
			$this->password=$password;
		}
		function setRole($role){
			$this->role=$role;
		}
	
		
		
	}

  ?>
