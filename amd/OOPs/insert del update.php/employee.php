<?php
include("liabrary.php");
$obj=new employ;
if(isset($_GET['del']))
{
	$obj->del($_GET['del']);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="310" border="1">
  <tr>
    <td colspan="5"><div align="center">Employee Information <a href="add.php"> Add epmloye</a></div></td>
  </tr>
 
  <tr>
    <td>sr_no</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone</td>
       <td>Action</td>
  </tr>
  <?php $obj->show();?>
</table>
</body>
</html>