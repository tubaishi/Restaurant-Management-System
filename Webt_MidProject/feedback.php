<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="feedback.css">
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
<div class="img">
<p>add picture</p>

</div>
<div class="row">
  <div class="column">
    <div class="card">
     <form>
    <fieldset>
      <legend>Feedback Form</legend>
	   <table>
       
	   <tr><td><label for="name">Name:</label></td>
       <td><input type="text" id="name" name="name"></td></tr>
	   <tr><td><label for="contact">Contact No.:</label></td>
	   <td><input type="number" id="contact" name="contact"></td></tr>
	   <tr><td><label for="mail">Email:</label></td>
	   <td><input type="email" id="mail" name="mail"></td></tr>
	   <tr><td><label for="msg">Query/Message:</label></td>
	   <td><textarea rows="4" cols="50" name="msg"></textarea></td></tr>
       <tr><td><input type="submit" value="Submit"></td>
       <td><input type="reset" value="reset"></td></tr>
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