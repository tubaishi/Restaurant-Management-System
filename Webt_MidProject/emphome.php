<?php
	//session_start();
	if(!isset($_COOKIE['loggedinemployee']))
	{
		header("Location:main2.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="emphome.css">
</head>
<body>

<div class="header">
  <h1>Lazy cafe</h1>
</div>

<div class="topnav">
  <ul>
	 <li><a href="main2.php">Logout</a></li>
	 <li><a href="verify_booking.php">Verify Booking</a></li>
	 <li><a href="billing.php">Billing</a></li>
     <li><a href="emphome.php">Home</a></li>
   </ul>
</div>
<div class="img">
<p>add picture</p>

</div>
<div class="row">
  <div class="column">
    <div class="card">
	 <span align="center">Welcome <?php echo $_COOKIE['loggedinemployee'];?></span>
     <h2>Welcome to our website</h2>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>