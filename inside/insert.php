<?php

include("../sql_files/connect.php");
include("session.php");
session_start();
//echo "inserting into database";
//print_r($_POST);

//Array ( [name] => asd [address] => asd [purpose] => asd [econtact] => qdsa [contact] => das [datedep] => asd [timedep] => da [bus] => y ) 

function check_input($value)
	{
	if(!empty($value))
		{
		$value = substr($value,0,50); 
		}
		if (get_magic_quotes_gpc())  
			{
			$value = stripslashes($value);
			}
		if (!ctype_digit($value))   	
			{
			$value = "'" . mysql_real_escape_string($value) . "'";
			}
	else
		{
		$value = intval($value);
		}
	return $value;
	}

$name=check_input($_POST['name']);
$roll=check_input($_POST['roll']);
$hostel=check_input($_POST['hostel']);
$roomno=check_input($_POST['roomno']);
$degree=check_input($_POST['degree']);
$semester=check_input($_POST['semester']);
$add=check_input($_POST['address']);
$purpose=check_input($_POST['purpose']);
$econtact=check_input($_POST['econtact']);
$contact=check_input($_POST['contact']);
$datedep=check_input($_POST['datedep']);
$timedep=check_input($_POST['timedep']);
$bus=check_input($_POST['bus']);
//echo $bus;
if($bus == 'Y' || $bus == "Y") {
	$bus = "1";
}
else {
	$bus = "0";
}
		
//echo "post";
echo "<br/>";
//echo "<br/>";
//print_r($_POST);
//echo "<br/>";
//echo "<br/>";
//die();
echo "<br/>";
//echo "here";
//echo "<br/>";
//echo $roll;
//echo "<br/>";
//echo $_SESSION['login_rollno'];
echo "<br/>";
if($roll != $_SESSION['login_rollno']) {
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<center>YOU MESSED WITH THE BEST DEVELOPER..". "<br/>"."<br/>"." YOU JUST GOT PWNED :P"."<br/>"."<br/>"."YOU ENTERED THE INCORRECT ROLL NUMBER</center>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	die();
	session_destroy();
	header("Location: indexx.php");

}


// result = SELECT * FROM cars WHERE user_id=5
// if (num_rows(result)>0){
//     UPDATE cars SET car_make='toyota', car_model='prius' WHERE user_id=5
// }else{
//     INSERT INTO cars (user_id, car_make, car_model) VALUES (5, 'toyota', 'prius')
// }
// $sql1="SELECT * from LeaveInfo where "
echo "--------------------";
echo "<br/>";
//echo "<br/>";
//echo $_SESSION['login_rollno1'];
//echo gettype($_SESSION['login_rollno1']);
echo "<br/>";
echo "<br/>";
//echo $roll;
//echo gettype($roll);
echo "<br/>";
echo "<br/>";
echo "<br/>";
//echo "----------------";

if($_SESSION['login_rollno1'] == $roll) {
	//echo "if";
	//die();
$sql= "UPDATE LeaveInfo set Name=$name, roll=$roll, Hostel=$hostel, RoomNo=$roomno, Degree=$degree, Semester=$semester, HomeAddress=$add, PurposeOfLeave=$purpose, EmergencyContact=$econtact, StudentContact=$contact, DateOfDeparture=$datedep, TimeOfDeparture=$timedep, BusFacilityNeeded=$bus where roll=$roll";
}
else {
$sql = "INSERT into LeaveInfo (Name, roll, Hostel, RoomNo, Degree, Semester, HomeAddress,PurposeOfLeave,EmergencyContact,StudentContact,DateOfDeparture,TimeOfDeparture,BusFacilityNeeded) 
values ($name,$roll,$hostel,$roomno,$degree,$semester,$add,$purpose,$econtact,$contact,$datedep,$timedep,$bus)";
}
	//fuckingsetting session variables
				$_SESSION['login_rollno1']=$roll;
				$_SESSION['login_name']=$name;
				$_SESSION['login_hostel']=$hostel;
				$_SESSION['login_roomno']=$roomno;
				$_SESSION['login_degree']=$degree;
				$_SESSION['login_semester']=$semester;
				$_SESSION['login_homeadd']=$add;
				$_SESSION['login_poleave']=$purpose;
				$_SESSION['login_econtact']=$econtact;
				$_SESSION['login_contact']=$contact;
				$_SESSION['login_dod']=$datedep;
				$_SESSION['login_tod']=$timedep;
				$_SESSION['login_bus']=$bus;


$query = mysql_query($sql);
if($query)
	//echo "success !";
	header("Location: display.php");
else
	echo "failure";


?>


