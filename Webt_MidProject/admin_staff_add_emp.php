<?php
 $err_uname="";
 $uname="";
 $err_gender="";
 $gender="";
 $err_contact="";
 $contact="";
 $err_address="";
 $address="";

 if(isset($_POST['submit']))
 {
    if(empty($_POST['uname']))
			{
				$err_uname="*username is required";
			}
			else
			{			
				$uname=htmlspecialchars($_POST['uname']);
				echo $uname;
			}
    if(!preg_match("/^[0]{1}[0-9]\d{9}$/", $_POST['contact']))
			{
				$err_contact="*contact number is invalid";
			}
    if(empty($_POST['address']))
		    {
				$err_address="*address required";
			}
	if (empty($_POST["gender"])) 
	        {
                $err_gender = "*Gender is required";
		    }
            else
            {
				echo $gender;
			}				
  		
			
 }


 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin_staff_add_emp.css">
</head>
<body>

<div class="header">
  <h1>Lazy cafe</h1>
</div>

<div class="topnav">
  <ul>
	 <li><a href="main2.php">Logout</a></li>
	 <li><a href="admin_news_panel.php">News Panel</a></li>
	 <li><a href="admin_menu.php">Menu Panel</a></li>
	 <li><a href="admin_staff.php">Staff Panel</a></li>
     <li><a href="admin_home.php">Home</a></li>
    </ul>
</div>
<div class="img">
<p>add picture</p>

</div>
<div class="row">
  <div class="column">
    <div class="card">
     <form method="post" action="">
    <fieldset>
      <legend>Staff Panel</legend>
	   <table>
       <tr>
	    <td><label for="uname">Username:</label></td>
        <td><input type="text" id="uname" name="uname"><span style="color:red"><?php echo $err_uname;?></span></td>
	   </tr>
	   <td><label for="gender">Gender:</label></td>
        <td><input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
	    <input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
		<span style="color:red"> <?php echo $err_gender;?></span></td>
	   </tr>
	   <tr>
	    <td><label for="contact">Contact No.:</label></td>
	    <td><input type="text" id="contact" name="contact"><span style="color:red"><?php echo $err_contact;?></span></td>
	   </tr>
	   <tr>
	    <td><label for="address">Address:</label></td>
	    <td><textarea rows="4" cols="50" name="address"></textarea><span style="color:red"><?php echo $err_address;?></span></td>
	   </tr>
       <tr>
       <tr><td><input type="submit" value="Submit" name="submit"></td>
       <td><input type="reset" value="Reset" name="reset"></td></tr>
	   </table>
    </fieldset>
   </form>
    </div>
  </div>
  
 
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>