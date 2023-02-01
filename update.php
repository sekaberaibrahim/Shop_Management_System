<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>make a change</title>
<link rel="stylesheet" type="text/css" href="http://www.jscodes.com/codes/calendar_javascript/demo/css/datePicker.css" />
<script src="http://www.jscodes.com/codes/calendar_javascript/demo/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="http://www.jscodes.com/codes/calendar_javascript/demo/js/jquery.datePicker-min.js" type="text/javascript"></script>
<!--[if IE]><script type="text/javascript" src="http://www.jscodes.com/codes/calendar_javascript/demo/js/jquery.bgiframe.min.js"></script><![endif]-->

</head>


<BODY>

<center><p><font color=""><h3>Are you commit errors? try to update it!</h3></font></p></center>


 <center> <form  action="../Ibrahim_Sekabera_National_Practical_Exam/update.php"  method="post" onsubmit="return validateForm()" name="myForm">

<center><table>
<tr>
<td><label style="background:#009900">Product code</label></td><td><input type="text" name="ProductCode" style="background:#CCFFFF" /></td></tr><tr><td>
<label style="background:#009900">Product Name</label></td><td><input type="text" name="ProductName" style="background:#CCFFFF" /><br /></td></tr>

<tr><td colspan="2"><center><input type="submit" name="submit" value="Update Product"></center></td></tr>
<tr>
<td colspan="4"><center> <hr /></center></td><td>
</tr>


</table></center>
 
 </form>
<?php
 
@$productcode=$_POST['ProductCode'];
  @$productname=$_POST["ProductName"];

$server="127.0.0.1";
  $database="BerwaShop";
  $username="root";
  $password="";
  $connection=mysql_connect($server,$username,$password) or die ('server not found'.mysql_error( ));
mysql_select_db($database,$connection) or die('database not found'.mysql_error( ));
$query= mysql_query("UPDATE product SET ProductName='$productname' WHERE ProductCode='$productcode' "); 
          
mysql_close ( );
?>
</form>
<?php
echo strftime('<font color=""/>%A,');
echo strftime('<font color=""/> %x<br />');
//echo strftime('%c<br />');
//echo strftime('%Y<br />');
//echo date('Y');
?>

</body>
</html>

