<?php

include("liabrary.php");
$obj=new employ;
extract($_POST);

if(isset($sub))
{
	include("location:employee.php");
	$obj->inser($name,$email,$phone);
	
	}
if(isset($show))
{
		include("location:employee.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table width="304" border="1">
  <tr>
    <td colspan="2"><div align="center">Add Employee</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $obj->msg; ?></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" id="name" required/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" id="email" required /></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input type="text" name="phone" id="phone" required /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    <strong>
      <input type="submit" name="sub" id="sub" value="Submit">
      <input type="button" name="show" value="Show Emp" onClick="employee.php" />
      </strong>
    </div></td>
 
  </tr>
</table>
</form>
</body>
</html>