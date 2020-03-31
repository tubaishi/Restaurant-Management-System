<?php
 $err_pname="";
 $pname="";
 $err_categories="";
 $ategories="";
 $err_price="";
 $price="";
 $err_description="";
 $description="";

 if(isset($_POST['submit']))
 {
    if(empty($_POST['pname']))
			{
				$err_pname="*Product Name is required";
			}
			else
			{			
				$pname=($_POST['pname']);
				echo $pname;
			}
   if(empty($_POST['categories']))
			{
				$err_categories="*categories is required";
			}
			else
			{			
				$categories=($_POST['categories']);
				echo $categories;
			}
			if(empty($_POST['price']))
			{
				$err_price="*price is required";
			}
			else
			{			
				$price=($_POST['price']);
				echo $price;
			}
			if(empty($_POST['description']))
			{
				$err_description="*description is required";
			}
			else
			{			
				$description=($_POST['description']);
				echo $description;
			}
			
 }


 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin_menu_details.css">
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
     <form  method="post" action="">
     <fieldset>
      <legend>Add Menu details</legend>
	   <table>
       <tr>
	    <td><label for="pname">Product Name:</label></td>
        <td><input type="text" id="pname" name="pname"><span style="color:red"><?php echo $err_pname;?></span></td>
	   </tr>
       <tr>
	    <td><label for="categories">Categories:</label></td>
        <td><input type="text" id="categories" name="categories"><span style="color:red"><?php echo $err_categories;?></span></td>
	   </tr>
	   <tr>
	    <td><label for="price">Price:</label></td>
        <td><input type="text" id="price" name="price"><span style="color:red"><?php echo $err_price;?></span></td>
	   </tr>
	   
	    <td><label for="description">Description:</label></td>
	    <td><textarea rows="4" cols="50" name="description"></textarea><span style="color:red"><?php echo $err_description;?></span></td>
	   </tr>
       <tr>
	    <td><input type="submit" name="submit" value="Submit"></td>
        <td><input type="reset" value="reset"></td>
	   </tr>
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