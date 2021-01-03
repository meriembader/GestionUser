<?php 
include "../config.php";
class abonnementC{
public function afficherabonnement(){
			$sql="SELECT * From abonnement";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}

public function ajouterabonnement($ab_list){
			$sql="insert into abonnement(id_perso,type,prix,validite) values(:id_perso,:type,:prix,:validite)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);

			$id_perso=$ab_list->getId();
			$type=$ab_list->getType();
			$validite=$ab_list->getValidite();
			$prix=$ab_list->getPrix();
			
			$req->bindValue(':id_perso',$id_perso);
			$req->bindValue(':type',$type);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':validite',$validite);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}

 public function supprimerabonnement($id_perso){
			$sql="DELETE FROM  abonnement where id_perso=$id_perso";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
			
	
}
public function updateabonnement($abonnement)
			{
			$sql="UPDATE abonnement SET id_perso=:id_perso,type=:type,validite=:validite,prix=:prix where id_perso=".$abonnement->getId() ." ";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$id_perso=$abonnement->getId();
			$type=$abonnement->getType();
			$validite=$abonnement->getValidite();
			$prix=$abonnement->getPrix();
			
			$req->bindValue(':id_perso',$id_perso);
		  $req->bindValue(':type',$type);
			$req->bindValue(':validite',$validite);
			$req->bindValue(':prix',$prix);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}


}
?>