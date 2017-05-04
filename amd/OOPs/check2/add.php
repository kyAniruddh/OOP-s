<?php
include("liabrary1.php");
$obj=new ch2;
extract($_POST);
if(isset($sub))
{
	$obj->add($name,$address);
	
}
?>

<form method="post">
<h1><?php echo"$obj->msg"; ?></h1>
Name <input type="text" name="name" required/> <br/><br/>
 Address<input type="text" name="address" required /><br/><br/>
<input type="submit" name="sub" value="submit"  />
 
<a href="employee.php">Show Emp</a>

</form>