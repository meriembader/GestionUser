<?php
include  "../model/abonnement.php";
include  "../controller/abonnementC.php"; 
$id_perso=$_POST['id'];

$abonnementc= new abonnementC();
$abonnementc->supprimerabonnement($id_perso);


	//header('Location:afficherabonnement.php');

?>