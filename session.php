<?php
/*

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("kb", $connection);

*/
session_start();// Starting Session

require_once 'config.php';

// Storing Session
$user_check=$_SESSION['login_user'];

$sql = "select username from login where username=?";

$sq = $db->prepare($sql);

// bind name place holder
$sq->bindParam(1, $user_check);

$sq->execute();

//$ses_sql=mysql_query("select name from kb_login where name='$user_check'", $connection);

foreach($sq->fetchAll() as $r) {
	$login_session =$r["username"];
} 


//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row[0];


if(!isset($login_session))
{
	//mysql_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>