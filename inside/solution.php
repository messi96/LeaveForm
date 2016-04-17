<!--This Code will never be available to anyone.. except the one setting it up    -->

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>IIT-G Admin</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    <div class="rerun"><h3 align="right"><a href="logout.php">LogOut</h3> </a></div>
    



    
  </head>

  <body>
<?php 
	//include("session.php");
	include("../sql_files/connect.php");
  session_start();

	$usr = $_POST["user"];
	$pass = $_POST["pwd"];

  //echo $usr;
  //echo $pass;

	if ($usr==='admin' and $pass==='@DWINadmin') {
     
     	echo "<br/><center><font size =4>Welcome to the admin panel !</font>";
      echo "<br>";
      echo "<br>";
		//echo "<br/><br/><br/><br/><center><font size = 7 color=Green><b>Congratulations :D<br/><br/>You NAILED IT !<b/></font>";
		 echo "<br/><br/><center><font size =3>Students Leave Info :</font>";
     	 echo "<br/>";
     	 echo "<br/>";
       echo "</table>";

     $sql = "SELECT * from LeaveInfo";
		 $result = mysql_query($sql);
		 $row = mysql_fetch_array($result);


		echo "<table>";

        echo "<tr>";

                echo "<th>id</th>";
                echo "<th>Name</th>";
                echo "<th>roll</th>";
                echo "<th>HomeAddress</th>";
                echo "<th>Hostel</th>";
                echo "<th>RoomNo</th>";
                echo "<th>Degree</th>";
                echo "<th>Semester</th>";
                echo "<th>PurposeOfLeave</th>";
                echo "<th>EmergencyContact</th>";
                echo "<th>StudentContact</th>";
                echo "<th>DateOfDeparture</th>";
                echo "<th>TimeOfDeparture</th>";
                echo "<th>BusFacilityNeeded</th>";

         echo "</tr>";

                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['roll'] . "</td>";
                echo "<td>" . $row['HomeAddress'] . "</td>";
                echo "<td>" . $row['Hostel'] . "</td>";
                echo "<td>" . $row['RoomNo'] . "</td>";
                echo "<td>" . $row['Degree'] . "</td>";
                echo "<td>" . $row['Semester'] . "</td>";
                echo "<td>" . $row['PurposeOfLeave'] . "</td>";
                echo "<td>" . $row['EmergencyContact'] . "</td>";
                echo "<td>" . $row['StudentContact'] . "</td>";
                echo "<td>" . $row['DateOfDeparture'] . "</td>";
                echo "<td>" . $row['TimeOfDeparture'] . "</td>";
                echo "<td>" . $row['BusFaciltyNeeded'] . "</td>";


        while($row = mysql_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['roll'] . "</td>";
                echo "<td>" . $row['HomeAddress'] . "</td>";
                echo "<td>" . $row['Hostel'] . "</td>";
                echo "<td>" . $row['RoomNo'] . "</td>";
                echo "<td>" . $row['Degree'] . "</td>";
                echo "<td>" . $row['Semester'] . "</td>";
                echo "<td>" . $row['PurposeOfLeave'] . "</td>";
                echo "<td>" . $row['EmergencyContact'] . "</td>";
                echo "<td>" . $row['StudentContact'] . "</td>";
                echo "<td>" . $row['DateOfDeparture'] . "</td>";
                echo "<td>" . $row['TimeOfDeparture'] . "</td>";
                echo "<td>" . $row['BusFaciltyNeeded'] . "</td>";

            echo "</tr>";

        }


		// echo "<br/>";
		// echo "<br/>";
		// echo "<br/>";
		// echo "<center>students Leaving Details: </center>";

		// $sql = "SELECT * from LeaveInfo";
		// $result = mysql_query($sql);
		// $row = mysql_fetch_array($result);

		// $sql = "SELECT * from students";
		// $result = mysql_query($sql);
		// $row = mysql_fetch_array($result);

		// echo "<table>";

  //       echo "<tr>";

  //               echo "<th>id</th>";
  //               echo "<th>HomeAddress</th>";
  //               echo "<th>PurposeOfLeave</th>";
  //               echo "<th>EmergencyContact</th>";
  //               echo "<th>StudentContact</th>";
  //               echo "<th>DateOfDeparture</th>";
  //               echo "<th>TimeOfDeparture</th>";
  //               echo "<th>BusFacilityNeeded</th>";

  //        echo "</tr>";

  //       while($row = mysql_fetch_array($result)){

  //           echo "<tr>";

  //               echo "<td>" . $row['id'] . "</td>";
  //               echo "<td>" . $row['HomeAddress'] . "</td>";
  //               echo "<td>" . $row['PurposeOfLeave'] . "</td>";
  //               echo "<td>" . $row['EmergencyContact'] . "</td>";
  //               echo "<td>" . $row['StudentContact'] . "</td>";
  //               echo "<td>" . $row['DateOfDeparture'] . "</td>";
  //               echo "<td>" . $row['TimeOfDeparture'] . "</td>";
  //               echo "<td>" . $row['BusFaciltyNeeded'] . "</td>";

  //           echo "</tr>";

  //       }




  //       echo "</table>";


  //        $sql1 = "SELECT * from students";
		//  $result1 = mysql_query($sql1);
		//  $row1 = mysql_fetch_array($result1);

		// echo "<br/>";
		// echo "<br/>";
		// echo "<br/>";
		// echo "<center> Students details : </center>";

		//     echo "<table>";

  //           echo "<tr>";

  //           echo "<th>id</th>";

  //               echo "<th>webmail_id</th>";

  //               echo "<th>password</th>";

  //               echo "<th>Roll No</th>";

  //        echo "</tr>";
  //        echo "<br/>";
  //       // print_r($row1);

  //               echo "<td>" . $row1['id'] ."</td>";
  //                echo "<td>" . $row1['webmail_id'] . "</td>";

  //               echo "<td>" . $row1['password'] . "</td>";

  //               echo "<td>" . $row1['roll_no'] . "</td>";

  //       while($row1 = mysql_fetch_array($result1)){

  //           echo "<tr>";

  //               echo "<td>" . $row1['id'] . "</td>";

  //               echo "<td>" . $row1['webmail_id'] . "</td>";

  //               echo "<td>" . $row1['password'] . "</td>";

  //               echo "<td>" . $row1['roll_no'] . "</td>";

  //           echo "</tr>";

  //       }

  //       echo "</table>";




		die();
	}
  	
	else
	{

	echo "<br/><br/><br/><br/><center><font size = 5><b>Nice Try <br/><br/> Invalid Username/Password. If You're not the Admin, better watch out, We have your IP.<b/></font>"; 

		die();
    }

?>


</center>

      </div>
</div>
<a id="portfolio" href="https://github.com/messi96" title=""><i class="fa fa-link"></i></a>
<a id="codepen" href="#" title=""><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
  </body>
</html>
