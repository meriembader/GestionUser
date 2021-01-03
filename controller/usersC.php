
<?php

class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }

	class usersC
	{
		
		function ajouter($users){
			$db = config::getConnexion();
			$sql = "INSERT INTO users (?,?,?,?,?,?,?) VALUES (:id,:username,:password,:role)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':id',$users->getid());
			$req->bindValue(':username',$users->getUsername());
			$req->bindValue(':quantite_total',$users->getQuantite_total());
			$req->bindValue(':password',$users->getPassword());
			$req->bindValue(':role',$users->getRole());

			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}

		function afficherusers(){
			$db = config::getConnexion();
			$sql="SELECT * FROM users ";
			$liste=$db->query($sql);
			return $liste;
			
		}

		function supprimerusers($id){
			$db = config::getConnexion();
			$sql="DELETE FROM users where id= :id";
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
	        $req->execute();
	        
		}

		function modifierusers($users,$id){
			$db = config::getConnexion();
			
			$sql="UPDATE users SET username=:username,password=:password, role=:role WHERE id=:id";
			try{
				$req=$db->prepare($sql);
                $req->bindValue(':id',$id);
                $req->bindValue(':username',$users->getUsername());
				$req->bindValue(':password',$users->getPassword());
				$req->bindValue(':role',$users->getRole());
				
			
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recuperer_users($id){
			
			$sql="SELECT * FROM users WHERE id=$id";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$users = $req->fetch();
				return $users;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	}

  ?>