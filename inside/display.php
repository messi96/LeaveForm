<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Student Leave Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">
    
<?php

//include('session.php');
include("../sql_files/connect.php");
include("session.php");
//session_start();
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//$sql1 = "select count(*) from "

//$no = $_POST[''];
//echo "<br/>";
//print_r($_SESSION);
//echo "<br/>";

$new=$_SESSION["login_rollno"];
//echo "<br/>";
//echo "check";
echo "<br/>";
//echo $new;
//echo "<br/>";
$sql = "SELECT * from LeaveInfo where roll=$new;";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
?>


<center>
</br>
<!-- 
<form action="reset.php" method="post">
    <button type="submit" class="btn btn-primary btn-block btn-large">Reset</button>
</form>
<form action="final.php" method= "post">
    <button type="submit"  class="btn btn-primary btn-block btn-large">Final Submit</button>
</center> -->

<?php
// echo "<center>";
// 		echo "<table>";

//         echo "<tr>";
//         		echo "<th>Name</th>";
//                 echo "<th>roll</th>";
//                 echo "<th>Hostel</th>";
//                 echo "<th>RoomNo</th>";
//                 echo "<th>Degree</th>";
//                 echo "<th>Semester</th>";
//                 echo "<th>HomeAddress</th>";
//                 echo "<th>PurposeOfLeave</th>";
//                 echo "<th>EmergencyContact</th>";
//                 echo "<th>StudentContact</th>";
//                 echo "<th>DateOfDeparture</th>";
//                 echo "<th>TimeOfDeparture</th>";
//                 echo "<th>BusFacilityNeeded</th>";

//          echo "</tr>";


//             echo "<tr>";
//         		echo "<td>" . $row['Name'] . "</td>";
//                 echo "<td>" . $row['roll'] . "</td>";
//                 echo "<td>" . $row['Hostel'] . "</td>";
//                 echo "<td>" . $row['RoomNo'] . "</td>";
//                 echo "<td>" . $row['Degree'] . "</td>";
//                 echo "<td>" . $row['Semester'] . "</td>";
//                 echo "<td>" . $row['HomeAddress'] . "</td>";
//                 echo "<td>" . $row['PurposeOfLeave'] . "</td>";
//                 echo "<td>" . $row['EmergencyContact'] . "</td>";
//                 echo "<td>" . $row['StudentContact'] . "</td>";
//                 echo "<td>" . $row['DateOfDeparture'] . "</td>";
//                 echo "<td>" . $row['TimeOfDeparture'] . "</td>";
//                 echo "<td>" . $row['BusFaciltyNeeded'] . "</td>";

//             echo "</tr>";

//         while($row = mysql_fetch_array($result)){

//             echo "<tr>";

//                 echo "<td>" . $row['id'] . "</td>";
//                 echo "<td>" . $row['Name'] . "</td>";
//                 echo "<td>" . $row['roll'] . "</td>";
//                 echo "<td>" . $row['HomeAddress'] . "</td>";
//                 echo "<td>" . $row['Hostel'] . "</td>";
//                 echo "<td>" . $row['RoomNo'] . "</td>";
//                 echo "<td>" . $row['Degree'] . "</td>";
//                 echo "<td>" . $row['Semester'] . "</td>";
//                 echo "<td>" . $row['PurposeOfLeave'] . "</td>";
//                 echo "<td>" . $row['EmergencyContact'] . "</td>";
//                 echo "<td>" . $row['StudentContact'] . "</td>";
//                 echo "<td>" . $row['DateOfDeparture'] . "</td>";
//                 echo "<td>" . $row['TimeOfDeparture'] . "</td>";
//                 echo "<td>" . $row['BusFaciltyNeeded'] . "</td>";

//             echo "</tr>";

//         }
//         echo "</table></center>";
?>


<!-- <br/>
<br/>
<br/> -->
<!-- <center> -->
<!--<h4 align="right">  <a href="logout.php">LogOut</a> </h4> -->


<!-- <div class="container"> -->

  <div class="card">
    <!-- <h1 class="title"></h1> -->
    
     <style>
 table,th,td{
    border: 4px ;
    border-collapse: collapse;
 }
 th,td{
    padding: 4px;
 }
</style>
</head>
<body>
<center>
<h1 style="">Your Leaving Details :</h1>
</br>
</br>
<table style="width: 50%">
<tr>
    <th>Name</th>
    <th> <?php echo $row['Name']; ?> </th>
</tr>
<tr>
    <th>Roll No</th>
    <th><?php echo $row['roll']; ?></th>
</tr>
<tr>
    <th>Hostel</th>
    <th><?php echo $row['Hostel']; ?></th>
</tr>
<tr>
    <th>Semester</th>
    <th><?php echo $row['Semester']; ?></th>
</tr>
<tr>
    <th>Degree</th>
    <th><?php echo $row['Degree']; ?></th>
</tr>

<tr>
    <th>Home Address</th>
    <th><?php echo $row['HomeAddress']; ?></th>
</tr>
<tr>
    <th>Purpose of Leave</th>
    <th><?php echo $row['PurposeOfLeave']; ?></th>
</tr>
<tr>
    <th>Emergency Contact</th>
    <th><?php echo $row['EmergencyContact']; ?></th>
</tr>
<tr>
<tr>
    <th>Student Contact</th>
    <th><?php echo $row['StudentContact']; ?></th>
</tr>
<tr>
    <th>Time of Departure</th>
    <th><?php echo $row['TimeOfDeparture']; ?></th>
</tr>
<tr>
    <th>Date of Departure</th>
    <th><?php echo $row['DateOfDeparture']; ?></th>
</tr>
<tr>
    <th>BusFacilityNeeded</th>
    <th><?php echo $row['BusFacilityNeeded']; ?></th>
</tr>
</table>
</body>
</tr>
</center>
    </br>
    </br>
    </br>
    <form action="finalsubmit.php" name="" method="post">
        <div class="button-container">
        <button><span value="FinalSubmit">FinalSubmit
        </span></button>
     <!--   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div> -->
        </div>
    </form>
    <form action="reset.php" name="" method="post">
        <div class="button-container">
        <button><span value="RESET">RESET
        </span></button>
     <!--   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div> -->
        </div>
    </form>

<!-- 		<form action="action.php" method="post">
          <br>
          <input type='submit' name="final"  value="FinalSubmit">
          <br>
        <form>
        <button><span>RESET
        </span></button>
        </div>
        <div class="button-container">
        <button><span>GO
        </span></button>
        </div>
        <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div>
        </div>
        </form>
 -->

<?php
// /session_destroy();
die();

?>


      </div>
<a id="portfolio" href="https://github.com/messi96" title=""><i class="fa fa-link"></i></a>
<a id="codepen" href="#" title=""><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

  </body>
</html>