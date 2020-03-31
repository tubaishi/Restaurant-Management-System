<?php
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:main2.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="userhome.css">
</head>
<body>

<div class="header">
  <h1>Lazy cafe</h1>
</div>

<div class="topnav">
  <ul>
	 <li><a href="main2.php">Logout</a></li>
	 <li><a href="online_booking.php">Online Booking</a></li>
	 <li><a href="usermenu.php">Menu</a></li>
     <li><a href="userhome.php">Home</a></li>
   </ul>
</div>
<div class="img">
<p>add picture</p>

</div>
<div class="row">
  <div class="column">
    <div class="card">
	  <span align="center"> welcome <?php echo $_COOKIE['loggedinuser'];?> in our cafe<br>Are you hungry?</span>
     <h2>Welcome to our website</h2>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>