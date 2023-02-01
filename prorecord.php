<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center><label><h3>The product record.</h3></label></center><br />

<form  action="../Ibrahim_Sekabera_National_Practical_Exam/prorecord.php"  method="post" onSubmit="return validateForm()" name="myForm">

<center><table>
<tr>
<td><label style="background:#009900">Product Code  </label></td><td><input type="text" name="productcode" style="background:#CCFFFF" /></td></tr><tr><td>
<label style="background:#009900">Product Name</label></td><td><input type="text" name="productname" style="background:#CCFFFF" /><br /></td></tr>

<tr><td colspan="2"><center><input type="submit" value="Record" style="background:#B9B5B9" /></center></td></tr>
<tr>
<td colspan="4"><center> <hr /></center></td><td>
</tr>


</table></center>


</center>
</form>

<?php
 
 
  @$productcode=$_POST['productcode'];
  @$productname=$_POST['productname'];
   
	
	

 include('db.php');


if(!empty( $productcode)|| !empty( $producttname))
{

$query=mysql_query("INSERT INTO product
VALUES ( \"$productcode\",\"$productname\")");
 

     if ($query) {
                ?>
                <script>
                    alert ("Successfully recorded into the Database");
                </script>
                <?php
            }
            else {
                echo "Failed to Record".mysql_error();
            }
        }
    ?>
</body>
</html>
