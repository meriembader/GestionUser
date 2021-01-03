<?php
include  "../model/abonnement.php";
include  "../controller/abonnementC.php";


	
		
	?>	
	
	
	
 
 <?php 
 if(isset($_POST['type1']))
 {if(!empty($_POST['type1']))
	{
		$id_perso=75;
          if ($_POST['type1']=="regular") {
          	$type="regular";
    	$validite=30;
    	$prix=0;
          }}
 }
          else
          	if(isset($_POST['type2']))
 {if(!empty($_POST['type2']))
	{
		$id_perso=85;
          if ($_POST['type2']=="master") {
          	$type="master";
    	$validite=30;
    	$prix=70;
          }}
 }
          else
          	if(isset($_POST['type3']))
 {if(!empty($_POST['type3']))
	{
		$id_perso=95;
          if ($_POST['type3']=="premium") {
          	$type="premium";
    	$validite=30;
    	$prix=90;
          }}
 }

  
	 	$ab_list= new ab_liste(
         $id_perso,  
    	$type,
    	$validite,
    	$prix);
$abonnementc= new abonnementC();

$abonnementc->ajouterabonnement($ab_list);

	
//header('Location:afficherabonnement.php');
	 

echo "string";
			
 
 ?>

