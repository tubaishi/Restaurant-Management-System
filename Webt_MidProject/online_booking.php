<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="online_booking.css">
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
       <legend>Online Table Booking Panel</legend>
	    <label for="table">Choose Table No.:</label><br>
        <select id="table" name="table">
         <option value="one">1</option>
         <option value="two">2</option>
         <option value="three">3</option>  
		 <option value="four">4</option>  
		 <option value="five">5</option>  
        </select><br><br>
		<label for="seat">Seats:</label><br>
		<select id="seat" name="seat">
         <option value="one">1</option>
         <option value="two">2</option>
         <option value="three">3</option>  
		 <option value="four">4</option>  
		 <option value="five">5</option>  
        </select><br><br>
		<label for="time">Timing:</label><br>
		<select id="time" name="time">
         <option value="1stslot">10am-12pm</option>
         <option value="2ndslot">12pm-2pm</option>
         <option value="3rdslot">2pm-4pm</option>  
		 <option value="4thslot">4pm-6pm</option>  
		 <option value="5thslot">6pm-8pm</option>  
        </select><br><br>
		<label for="date">Booking Date:</label><br>
		<input type="date" id="date" name="date"><br><br>
		<input type="submit" value="Submit">
        <input type="reset" value="Reset">
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