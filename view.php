

 
  <?php
   
  
include('db.php');
   $query1=mysql_query("SELECT * FROM furniture");


  //$answer=mysql_db_query ($database, $query);
  print ("<p><u><font color=black><h4><strong></strong>The  details of all Product </strong></h4></u>");
    print ("<font size=2 color=green><table bordercolor=#3333FF border=1>
		
	<tr><td><b><font size=2>Product code</font></b></td><td><b><font size=2>Product Name</font></b></td></tr>");

  while ($line=mysql_fetch_object($query1))
  {
  $furniturename=$line->furniturename;
  $furnitureownername=$line->furnitureownerName;
    
 print ("<tr><td>$furniturename</td><td>$furnitureownername</td></tr>");
  }
 
  print ("</table>");
            // Close of the connection
   ?>