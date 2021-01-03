<?php
 
 include_once "../../../controller/usersC.php";
 include_once "../../../model/users.php";
$usersC=new usersC();

if(isset($_POST['supprimer'])){
   
   $usersC->supprimerusers($_POST['id']);
   header('location: listeUSer.php');
 } 

 ?>