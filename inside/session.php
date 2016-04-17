<?php
//echo "hi";
//echo "<br/>";
include('../sql_files/db-creds.inc');
include("../sql_files/connect.php");
session_start();
//print_r($_SESSION);
$check=$_SESSION['login_username'];
//echo "<br/>";
//echo $check;
//echo "<br/>";
$check1=$_SESSION['login_rollno'];
//echo "<br/>";
//echo $check1;
//echo "<br/>";
$session=mysql_query("SELECT webmail_id,roll_no FROM students WHERE webmail_id=$check");
$row=mysql_fetch_array($session);
//echo "<br/>";
//print_r($row['webmail_id']);
//echo "<br/>";
$login_session=$row['webmail_id'];
//echo "now";
//echo "<br/>"; 
//echo $login_session;
if(!isset($login_session))
{
header("Location:indexx.php");
}
//echo "<br/>"."-------------------------";
?>
