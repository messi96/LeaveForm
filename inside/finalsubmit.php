<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Student Leave Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

<?php
include("session.php");
include("../sql_files/connect.php");
session_start();
echo "<br/>";
//echo "inside action";
echo "<br/>";
//echo "<br/>";
//print_r($_SESSION);
//$check=$_SESSION['login_username'];
echo "<br/>";
//echo $check;
 echo "<br/>";
 echo "<br/>";
 echo "<br/>";
 //echo "<center>";
 //print_r($_POST);
 echo "<br/>";
 echo "<br/>";
// print_r($_SESSION);
// echo "<br/>";echo "<br/>";
// echo "<br/>";

echo "<br/>";

  echo "<br/>";
  echo "<br/>";
  echo "<center>";
  echo "<font size =4>Your response has been recorded !" ."<br/></font>";
  echo "<br/>";
  echo "<br/>";
  echo '<center><a href="logout.php">LogOut</a>';
  echo "</center>";
  session_destroy();
  session_write_close();
  session_unset();
  die();

?>

</body>
</html>

