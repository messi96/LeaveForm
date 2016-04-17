<?php
include("../sql_files/connect.php");
include("session.php");
//echo "in";
//echo $_SESSION['login_rollno'];
$n=$_SESSION['login_rollno'];
//echo "here";
$sql = "DELETE from LeaveInfo where roll=$n;";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
  echo "<br/>";
  echo "<br/>";
  echo '<center>';
  echo "Your response has been DELETED !" ."<br/>";
  echo "<br/>";
  echo "<br/>";
  echo '<h4 align="center">  <a href="logout.php">LogOut</a> </h4>';
  echo '</center>';
  session_destroy();
  session_write_close();
  session_unset();
  die();
  ?>
