
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="billing.css">
</head>
<body>

<div class="header">
  <h1>Lazy cafe</h1>
</div>

<div class="topnav">
  <ul>
	 <li><a href="main2.php">Logout</a></li>
	 <li><a href="verify_booking.php">Verify Booking </a></li>
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
     <form>
      <fieldset>
       <legend>Billing Panel</legend>
	    <label for="name">Customer Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
		<label for="product">Search Product:</label><br>
        <input type="search" id="product" name="product"><br><br>
		<label for="quantity">Quantity:</label><br>
		<input type="number" id="quantity" name="quantity"><br><br>
		<input type="button" name="addorder" value="Add Order">
		<input type="button" value="Generate Bill">
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
