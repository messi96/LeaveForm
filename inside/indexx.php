<?php
session_start();
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

    
    
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Student Leave Form</h1><span><i class='fa fa-code'></i> by <a href=''>messi</a></span>
</div>
<div class="rerun"><a href="">Welcome to the MOST-SECURE website !</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    
    <form action="indexx.php" name="" method="post">
      <div class="input-container">
        <input type="text" name="uname" required="required"/>
        <label for="Username">Webmail id</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="passwd" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" name="roll" required="required"/>
        <label for="Password">RollNo</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go
        </span></button>
     <!--   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div> -->
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>

<!--   </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
     Contact Admin For registering 
           <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="passwd" id="Password" required="required" value=""/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
 -->
    
    
<center>

<!--<form method="post" name="login" action="login.php">
<label for="name" class="labelname"> Username </label>
<input type="text" name="username" id="userid" required="required" /><br />
<label for="name" class="labelname"> Password </label>
<input type="password" name="password" id="passid" required="required"  /><br />
<input type="submit" name="submit" id="submit"  value="Login" />
</form> -->
<?php
	echo "<center>";
	//echo "hi";
 	include("../sql_files/connect.php");
	// echo "<br/>";
	// echo "<br/>";
	// echo "<div style=' margin-top:20px;color:#000000; font-size:24px; text-align:center'> Welcome to the Login Page &nbsp;&nbsp;&nbsp;<font color='#FF0000'> </font><br></div>";
	// echo "<div  align='center' style='margin:20px 0px 0px 510px;border:20px; background-color:#FFFFFF; text-align:center;width:400px; height:150px;'>";
	// echo "<div style='padding-top:10px; font-size:15px;'>";
 // 	echo "<br/>";

	// echo "<!--Form to post the contents -->";
	// echo '<form action=" " name="form1" method="post">';

	// echo ' <div style="margin-top:15px; height:30px;">Username : &nbsp;&nbsp;&nbsp;';
	// echo '   <input type="text"  name="uname" value=""/>  </div>';
 //  	echo "<br/>";
	// echo ' <div> Password :&nbsp; &nbsp; &nbsp;';
	// echo '   <input type="password" name="passwd" value=""/></div></br>';	
	// echo ' <div style="margin-top:15px; height:30px;">Roll No. : &nbsp;&nbsp;&nbsp;';
	// echo '   <input type="text"  name="roll" value=""/>  </div>';
	// echo "<br/>";
	// echo "<br/>";
	// echo '   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div>';
	// echo "<br/>";
 //    echo "<br/>";

	// echo '</form>';
	// echo '</div>';
	// echo '</div>';
	// echo '<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">';
	// echo '<font size="3" color="#000000">';
	// echo '<center><br>';
	// echo '</center>';



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
    //print_r($_POST);
    //echo "<br/>";

	//print_r($_POST);
	echo "<br/>";
		$uname = check_input($_POST['uname']);
		$passwd = check_input($passwd);
		$passwd = md5($_POST['passwd']);
		$roll = check_input($_POST['roll']);
		$passwd = check_input($passwd);
		//echo $uname;
		//echo "<br/>";
		//echo $passwd;
		//echo "<br/>";
		//$passwd = md5($passwd);
		//echo "<br/>";
		//echo $passwd;
		echo "<br/>";


		//echo "here1";
$sql="SELECT  students.webmail_id, students.password,students.roll_no FROM students WHERE students.webmail_id=$uname and students.password=$passwd and students.roll_no=$roll ORDER BY students.id DESC LIMIT 0,1";
		$result1 = mysql_query($sql);
		$row1 = mysql_fetch_array($result1);
		//echo "here2";
		if($row1)
				{
	
		//		echo "hereif";
		//		echo $_SESSION;
				//session_register("sessionusername");
		//		echo "9";
		//		echo "1" . $_SESSION;
				$_SESSION['login_username']=$uname;
				$_SESSION['login_rollno']=$roll;
				$_SESSION['login_rollno1']='';
				$_SESSION['login_name']='';
				$_SESSION['login_hostel']='';
				$_SESSION['login_roomno']='';
				$_SESSION['login_degree']='';
				$_SESSION['login_semester']='';
				$_SESSION['login_homeadd']='';
				$_SESSION['login_poleave']='';
				$_SESSION['login_econtact']='';
				$_SESSION['login_contact']='';
				$_SESSION['login_contact']='';
				$_SESSION['login_dod']='';
				$_SESSION['login_tod']='';
				$_SESSION['login_bus']='';
		//		echo "here";
		//		echo $_SESSION['login_username'];	

				$sq="SELECT * from LeaveInfo where roll=$roll";
				$qry=mysql_query($sq);
				$row=mysql_fetch_array($qry);
				if($row) {
				$_SESSION['login_update']='yes';
				echo "You have ALREADY submitted a response !";
				echo "<br/>";
				echo "<br/>";
				echo "Contact the Admin for further details";
				echo "<br/>";
				echo "<br/>";
				echo "Or ";
				echo '<a href ="update.php">click here</a>';
				//session_destroy();
				die();
			}
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
			//echo "here3";
			echo "</center>";
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