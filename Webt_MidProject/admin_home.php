<?php
	//session_start();
	if(!isset($_COOKIE['loggedinadmin']))
	{
		header("Location:main2.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Home Page</title>
    <link rel="stylesheet" type="text/css" href="admin_home.css">
</head>
<body>
  <div class="container">
   <div class="header">
    <h1>LAZY CAFE</h1>
   </div>
   <div class="navbar">
    <ul>
	 <li><a href="main2.php">Logout</a></li>
	 <li><a href="admin_news_panel.php">News Panel</a></li>
	 <li><a href="admin_menu.php">Menu Panel</a></li>
	 <li><a href="admin_staff.php">Staff Panel</a></li>
     <li><a href="admin_home.php">Home</a></li>
    </ul>
   </div>
  </div>

  <div class="coverphoto">
	<img src= "image/Food-1.jpg" alt="">
  </div>
  <span align="center">Welcome <?php echo $_COOKIE['loggedinadmin'];?></span>
  <div class="row">
  <div class="leftcolumn">
  <div class="card">
  <div class="news">
	<h3>News & Event</h3>
		<ul>
			<li><a href="#">New offers</a></li>
		</ul>
  
  </div>
  </div>
  </div>
  
	<div class="rightcolumn">
    <div class="card">
	<div class="about">
	 
		<h3>Welcome to our WEBSITE</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's </p>
							
					<a href="admin_view_user.php">Views User</a>
					<a href="admin_view_feedback.php">Views Feedback</a>
	</div>
	</div>
	</div>
	</div>
  <div class="footer">
   <p>Footer</p>
  </div>

</body>
</html>