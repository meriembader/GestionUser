<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "projet";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select username,id from users where username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: listeUser.php");
}
?>