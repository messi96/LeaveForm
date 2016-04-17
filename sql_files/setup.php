<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To The World of Pentesters !</title>
</head>
<div>
    <body background="../patience.jpg"<center>
<div/>
<div style=" margin-top:20px;color:#FFFFFF; font-size:24px; text-align:center"> 
Welcome&nbsp;&nbsp;&nbsp;
<font color="#000000">  </font>
<br>
</div>

<div style=" margin-top:10px;color:#FFFFFF; font-size:23px; text-align:left">
<font size="3" color="#000000">
<center>Wait a bit.. Setting up database !<center>
<br><br> 


<?php
//including the Mysql connect parameters.
include("db-creds.inc");
echo "<center>";



$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
  {
  die('Could not connect to DB, check the creds in db-creds.inc: ' . mysql_error());
  }




	$sql="DROP DATABASE IF EXISTS HostelRecords";
	if (mysql_query($sql))
		{echo "Old database 'HostelRecords' purged if exists"; echo "<br><br>\n";}
	else 
		{echo "Error purging database: " . mysql_error(); echo "<br><br>\n";}


//Creating new database HostelRecords
	$sql="CREATE database `HostelRecords` CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "Creating New database 'HostelRecords' successfully";echo "<br><br>\n";}
	else 
		{echo "Error creating database: " . mysql_error();echo "<br><br>\n";}

//creating table users
$sql="CREATE TABLE HostelRecords.students (id int(3) NOT NULL AUTO_INCREMENT, webmail_id varchar(20) NOT NULL, password varchar(49) NOT NULL, roll_no int(3) NOT NULL, PRIMARY KEY (id))";
	if (mysql_query($sql))
		{echo "Creating New Table 'USERS' successfully";echo "<br><br>\n";}
	else 
		{echo "Error creating Table: " . mysql_error();echo "<br><br>\n";}




//creating table emails
$sql="CREATE TABLE HostelRecords.LeaveInfo
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		Name varchar(30) NOT NULL,
		roll int(10) NOT NULL,
		Hostel varchar(30) NOT NULL,
		RoomNo varchar(30) NOT NULL,
		Degree varchar(30) NOT NULL,
		Semester int(2) NOT NULL,
		HomeAddress varchar(30) NOT NULL,
		PurposeOfLeave varchar(30) NOT NULL,
		EmergencyContact bigint(14) NOT NULL,
		StudentContact bigint(14) NOT NULL, 
		DateOfDeparture Date,
		TimeOfDeparture Time,
		BusFacilityNeeded BOOL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "Creating New Table 'Leave_info' successfully"; echo "<br><br>\n";}
	else 
		{echo "Error creating Table: " . mysql_error();echo "<br><br>\n";}




//inserting data
$sql="INSERT INTO HostelRecords.students (id, webmail_id, password, roll_no) VALUES ('1', 'r.moury', md5('mountain_dew'), '130108036'), ('2', 'm.baniya', md5('pass987'), '130103045'), ('3', 'd.ghosh', md5('xiomimi4'), '130101011'), ('4', 's.kumar', md5('singham03'), '130107012'), ('5', 'k.clark', md5('bubblegum1'), '130112236'), ('6', 'd.tubey', md5('tikon@web'), '130106038'), ('7', 'w.ankit', md5('webmail'), '130108026'), ('8', 's.ramos', md5('real_madrid'), '130120009'), ('9', 'c.roberto', md5('penalties'), '130112122'), ('10', 'p.lewansdowski', md5('striker'), '130108013')";
	if (mysql_query($sql))
		{echo "Inserted data correctly into table 'students'";echo "<br><br>\n";}
	else 
		{echo "Error inserting data: " . mysql_error();echo "<br><br>\n";}



//inserting data
// $sql="INSERT INTO HostelRecords.LeaveInfo (id, Name, HomeAddress, PurposeOfLeave, EmergencyContact, StudentContact, DateOfDeparture, TimeOfDeparture, BusFacilityNeeded) 
// VALUES  ('1', '', 'Kharghar, Navi Mumbai', 'Vacations', '9987783919', '8011034373', STR_TO_DATE('01/05/2010', '%m/%d/%Y'), TIME('01:02:03'),TRUE), 
// 		('2', '', 'Patna, Bihar', 'Vacations', '9004111888', '8011034211', STR_TO_DATE('02/05/2010', '%m/%d/%Y'), TIME('03:02:03'),TRUE),
// 		('3', '', 'Guwahati, Assam', 'Vacations', '9097566121', '8011012906', STR_TO_DATE('03/05/2010', '%m/%d/%Y'), TIME('11:02:03'),FALSE),
// 		('4', '', 'Bhagalpur, Bihar', 'Emergencyt', '9012121211', '8011064756', STR_TO_DATE('04/05/2010', '%m/%d/%Y'), TIME('10:02:03'),FALSE), 
// 		('5', '', 'Bangalore', 'Vacations', '9112102187', '8011067890', STR_TO_DATE('05/05/2010', '%m/%d/%Y'), TIME('09:02:03'),FALSE), 
// 		('6', '', 'Vashi, Mumbai', 'Vacations', '9832302187', '8011012121', STR_TO_DATE('01/05/2010', '%m/%d/%Y'), TIME('08:02:03'),TRUE), 
// 		('7', '', 'Patna, Bihar', 'Vacations', '9099410187', '8011012497', STR_TO_DATE('02/05/2010', '%m/%d/%Y'), TIME('07:02:03'),TRUE), 
// 		('8', '', 'Dehradun', 'Marriage', '9504102159', '8011087611', STR_TO_DATE('08/05/2010', '%m/%d/%Y'), TIME('06:02:03'),FALSE),  
// 		('9', '', 'Itarsi, Bhopal', 'Vacations', '9004198171', '8011012121', STR_TO_DATE('10/05/2010', '%m/%d/%Y'), TIME('05:02:03'),FALSE),
// 		('10', '', 'Kota, Rajasthan', 'Vacations', '9004102187', '8011080110', STR_TO_DATE('09/05/2010', '%m/%d/%Y'), TIME('04:02:03'),TRUE)";
// 	if (mysql_query($sql))
// 		{echo "Inserted data correctly  into table 'LeaveInfo'";echo "<br><br>\n";}
// 	else 
// 		{echo "Error inserting data: " . mysql_error();echo "<br><br>\n";}
//including the Challenges DB creation file.

?>

<font color = #FFFFFF>
</font>
</div>
</body>
</html>
