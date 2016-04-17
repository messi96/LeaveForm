<?php
session_start();
?>
<!--<form method="post" name="login" action="login.php">
<label for="name" class="labelname"> Username </label>
<input type="text" name="username" id="userid" required="required" /><br />
<label for="name" class="labelname"> Password </label>
<input type="password" name="password" id="passid" required="required"  /><br />
<input type="submit" name="submit" id="submit"  value="Login" />
</form> -->
<?php

 	include("../sql-connections/sql-connect.php");
	echo "<br/>";
	echo "<br/>";
	echo "<div style=' margin-top:20px;color:#000000; font-size:24px; text-align:center'> Welcome to the Login Page &nbsp;&nbsp;&nbsp;<font color='#FF0000'> </font><br></div>";
	echo "<div  align='center' style='margin:20px 0px 0px 510px;border:20px; background-color:#FFFFFF; text-align:center;width:400px; height:150px;'>";
	echo "<div style='padding-top:10px; font-size:15px;'>";
 	echo "<br/>";

	echo "<!--Form to post the contents -->";
	echo '<form action=" " name="form1" method="post">';

	echo ' <div style="margin-top:15px; height:30px;">Username : &nbsp;&nbsp;&nbsp;';
	echo '   <input type="text"  name="uname" value=""/>  </div>';
  	echo "<br/>";
	echo ' <div> Password :&nbsp; &nbsp; &nbsp;';
	echo '   <input type="password" name="passwd" value=""/></div></br>';	
	echo ' <div style="margin-top:15px; height:30px;">Roll No. : &nbsp;&nbsp;&nbsp;';
	echo '   <input type="text"  name="roll" value=""/>  </div>';
	echo "<br/>";
	echo "<br/>";
	echo '   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div>';
	echo "<br/>";
    echo "<br/>";

	echo '</form>';
	echo '</div>';
	echo '</div>';
	echo '<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">';
	echo '<font size="3" color="#000000">';
	echo '<center><br>';
	echo '</center>';

function check_input($value)
	{
	if(!empty($value))
		{
		$value = substr($value,0,49); 
		}
		if (get_magic_quotes_gpc())  // Stripslashes if magic quotes enabled
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
	
	if(isset($_POST['uname']) && isset($_POST['passwd']))
{
    print_r($_POST);
    echo "<br/>";

	print_r($_POST);
		$uname = check_input($_POST['uname']);
		$passwd = check_input($passwd);
		$passwd = md5($_POST['passwd']);
		$roll = check_input($_POST['roll']);
		$passwd = check_input($passwd);
		echo $uname;
		echo "<br/>";
		echo $passwd;
		echo "<br/>";
		//$passwd = md5($passwd);
		echo "<br/>";
		echo $passwd;
		echo "<br/>";

		$sq="SELECT * from LeaveInfo where roll=$roll";
		$qry=mysql_query($sq);
		$row=mysql_fetch_array($qry);
		if($row) {
			echo "YOu have FUCKING ALREADY submitted a response !";
			echo "<br/>";
			echo "<br/>";
			echo "Contact messi for further details";
			echo "<br/>";
			echo "Or ";
			echo '<a href ="">click here</a>';
			session_destroy();
			die();
		}



		echo "here1";
$sql="SELECT  students.webmail_id, students.password,students.roll_no FROM students WHERE students.webmail_id=$uname and students.password=$passwd and students.roll_no=$roll ORDER BY students.id DESC LIMIT 0,1";
		$result1 = mysql_query($sql);
		$row1 = mysql_fetch_array($result1);
		echo "here2";
		if($row1)
				{
				echo "hereif";
				echo $_SESSION;
				//session_register("sessionusername");
				echo "9";
				echo "1" . $_SESSION;
				$_SESSION['login_username']=$uname;
				$_SESSION['login_rollno']=$roll;
				$_SESSION['login_rollno1']='';
				$_SESSION['login_name']='';
				$_SESSION['login_homeadd']='';
				$_SESSION['login_poleave']='';
				$_SESSION['login_econtact']='';
				$_SESSION['login_contact']='';
				$_SESSION['login_contact']='';
				$_SESSION['login_dod']='';
				$_SESSION['login_tod']='';
				$_SESSION['login_bus']='';
				echo "here";
				echo $_SESSION['login_username'];	
				header ('Location: profile.php');
				echo "</font>";		
				
				echo "</font>";
				echo "<br>";
				print_r(mysql_error());			
				echo "<br><br>";
				//echo "test";
				echo "<br>";
				}
			else
				{
				echo '<font color= "#00000" font size="4">';
				print_r(mysql_error());
				echo "<font><b>Invalid credentials<b/><font/>";
				echo "</br>";			
				echo "</br>";
				echo "</font>";  
				}
			echo "here3";
}



?>
