<?php
 $err_uname="";
 $uname="";
 $err_pass="";
 $pass="";
 $err_type="";
 $type="";
 $err_invalid="";
 $has_error=false;
	
 $xml=simplexml_load_file("information.xml");

 if(isset($_POST['submit']))
 {
    if(empty($_POST['uname']))
			{
				$err_uname="*username is required";
				$has_error=true;
			}
			else
			{			
				$uname=htmlspecialchars($_POST['uname']);
				
			}
	if(empty($_POST['pass']))
		    {
				$err_pass="*password is required";
				$has_error=true;
			}
            else
		    {
			    $pass=$_POST['pass'];
		    }			
    if(!isset($_POST['type']))
		    {
				$err_pass="*choose user type";
			}					
  	if(!$has_error)
		{
			$xml=simplexml_load_file("information.xml");
			foreach($xml->details as $details) 
			{
				
			
				if($uname == $details->uname && $pass==$details->pass && $details->type == "admin")
				{
					//session_start();
					setcookie("loggedinadmin",$uname,time()+120);
					//$_SESSION["loggedinadmin"]=$uname;
					header("Location:admin_home.php");
				}
				else if ($uname == $details->uname && $pass==$details->pass && $details->type == "user")
				{
					//session_start();
					setcookie("loggedinuser",$uname,time()+120);
					//$_SESSION["loggedinuser"]=$uname;
					header("Location:userhome.php");
				}
				else if ($uname == $details->uname && $pass==$details->pass && $details->type == "employee")
				{
					//session_start();
					setcookie("loggedinemployee",$uname,time()+120);
					//$_SESSION["loggedinuser"]=$uname;
					header("Location:emphome.php");
				}
				else
				{
					$err_invalid="Invalid Username Password";
					//echo $err_invalid;
				}
			}
		}	
			
 }


 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>

<div class="header">
  <h1>Lazy cafe</h1>
</div>

<div class="topnav">
  <ul>
	 <li><a href="contact.php">Contact</a></li>
	 <li><a href="feedback.php">Feedback</a></li>
	 <li><a href="reg.php">Registration</a></li>
     <li><a href="main2.php">Home</a></li>
    </ul>
</div>
 <div class="coverphoto">
	<img src= "image/Food-1.jpg" alt="">
 </div>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
     <form method="post" action="">
    <fieldset>
      <legend>Login</legend>
       <label for="type">Choose Your Login Type:</label><br>
       <select id="type" name="type" value="" placeholder="">
        <option value="admin">admin</option>
        <option value="user">user</option>
        <option value="employee">employee</option>  
       </select><span style="color:red"><?php echo $err_type;?></span><br><br>
       <label for="uname">Username:</label><br>
       <input type="text" id="uname" name="uname"><span style="color:red"><?php echo $err_uname;?></span><br><br>
       <label for="pass">Password:</label><br>
       <input type="password" id="pass" name="pass"><span style="color:red"><?php echo $err_pass;?></span><br><br>
       <input type="submit" value="Submit" name="submit">
       <input type="reset" value="reset" name="reset">
    </fieldset>
   </form>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Welcome to our website</h2>
      <p>Some text about me in culpa qui officia deserunt mollit anim.Some text about me in culpa qui officia deserunt mollit anim.
	  Some text about me in culpa qui officia deserunt mollit anim..Some text about me in culpa qui officia deserunt mollit anim.Some text about me in culpa qui officia deserunt mollit anim.
	  Some text about me in culpa qui officia deserunt mollit anim.Some text about me in culpa qui officia deserunt mollit anim.Some text about me in culpa qui officia deserunt mollit anim.
	  Some text about me in culpa qui officia deserunt mollit anim.</p>
    </div>
	</div>
 
</div>

<div class="footer">
  
</div>

</body>
</html>