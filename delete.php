<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<br />
  <br />
  <br />
  <br />
  <br />
  <br />
 
<center> <form action="../Ibrahim_Sekabera_National_Practical_Exam/delete.php" method="post">
  <input type="text" name="search" placeholder="delete using Product Code" size=20><input type="submit" value="Delete">
  
  <?php
  
  @$search=$_POST['search'];
  include('db.php');
  

  $query=mysql_query("DELETE FROM product WHERE ProductCode='$search'");
  
  
   ?>
  </form></center>
</body>
</html>
