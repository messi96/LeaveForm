<?php

session_start();
include("session.php");
$a=$_SESSION["login_rollno"];
//print_r($_SESSION);
$sql="SELECT * from LeaveInfo where roll=$a;";
$query=mysql_query($sql);
$row_row=mysql_fetch_array($query);
echo "<br/>";
//echo "lol";
//print_r($row_row);
//echo "lol1";
echo "<br/>";

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Student Leave Form</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
 

  <body>

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Student Leave Form</h1><span><i class='fa fa-code'></i> by <a href=''>messi</a></span>
</div>



<div class="rerun"><h3 align="right"> <a href="logout.php">LogOut</h3> </a></div>
<div class="rerun"><a href="#"><h3 align="center"> Hello <?php echo $login_session." !"; ?></h3> </a></div>
<div class="rerun"><a href="#"><h4 align="center">Welcome to your profile</h4> </a></div>
<h2 align="center" ></h2> 
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Leave Form</h1>
    
    <form action="insert.php" method="post" name="my_form">
      
      <div class="input-container">
        <input type='text' name="name" size=300 maxsize=300 value='<?php echo $row_row["Name"]; ?>' class="login" required="required">
        <label for="name">Name :</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
         <input type='text' name="roll" size=30 maxsize=20 value='<?php echo $_SESSION["login_rollno"]; ?>' class="login" required="required">
        <label for="roll">Roll No.</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input list="hostels" value="<?php echo $row_row["Hostel"]; ?>" name="hostel" required="required"/>
        	<datalist id="hostels">
		    <option value="Manas">Manas</option>
		    <option value="Dihing">Dihing</option>
		    <option value="Barak">Barak</option>
		    <option value="Dibang">Dibang</option>
		    <option value="Kameng">Kameng</option>
		    <option value="Umiam">Umiam</option>
		    <option value="Kapili">Brahmaputra</option>
		    <option value="Siang">Siang</option>
		    <option value="Subansiri">Subansiri</option>
		    <option value="Dhansiri">Dhansiri</option>
		    <option value="Lohit">Lohit</option>
		  	</datalist>        
		<label for="hostel">Hostel</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type='text' name="roomno" size=30 maxsize=30 value='<?php echo $row_row["RoomNo"]; ?>' class="login" required="required"/>
        <label for="roomno">Room No.</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input list="degrees" value="" name="degree" required="required"/>
        	<datalist id="degrees">
		    <option value="B. Tech">B. Tech</option>
		    <option value="M. Tech">M. Tech</option>
		    <option value="PhD">PhD</option>
		    <option value="MA">MA</option>
		    <option value="B. Des">B. Des</option>
		    <option value="M. Des">M. Des</option>
		  	</datalist>
        <label for="degree">Degree</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
          <input type='text' name="semester" size=30 maxsize=30 value='<?php echo $row_row["Semester"]; ?>' class="login" required="required"/>
        <label for="semester">Semester</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
         <input type='text' name="purpose" size=30 maxsize=30 value='<?php echo $row_row["PurposeOfLeave"]; ?>' class="login" required="required"/>
        <label for="purpose">Purpose of Leave</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
       <input type='text' name="address" size=30 maxsize=20 value='<?php echo $row_row["HomeAddress"]; ?>' class="login" required="required"/>
        <label for="address">Home Address</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type='text' name="econtact" size=30 maxsize=10 value='<?php echo $row_row["EmergencyContact"]; ?>' class="login" required="required"/>
        <label for="econtact">Emergency Contact</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type='text' name="contact" size=30 maxsize=10 value='<?php echo $row_row["StudentContact"]; ?>' class="login" required="required"/>
        <label for="contact">Your Contact</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type='text' name="datedep" size=30 maxsize=10 value='<?php echo $row_row["DateOfDeparture"]; ?>' class="login" required="required"/>
        <label for="datedep">Date of Departure [yyyy-mm-dd]</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type='text' name="timedep" size=30 maxsize=10 value='<?php echo $row_row["TimeOfDeparture"]; ?>' class="login" required="required"/>
        <label for="timedep">Time of Departure [hh:mm:ss]</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type='checkbox' name="bus" size=2 maxsize=10 value="Y" class="login" />
        <label for="bus">Bus Facility Needed</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
 
      <div class="button-container">
        <button><span>Go
        </span></button>
     <!--   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div> -->
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>


<?php 

//echo "-->";
//print_r($_SESSION); 
//echo "<--";

?>
<!--
<center>
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>

	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
   </form>
   </center>		
-->
<!-- <script> -
// function validateForm()
// {
// var x=document.forms["my_form"]["name"].value;
// var g=document.forms["my_form"]["hostel"].value;
// var h=document.forms["my_form"]["roomno"].value;
// var i=document.forms["my_form"]["degree"].value;
// var j=document.forms["my_form"]["semester"].value;
// var y=document.forms["my_form"]["address"].value;
// var a=document.forms["my_form"]["purpose"].value;
// var b=document.forms["my_form"]["econtact"].value;
// var c=document.forms["my_form"]["contact"].value;
// var d=document.forms["my_form"]["datedep"].value;
// var e=document.forms["my_form"]["timedep"].value;
// var f=document.forms["my_form"]["bus"].value;
// if (x==null || x=="")
//   {
//   alert("Name must be filled out");
//   return false;
//   }
//   if (g==null || g=="")
//   {
//   alert("Hostel must be filled out");
//   return false;
//   }
//   if (h==null || h=="")
//   {
//   alert("Roomno must be filled out");
//   return false;
//   }
//   if (i==null || i=="")
//   {
//   alert("Degree must be filled out");
//   return false;
//   }
//   if (j==null || j=="")
//   {
//   alert("Semester must be filled out");
//   return false;
//   }
//   if (y==null || y=="")
//   {
//   alert("HomeAddress must be filled out");
//   return false;
//   }
//    if (a==null || a=="")
//   {
//   alert("PurposeofLeave must be filled out");
//   return false;
//   }

//  if (b==null || b=="")
//   {
//   alert("EmergencyContact must be filled out");
//   return false;
//   }

//  if (c==null || c=="")
//   {
//   alert("YourContact must be filled out");
//   return false;
//   }

//  if (d==null || d=="")
//   {
//   alert("Date_of_departure must be filled out");
//   return false;
//   }

//  if (e==null || e=="")
//   {
//   alert("Time_of_departure must be filled out");
//   return false;
//   }

//  if (f==null || f=="")
//   {
//   alert("Bus_facility_Needed must be filled out");
//   return false;
//   }




// }



//      <table width=259 cellpadding=3 cellspacing=0>
      
// <tr>
//        <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Name:</font></td>
// <td align=center>
//           <input type='text' name="name" size=30 maxsize=30 value='' class="login">
//         </td>
// </tr>

// <tr>
//         <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Roll_No:</font></td>
// <td align=center>
//           <input type='text' name="roll" size=30 maxsize=20 value='<?php //echo $_SESSION["login_rollno"]; ?>' class="login" >
//         </td>

// </tr>

// <tr>
//        <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Hostel:</font></td>
// <td align=center>
//           <input type='text' name="hostel" size=30 maxsize=30 value='' class="login" >
//         </td>
// </tr>
// <tr>
//        <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;RoomNo:</font></td>
// <td align=center>
//           <input type='text' name="roomno" size=30 maxsize=30 value='' class="login" >
//         </td>
// </tr>
// <tr>
//        <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Degree:</font></td>
// <td align=center>
// 		  <select name="degree" align="left">
// 		    <option value="B. Tech">B. Tech</option>
// 		    <option value="M. Tech">M. Tech</option>
// 		    <option value="PhD">PhD</option>
// 		    <option value="MA">MA</option>
// 		    <option value="B. Des">B. Des</option>
// 		    <option value="M. Des">M. Des</option>
// 		  </select> -->
         <!-- <input type='text' name="degree" size=30 maxsize=30 list="degrees" class="login" >
//           <datalist id="degrees">
//           	  	<option value="B. Tech">
// 				<option value="M. Tech">
// 				<option value="Chrome">
// 				<option value="Opera">
// 				<option value="Safari">
//           </datalist> -->
 <!--         </td>
// </tr>
// <tr>
//        <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Semester:</font></td>
// <td align=center>
//           <input type='text' name="semester" size=30 maxsize=30 value='' class="login" >
//         </td>
// </tr> 
// <tr>
//         <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;HomeAddress:</font></td>
// <td align=center>
//           <input type='text' name="address" size=30 maxsize=20 value='' class="login" >
//         </td>

// </tr>
// <tr>
//         <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;PurposeofLeave:</font></td>
// <td align=center>
//           <input type='text' name="purpose" size=30 maxsize=20 value='' class="login" >
//         </td>

// </tr>
// <tr>
//         <td align=center class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;EmergencyContact</font></td>
// <td align=center>
//           <input type='text' name="econtact" size=30 maxsize=10 value='' class="login" >
//         </td>

// </tr>
// <tr>
//         <td align=center class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;YourContact</font></td>
// <td align=center>
//           <input type='text' name="contact" size=30 maxsize=10 value='' class="login" >
//         </td>

// </tr>
// <tr>
//         <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Date_of_departure</font></td>
// <td align=center>
//           <input type='date' name="datedep" size=30 maxsize=10 value='' class="login" >
//         </td> -->
 <!-- 
// </tr>
// <tr>
//         <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Time_of_departure</font></td>
// <td align=center>
//           <input type='text' name="timedep" size=30 maxsize=10 value='' class="login" >
//         </td>

// </tr>
// <tr>
//         <td align=left class="login"><font size="4" face="Tahoma">&nbsp; &nbsp;Bus_facility_Needed (Y/N)</font></td>
// <td align=center>
//           <input type='checkbox' name="bus" size=2 maxsize=10 value="Y" class="login" >
//         </td>

// </tr>
// <td align=center colspan=2>
//           <br>
//           <input type='submit' value='submit' class="login">
//         </td>
// </form>
 

// </center>
 -->



<!--<?php
//die();
?> -->
      </div>
</div>
<a id="portfolio" href="https://github.com/messi96" title=""><i class="fa fa-link"></i></a>
<a id="codepen" href="#" title=""><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

  </body>
</html>