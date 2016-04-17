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

  // $sql="select count(*) from LeaveInfo";
  // $query = mysql_query($sql);
  // $row = mysql_fetch_array($query); 
  // $b = $row[0];
  // $sql2 = "DELETE from LeaveInfo where id=$b";
  // $query=mysql_query($sql2);
  // //$sql3="ALTER table LeaveInfo AUTO_INCREMENT=$b;"
 // $query = mysql_query($sql3);
//$sql="DELETE FROM LeaveInfo ORDER BY id DESC limit 1;"
 // $query=mysql_query($sql);
 // $row=mysql_fetch_array($query);
    if($_SESSION['login_update'] == 'yes') {
    header("Location: update.php");
   }
   else {
    header("Location: profile.php");
   }
  // $sql="UPDATE LeaveInfo set Name='', Hostel='', RoomNo='', Degree='', Semester='', HomeAddress='', PurposeOfLeave='', EmergencyContact='', StudentContact='', DateOfDeparture='', TimeOfDeparture='' where roll=$check1;";
  // $query=mysql_query($sql);
  // $row=mysql_fetch_array($query);

  
?>

</body>
</html>
