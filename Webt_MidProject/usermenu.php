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
     <form>
      <fieldset>
       <legend>View Menu Details</legend>
	    <label for="category">Category:</label><br>
        <select id="category" name="category">
         <option value="chinese">Chinese</option>
         <option value="fastfood">Fastfood</option>
         <option value="indian">Indian</option>  
		 <option value="bangali">Bangali</option>  
		 <option value="japanese">Japanese</option>  
        </select><br><br>
		<input type="submit" value="Submit">
        <input type="reset" value="reset">
      </fieldset>
     </form>
    </div>
  </div>
</div>

<div class="column">
<div class="card">
 <textarea rows="4" cols="93" name="menu_table"></textarea>
</div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>