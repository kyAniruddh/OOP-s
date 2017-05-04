<?php
include("library.php");
$obj=new check4;
extract($_POST);
if(isset($sub))
{
	$obj->add($name,$address,$city);
	
}

?>

<form method="post">
<h1>Add Employee Here</h1>
<p><?=$obj->msg;?><p>
Name:<input type="text" name="name" /><br/><br/>
Address:<input type="text" name="address" /><br/><br/>
City:<input type="text" name="city" /><br/><br/>
<input type="submit" name="sub" value="submit" /><br/><br/>
<a href="employee.php">Show Emp</a>
</form>